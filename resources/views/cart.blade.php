<x-temp>
    <h1>
        cart
    </h1>
    <div>
        @php
        $cart = session('cart' ,[]);
        @endphp
          @if(session('success'))
                <div class=" inline-block text-xs bg-blue-400 text-black p-2 text-center" role="alert"><strong>success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>

                @endif
                @if(count($cart))
                
                @foreach ($cart as $carts )
                <div class="w-full border-amber-50 border-2 p-2  flex items-center gap-4 justify-between">
                    <img class="h-24 " src={{ asset('uploads/image_uploads/' . $carts['image']) }} alt="">
                    <div>{{ $carts['title'] }}</div>
                    <div>{{ $carts['description'] }}</div>
                    <div>{{ $carts['price'] }}</div>
                    <form action="{{ route('confirm_order') }}" method="post">
                        @csrf
                        <input type="hidden" name="confirm_title" value="{{ $carts['title'] }}">
                        <input type="hidden" name="confirm_description" value="{{ $carts['description'] }}">
                        <input type="hidden" name="confirm_price" value="{{ $carts['price'] }}">
                        <input type="hidden" name="confirm_image" value="{{ $carts['image'] }}">
                        <button class="bg-white p-2 text-black capitalize">conform</button>
                    </form>
                    <button class="bg-white p-2 text-black capitalize">remove</button>
                    
                </div>
                @endforeach
                @endif
    </div>
</x-temp>