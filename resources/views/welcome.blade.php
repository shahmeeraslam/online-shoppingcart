<x-temp>
    <div class="flex flex-col gap-50 p-1 mx-[10%] h-full items-center">
          @if(session('success'))
                    <div class=" inline-block text-xs bg-blue-400 text-black p-2 text-center" role="alert"><strong>success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>

                    @endif
        <div class="flex md:flex-row flex-col justify-center md:justify-around md:h-125 md:p-2 gap-12  md:w-full items-center">
            <div class="p-3 flex flex-col md:text-start text-center gap-12 w-full line-clamp-2">
                <div class="w-full">
                    <p class="text-red-400 capitalize"><i class="fa-brands fa-centos"></i> marvel certified</p>
                    <h1 class="text-3xl capitalize font-black font-sans font-stretch-95%">
                        Marvel original
                        <h1 class="text-3xl capitalize font-black font-sans font-stretch-95%">
                            ironman mark-2 model

                        </h1>
                    </h1>
                </div>
                <div class="flex md:w-full w-full justify-between items-center">
                    <div class="w-full">
                        <a href="#product">
                            <button class="p-1.5 font-serif text-sm   capitalize w-full rounded bg bg-white text-black flex flex-row items-center gap-1 text-center justify-center ">
                                <i class="fa-sharp fa-solid fa-cart-shopping"></i> Shop now
                            </button>
                            </a>
                    </div>
                    <div class="flex relative md:w-[60%] w-full justify-center items-center">
                        <div class="bg-cyan-700 absolute  left-5 rounded-full">
                            <img class="w-10" src="{{ asset('custom_img/businessman-isolated-illustration-ai-generative-free-png-removebg-preview.png') }}" alt="">
                        </div>
                        <div class="bg-gray-600 absolute left-10    rounded-full">
                            <img class="w-10" src="{{ asset('custom_img/confident-young-businessman-writing-on-a-clipboard-png.webp') }}" alt="">
                        </div>
                        <div class="bg-emerald-600 absolute left-15 rounded-full">
                            <img class="w-10" src="{{ asset('custom_img/businessman-isolated-illustration-ai-generative-free-png (1).webp') }}" alt="">
                        </div>
                        <div class="bg-gray-600 absolute left-20 rounded-full">
                            <img class="w-10" src="{{ asset('custom_img/businessman-isolated-illustration-ai-generative-free-png-removebg-preview.png') }}" alt="">
                        </div>

                    </div>
                    <div class="w-fit  justify-start  text-start flex flex-col gap-1.5">
                        <div class="flex w-fit text-center justify-center">
                            <span class="fa fa-star text-orange-300 text-xs"></span>
                            <span class="fa fa-star text-orange-300 text-xs "></span>
                            <span class="fa fa-star text-orange-300 text-xs"></span>
                            <span class="fa fa-star text-orange-300 text-xs"></span>
                            <span class="fa fa-star text-xs"></span>
                        </div>
                        <div class="w-full text-xs">
                            <p class="capitalize text-red-400 ">100+ sold</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-full w-full flex justify-center items-center ">
                <img class="md:w-full md:h-full w-xs drop-shadow-2xl drop-shadow-blue-500" src="{{ asset('custom_img/cfcdbb08-b976-4781-82ad-0b64fd7fbc17-removebg-preview.png') }}" alt="">
            </div>
        </div>
        <div class="w-full flex flex-col   text-start gap-2 p-2">
            <p class="text-xs font-serif text-purple-400 capitalize">
                <i class="fa-solid fa-truck"></i> company certified products
            </p>
            <h1 class="capitalize md:text-3xl font-black font-sans italic  text-2xl ">
                our cetagory
            </h1>
            <div class="flex text-xs w-fit md:w-full  items-center justify-around gap-1.5  md:p-2">
                <div class="  flex flex-col  w-fit text-white text-center items-center">
                    <img class="md:w-15 w-12" src="{{ asset('custom_img/cfcdbb08-b976-4781-82ad-0b64fd7fbc17-removebg-preview.png') }}" alt="">
                    <p class="text-xs capitalize">3D models</p>
                </div>
                <div class="  flex flex-col gap-2.5 w-fit text-white text-center items-center">
                    <img class="md:w-20 w-12" src="{{ asset('custom_img/2396787701500970-600x600.jpg') }}" alt="">
                    <p class="text-xs capitalize">gift-cards</p>
                </div>
                <div class="  flex flex-col  w-fit text-white text-center items-center">
                    <img class="w-20" src="{{ asset('custom_img/Mens-Billfold-leather-wallet-10-removebg-preview.png') }}" alt="">
                    <p class="text-xs capitalize">wallets</p>
                </div>
                <div class="  flex flex-col gap-2 w-fit text-white text-center items-center">
                    <img class="w-10" src="{{ asset('custom_img/9476639-YLFXRQBV-7.jpg') }}" alt="">
                    <p class="text-xs capitalize">artworks</p>
                </div>
                <div class="  flex flex-col gap-2  w-fit text-white text-center items-center">
                    <img class="w-15" src="{{ asset('custom_img/4_ccexpress.webp') }}" alt="">
                    <p class="text-xs capitalize">Eid cards</p>
                </div>
                <div class="  flex flex-col p-1 w-fit text-white text-center items-center">
                    <img class="w-10" src="{{ asset('custom_img/Wrist-Watch-Line-Art.png') }}" alt="">
                    <p class="text-xs capitalize">watches</p>
                </div>
            </div>
        </div>
        <div id="deals" class="flex md:flex-row flex-col  w-full md:text-start text-center md:h-125  items-center ">
            <div class="flex flex-col w-full md:text-start gap-2.5 justify-start ">
                <div class="w-full flex flex-col gap-2">
                    <p class="text-blue-300 capitalize text-xs flex  gap-1">
                        <i class="fa-solid fa-jet-fighter"></i> checked and approved
                    </p>
                    <h1 class="text-4xl capitalize font-black w-100 items-center ">
                        enhence your joy with our special offer
                    </h1>
                </div>
                <div class="flex space-x-4 items-start text-start w-full">
                    <div class=" rounded-full shadow p-4 w-20 h-20 flex flex-col justify-center items-center">
                        <div id="days" class="text-xl font-bold">00</div>
                        <div class="text-xs text-gray-500">Day</div>
                    </div>
                    <div class=" rounded-full shadow p-4 w-20 h-20 flex flex-col justify-center items-center">
                        <div id="hours" class="text-xl font-bold">00</div>
                        <div class="text-xs text-gray-500">Hrs</div>
                    </div>
                    <div class=" rounded-full shadow p-4 w-20 h-20 flex flex-col justify-center items-center">
                        <div id="minutes" class="text-xl font-bold">00</div>
                        <div class="text-gray-500">Mins</div>
                    </div>
                    <div class=" rounded-full shadow p-4 w-20 h-20 flex flex-col justify-center items-center">
                        <div id="seconds" class="text-xl font-bold">00</div>
                        <div class="text-xs text-gray-500">Secs</div>
                    </div>
                </div>
                <div class="w-fit text-start">
                    <a href="#product">

                        <button class="text-sm capitalize p-2  flex   bg-blue-700">
                            check our products
                        </button>
                    </a>
                </div>
            </div>
            <div class="w-full">
                <img class="w-full drop-shadow-2xl drop-shadow-blue-300" src="{{ asset('custom_img/s-l400-removebg-preview.png') }}" alt="">
            </div>
        </div>
        <div class="w-[100%] justify-center items-center h-full flex flex-col">
            <div id="product" class="w-full text-start capitalize flex gap-1  flex-col">
                <p class="text-xs capitalize flex items-center w-full gap-1 text-purple-400 "><i class="fa-brands fa-product-hunt"></i>certified & checked</p>
                <h1 class="text-2xl capitalize font-black font-sans">
                    our products
                </h1>
            </div>
            <div class="flex flex-wrap items-center md:justify-around justify-evenly gap-2 w-full h-full ">
                @foreach ($card as $homecards)
                <div class="w-38 rounded-2xl h-70 md:w-fit md:h-120 overflow-hidden  shadow-xs shadow-white text-start p-5 gap-1.5 capitalize flex  flex-col justify-center items-center  font-serif italic">
                    <img class="md:w-55  w-fit md:h-fit text-center drop-shadow-sm drop-shadow-amber-50 items-center" src="{{ asset('uploads/image_uploads/' . $homecards->image) }}">
                    <h1 class="text-sm w-full text-start">{{ $homecards['title'] }}</h1>
                    <p class="text-xs capitalize w-full">{{ $homecards['description'] }}</p>
                    <p class="text-sm w-full text-end">{{ $homecards['price'] }}</p>

                    <form action="{{ route('cartpost') }}" method="post">
                        @csrf
                        <input type="hidden" name="cart_title" value="{{ $homecards['title'] }}">
                        <input type="hidden" name="cart_description" value="{{ $homecards['description'] }}">
                        <input type="hidden" name="cart_price" value="{{ $homecards['price'] }}">
                        <input type="hidden" name="cart_image" value="{{ $homecards['image'] }}">
                        <button class="capitalize text-xs  bg-white text-black p-2 items-center">add to card</button>
                    </form>
                  
                </div>
                @endforeach
            </div>
        </div>
        <div id="contact" class="capitalize w-full flex items-center flex-col gap-4 ">
            <div class="w-full flex flex-col gap-1">
                <p class="flex  items-center gap-1 text-blue-200 text-xs ">
                    <i class="fa-regular fa-id-card"></i>24 hours
                </p>
                <h1 class="text-2xl font-black font-serif text-start ">
                    contact us
                </h1>
            </div>
            <div class="w-full">
                <form action="{{ route('contactpost') }}" method="post" class="w-full flex gap-2 items-center">
                    @csrf
                    <label for="contact">email</label>
                    <input class="w-full text-black p-0.5 bg-white" type="email" name="contact">
                     <button class="bg-white text-black capitalize font-mono text-sm p-2 items-center flex flex-col text-center w-fit justify-center rounded-full ">submit</button>
                </form>
            </div>
        </div>
    </div>
</x-temp>