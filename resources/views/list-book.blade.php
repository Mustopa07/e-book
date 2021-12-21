<x-app-layout>
    <x-slot name="title">
        List Book
    </x-slot>

    <section class="w-full h-auto px-10 py-24">
        <div class="title text-gray-800 font-bold text-3xl text-center pb-5">
            List Book
        </div>

        <div class="books grid grid-cols-4 gap-y-16">
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
            <div class="card w-64 h-80 bg-gray-800 rounded-md cursor-pointer hover:opacity-70 duration-300" onclick="openModal('mymodaltop')">
                <img src="{{ asset('img/c_buku2.png') }}" alt="" class="w-full h-auto ">
            </div>
        </div>
    </section>

    <x-modal></x-modal>

</x-app-layout>
