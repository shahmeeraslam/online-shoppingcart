<!DOCTYPE html>
<html class="scroll-smooth max-h-100 overflow-y-auto
  [&::-webkit-scrollbar]:w-2
  [&::-webkit-scrollbar-track]:bg-gray-100
  [&::-webkit-scrollbar-thumb]:bg-gray-300
  dark:[&::-webkit-scrollbar-track]:bg-neutral-700
  dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500
   stroke-zinc-950 " lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>online_shopping_cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite(['resources/css/app.css'])
</head>

<body class="bg-black text-white  scroll-smooth  text-center flex  gap-10 items-center h-full justify-between  flex-col ">

  <div class="w-full">
    <nav class="bg-white shadow-md w-full p-4">
      <div class="max-w-7xl mx-auto flex items-center justify-between">

        <div class="md:text-2xl font-bold text-gray-800">
          <a href="{{route('viewHomecards')}}">Arts-Shop</a>
        </div>


        <ul class="hidden md:flex space-x-6 text-gray-700 font-medium">
          <li><a href="{{route('viewHomecards')}}" class="hover:text-blue-500">Home</a></li>
          <li><a href="{{ route('viewHomecards') }}#product" class="hover:text-blue-500">Shop</a></li>
          <li><a href="{{route('viewHomecards')}}#deals" class="hover:text-blue-500">Deals</a></li>
          <li><a href="{{ route('viewHomecards') }}#contact" class="hover:text-blue-500">Contact</a></li>
        </ul>


        <div class="flex items-center  space-x-4">
          @if(auth()->check() && auth()->user()->role ==='user') 
             <select class="text-black p-1 " id="dropdown" onchange="redirectToPage()">
            <option value="user">
              <p class="text-black">
                {{Auth::user()->name}}
              </p>
              
            </option>
            <option value="{{ route('logout') }}">
              Logout
            </option>
          </option>
          
        </select>
        <a href="{{ Route('cart') }}" class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6H19m-9 0a1 1 0 11-2 0m10 0a1 1 0 112 0" />
            </svg>
            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1.5">3</span>
          </a>
          @elseif(auth()->check() && auth()->user()->role ==='admin') 
             <select class="text-black p-1 capitalize " id="dropdown" onchange="redirectToPage()">
            <option value="user">
              <p class="text-black">
                {{Auth::user()->name}}
              </p>
              
            </option>
            <option value="{{ route('logout') }}">
              <h1 class="capitalize ">
                logout
              </h1>
            </option>
          </option>
          
          
        </select>
        <a href="{{ Route('adminpage') }}" class="relative">
           <button class="bg-black p-1.5 capitalize ">adminpage</button>
          </a>
        @else
        <p><a class="bg-black text-white p-2" href="{{ route('login') }}">login</a></p>
          @endif

          <!-- Hamburger Button -->
          <div>
            <button id="menu-btn" class="md:hidden focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
              </svg>
            </button>
          </div>

        </div>
      </div>


      <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
        <a href="#" class="block text-gray-700 hover:text-blue-500">Home</a>
        <a href="#" class="block text-gray-700 hover:text-blue-500">Shop</a>
        <a href="#" class="block text-gray-700 hover:text-blue-500">Deals</a>
        <a href="#" class="block text-gray-700 hover:text-blue-500">Contact</a>
      </div>
    </nav>
  </div>
  {{ $slot }}
  <script>
    // Toggle mobile menu
    document.getElementById('menu-btn').addEventListener('click', () => {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });

    // Set the target date/time
    const targetDate = new Date().getTime() + (15 * 24 * 60 * 60 + 10 * 60 * 60 + 56 * 60 + 54) * 1000; // example

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = targetDate - now;

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").textContent = String(days).padStart(2, '0');
      document.getElementById("hours").textContent = String(hours).padStart(2, '0');
      document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
      document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);

    function redirectToPage() {
      const dropdown = document.getElementById("dropdown");
      const selectedValue = dropdown.value;

      if (selectedValue) {
        window.location.href = selectedValue;
      }
    }
  </script>

</body>

</html>