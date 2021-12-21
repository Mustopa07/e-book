<x-app-layout>
    <x-slot name="title">
        Beranda
    </x-slot>


    {{-- home page --}}
    <section id="Home" class="w-full h-screen bg-gray-200 px-10">
        <div class="grid grid-cols-5 items-center h-full">
            <div class="title col-span-3 text-5xl font-bold tracking-widest">
                <span class="text-gray-600">WELCOME</span><br> TO MY STARBOOK<br>
                <span class="text-xl font-semibold tracking-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                <div class="button pt-10">
                    <a href="#">
                        <button class="bg-gray-800 text-gray-200 text-2xl font-bold px-10 py-2 tracking-widest shadow-md shadow-gray-800 rounded-lg">
                            START
                        </button>
                    </a>
                </div>
            </div>
            <div class="ilustration col-span-2">
                <img src="{{ asset('img/book.png') }}" alt="" srcset="" class="w-full h-auto">
            </div>
        </div>
    </section>
    {{-- end home page --}}

    {{-- about page --}}
    <section id="about" class="w-full h-auto bg-gray-800 px-10 py-16">
        <div class="title text-gray-200 text-3xl font-bold text-center">
            ABOUT STARBOOK
        </div>
        <div class="about text-2xl font-semibold text-gray-200 text-center pt-10">
            STARBOOK is website for buy or read a book
        </div>
    </section>
    {{-- end about page --}}

    {{-- book page --}}
    <section id="book" class="w-full h-screen bg-gray-200 px-10 py-10">
        <div class="title text-gray-900 text-3xl font-bold text-center pb-10">
            LIST BOOK
        </div>
        <div class="books flex space-x-5">
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto">
            </div>
        </div>
        <div class="button pt-16 w-full flex justify-center">
            <a href="{{ route('list-book') }}">
                <button class="bg-gray-800 text-gray-200 text-2xl font-bold px-10 py-2 tracking-widest shadow-md shadow-gray-800 rounded-lg">
                    View More
                </button>
            </a>
        </div>
    </section>
    {{-- end book page --}}




    <x-modal />



</x-app-layout>
