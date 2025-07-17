<x-temp>
    <div class="flex flex-col text-sm gap-20 md:flex-row w-full items-center justify-evenly">
        <div class="flex flex-col text-start capitalize">
            <h1>welcome to our website</h1>
            <p class="text-xs italic">register now to discover unlimited products</p>
        </div>
        @if(session('success'))
                <div class=" inline-block text-xs bg-blue-400 text-black p-2 text-center" role="alert"><strong>success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>

                @endif
                @if(session('error'))
                <div class=" inline-block text-xs bg-blue-400 text-black    p-2 text-center" role="alert"><strong>error</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>

                @endif
        <div class="bg-white flex flex-col text-start  text-black justify-center h-fit p-5 w-fit items-center">
            <form action="{{ Route('registerPost') }}" method="post" class="flex flex-col gap-5 h-fit p-4 capitalize ">
                @csrf
                <label class="text-black" for="name">
                    <h1>name</h1>
                </label>
                <input class="bg-black text-white placeholder:capitalize p-1 placeholder:text-sm " placeholder="username" type="text" name="name">

                <label class="text-black" for="email">
                    <h1>Email</h1>
                </label>
                <input class="bg-black text-white placeholder:capitalize p-1 placeholder:text-sm " placeholder="email" type="text" name="email">
                <label for="password">
                    <h1>password</h1>
                </label>
                <input class="bg-black text-white p-1 placeholder:text-sm " type="password" name="password" placeholder="Password">
                <button class="bg-black w-fit text-white p-1.5 capitalize text-sm rounded shadow-xl hover:scale-80   shadow-black ">submit</button>
                
            </form>
        </div>
    </div>
</x-temp>