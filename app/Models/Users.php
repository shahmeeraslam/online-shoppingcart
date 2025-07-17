<?php

namespace App\Models;
use app\Http\Controllers\AuthManager;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
 public function confirmOrder(){
        return $this->belongsTo(Confirm_order::class);
    }   protected $table = 'users';
   protected $primarykey = 'user_id';
    protected $fillable = ['name','email','password'];
}
