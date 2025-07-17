<x-temp>
    <div class="">
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
        <div class="w-full bg-white p-2 text-black flex flex-col justify-around items-center text-sm capitalize">
            <div>
                <h1 class="capitalize text-2xl font-black">
                    admin Card edit page
                </h1>
                </div>
                <div>

                    <form  action="{{ Route('update',$card->id) }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-5 items-center  justify-center capitalize">
                        @csrf
                        @method('PUT')
                        <label for="title">Title</label>
                        <input name="title" class="bg-black w-full text-white p-1 text-sm rounded-full placeholder:text-center" type="name" value="{{ $card->title }}" placeholder="Title">
                        <label for="des">description</label>
                        <input name="description" class="bg-black w-full text-white p-1 text-sm rounded-full placeholder:text-center" value="{{ $card->description }}"
                            placeholder="Description" type="text">
                        <label for="price">Price</label>
                        <input class="bg-black w-full text-white p-1 text-sm rounded-full placeholder:text-center" value="{{ $card->price }}" placeholder="price" type="text" name="price">
        
                        <input class="bg-black text-white p-1 text-sm " type="file" value="{{ $card->image }}" name="image">
                        <button class="bg-black text-white capitalize font-mono text-sm p-2 items-center flex flex-col text-center w-fit justify-center rounded-full ">submit</button>
                        <a href="{{ route('adminpage') }}" class="bg-black text-white text-xs p-1.5">adminpage</a>
        
                    </form>
                </div>

        </div>
    </div>
</x-temp>