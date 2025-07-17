<x-temp>
    <div class="flex flex-col text-sm gap-20 md:flex-row w-full items-center justify-evenly">
        <div class="flex flex-col text-start capitalize">
            <h1>welcome to our website</h1>
            <p class="text-xs italic">login to your account to discover unlimited products</p>
        </div>
        
        <div class="bg-white flex flex-col text-start  text-black justify-center h-fit p-5 w-fit items-center">
            <form action="{{ route('loginpost') }}" method="post" class="flex flex-col gap-5 h-fit p-4 capitalize ">
                @csrf
                <label class="text-black" for="email">
                    <h1>Email</h1>
                </label>
                <input class="bg-black text-white placeholder:capitalize p-1 placeholder:text-sm " placeholder="email" type="text" name="email">
                <label for="password">
                    <h1>password</h1>
                </label>
                <input class="bg-black text-white p-1 placeholder:text-sm " type="password" name="password" placeholder="Password">
                <button class="bg-black w-fit text-white p-1 text-sm">submit</button>
            </form>
            <a href="{{ route('register') }}">create account</a>
        </div>
    </div>
</x-temp>