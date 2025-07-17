<?php

namespace App\Http\Controllers;

use App\Models\Adminpage;
use App\Models\Cart;
use App\Models\Confirm_order;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthManager extends Controller
{

    public function home()
    {
        return view("welcome");
    }
    public function edit($id){
        $card = Adminpage::findOrFail($id);
        return view('editadminpagecards',compact('card'));
    }
    public function viewHomecards()
    {
        $card = Adminpage::all();
        return
        view('welcome', compact('card'));
    }
    public function adminpage()
    {
        $order = Confirm_order::with('User')->get();
        $email = Contact::all();
        $card = Adminpage::all();
        return view('adminpage', compact('email','card','order'));
    }
    public function cartview()
    {
        $cart = Cart::all();
        return view("cart", compact('cart'));
    }
    public function  login()
    {
        return view("auth/login");
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('viewHomecards'));
        }
        return redirect()->intended(route('login'));
    }
    public function register()
    {
        return view("auth/register");
    }
    public function registerPost(Request $request)
    {
        $validate =  $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",

        ]);
        if($validate) {
             $existingUser = Users::where('email', $request->email)->first();

    if ($existingUser) {
        return redirect()->back()->with("error", "Email already registered. Try logging in.");
    }
    $Firstuser = Users::count()=== 0 ;
        $user = new Users();
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $Firstuser ? "admin" : "user";
        $user->save();
        return redirect()->route('login')->with('success' , 'successfully registered')    ;
    }
         else {
            return redirect()->back()->with("error", "done");
        }
    }
    public function adminpost(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "image" => "required",
            "price" => "required",
        ]);
        $card = new Adminpage();
        $card->title = $request->title;
        $card->description = $request->description;
        $card->price = $request->price;
        if ($request->image != "") {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $image->move(public_path("uploads/image_uploads"), $image_name);
            $card->image = $image_name;
        }
        if ($card->save()) {
            return redirect()->back()->with("success", "done");
        }
        else{       
             return redirect()->back()->with("error", "inter all things");
        }
    }

    public function update(Request $request, $id){
        $request->validate([
            "title" => "required",
            "description" => "required",
            "image" => "required",
            "price" => "required",
        ]);

        $card = Adminpage::findOrFail($id);
        $card->title = $request->title;
        $card->description = $request->description;
        $card->price = $request->price;
         if ($request->image != "") {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $image_name = time() . "." . $ext;
            $image->move(public_path("uploads/image_uploads"), $image_name);
            $card->image = $image_name;
        }
        $card->save();

        return redirect()->route('viewcards')->with("success","success");
    }

    public function carddelete($id){
        $card = Adminpage::findOrFail($id);
        $card->delete();
        return redirect()->back()->with("success","deleted ");
    }

    public function contactpost(Request $request)
    {
        $request->validate([
            'contact' =>  'required',
        ]);
        $contact = new Contact();
        $contact->contact = $request->contact;
        $contact->save();
        return redirect()->back()->with("success", "Our team will contact you leter");
    }
    public function cartpost(Request $request){
       $cartitem = [
        "title" => $request->cart_title,
        "description"=> $request->cart_description,
        "price"=> $request->cart_price,
        "image"=> $request->cart_image,
       ];

       $cart = session()->get('cart' , []);
       $cart[] = $cartitem;
       session(['cart' => $cart]); 
        return redirect()->back()->with("success", "item added");    
    }
    public function confirm_order(Request $request){
        $confirm = new Confirm_order();
        $confirm->confirm_title = $request->confirm_title;
         $confirm->user_id = Auth::id();
         $confirm->user_name = Auth::user()->name;
        $confirm->confirm_description = $request->confirm_description;
        $confirm->confirm_price = $request->confirm_price;
        $confirm->confirm_image = $request->confirm_image;
        $confirm->save();
        return redirect()->back()->with("success","your order is confirmed");
    }
    // public function addtocard(){
       
    // return view("cart", compact('cart'));


    // }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login')->with("success","");

    }


}
