<x-temp>
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
    <div class="w-full flex md:flex-row gap-20 flex-col justify-around  items-center text-sm capitalize ">
        <div>
            <h1>
                hello
            </h1>
            <p class="text-xs font-mono">admin can add , delete and update cards form this admin page</p>
        </div>
        <div class="w-fit p-5 flex flex-col justify-center items-center  text-black bg-white">
            <div class="">
                <h1 class="capitalize text-2xl font-black">
                    admin page
                </h1>
                <form action="{{ Route('adminpost') }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-5 items-center  justify-center capitalize">
                    @csrf
                    <label for="title">Title</label>
                    <input name="title" class="bg-black w-full text-white p-1 text-sm rounded-full placeholder:text-center" type="name" placeholder="Title">
                    <label for="des">description</label>
                    <input name="description" class="bg-black w-full text-white p-1 text-sm rounded-full placeholder:text-center" placeholder="Description" type="text">
                    <label for="price">Price</label>
                    <input class="bg-black w-full text-white p-1 text-sm rounded-full placeholder:text-center" placeholder="price" type="text" name="price">

                    <input class="bg-black text-white p-1 text-sm " type="file" name="image">
                    <button class="bg-black text-white capitalize font-mono text-sm p-2 items-center flex flex-col text-center w-fit justify-center rounded-full ">submit</button>

                </form>
            </div>
        </div>
    </div>
    <div class="w-[90%] p-1.5 h-full flex flex-col justify-center items-center ">
        <h1>
            cards
        </h1>
        <div class="flex flex-wrap items-center justify-around flex-row 
         gap-10 w-full ">
            @foreach ($card as $cards)
            <div class="md:w-fit md:h-fit w-38 rounded-2xl h-65 shadow-xs shadow-white text-start p-5 capitalize flex  flex-col gap-1.5 justify-center items-center  font-serif italic">
                <img class="md:w-50 md:h-72 w-full h-full text-center drop-shadow-sm drop-shadow-amber-50 items-center" src="{{ asset('uploads/image_uploads/' . $cards->image) }}">
                <h1 class="md:text-sm text-xs w-full text-start">{{ $cards['title'] }}</h1>
                <p class="text-xs">{{ $cards['description'] }}</p>
                <p class="text-xs w-full text-end">{{ $cards['price'] }}</p>
                <div class="md:text-sm text-xs w-full flex justify-around ">
                    <a href="{{ route('edit',$cards->id) }}">
                        <button class="bg-white p-1 text-xs capitalize text-black w-fit">edit</button>
                    </a>
                    <form action="{{ route('delete' , $cards->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-white p-1 capitalize text-black">remove</button>
                    </form>
                </div>


            </div>
            @endforeach
        </div>
    </div>
    <div class="w-full">
        <h1 class="capitalize text-2xl font-black font-serif">
            contacted
        </h1>
        <div class="p-4 w-full">
            <div class="overflow-x-auto rounded-xl shadow-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 uppercase">ID</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 uppercase">Email</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($email as $contacts )         
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900">{{$contacts['id']}}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $contacts['contact'] }}</td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="w-full"> <h1 class="capitalize text-2xl font-black font-serif">
            orders
        </h1>
        <div class="p-4 w-full">
            <div class="overflow-x-auto rounded-xl shadow-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3  text-sm font-semibold text-gray-700 uppercase text-center">ID</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 uppercase">User_id</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 uppercase">User_Name</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 uppercase">order_title</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 uppercase">description</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700 uppercase">price</th>
                            
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($order as $contacts )         
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900">{{$contacts['id']}}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $contacts['user_id'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $contacts->user->name}}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $contacts['confirm_title'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $contacts['confirm_description'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $contacts['confirm_price'] }}</td>
                            
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-temp>