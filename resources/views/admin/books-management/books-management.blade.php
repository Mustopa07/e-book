<x-admin-layout>

    <x-slot name="title">
        Admin | Books Management
    </x-slot>

    <div class="container">
        <div class="btn-trigger-create flex justify-end">
            <button onclick="openModal('mymodaltop')" class="px-14 py-2 text-lg text-gray-200 font-semibold bg-gray-800 rounded-lg shadow-lg shadow-gray-400">
                Add New User
            </button>
        </div>
        <div class="table w-full pt-8 ">
            <table class="border-collapse border border-gray-400 w-full bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <thead>
                  <tr class="h-10">
                    <th class="border border-gray-300"></th>
                    <th class="border border-gray-300">Book Name</th>
                    <th class="border border-gray-300">Price</th>
                    <th class="border border-gray-300">Quantity</th>
                    <th class="border border-gray-300"></th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($books as $book) --}}
                        <tr class="h-12">
                            <td class="border border-gray-300 pl-3 flex justify-center py-2">
                                <img src="{{ asset('img/c_buku2.png') }}" alt="" style="width: 100px">
                            </td>
                            <td class="border border-gray-300 pl-3">
                                IPA
                            </td>
                            <td class="border border-gray-300 pl-3">
                                20000
                            </td>
                            <td class="border border-gray-300 pl-3">
                                5 pcs
                            </td>
                            <td class="border border-gray-300 w-1/5">
                                <div class="btn-action flex justify-center w-full space-x-2">
                                    <button class="edit bg-blue-500 text-gray-50 px-5 py-1 rounded-lg" onclick="openModalEdit(this)"
                                    data-id=""
                                    data-full_name=""
                                    data-email="">Edit</button>
                                    <a href="">
                                        <button class="delete bg-red-500 text-gray-50 px-5 py-1 rounded-lg">Delete</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {{-- @empty

                    @endforelse --}}
                </tbody>
              </table>
        </div>
    </div>


</x-admin-layout>


<x-admin.modal>
    <x-slot name="title">
        Book
    </x-slot>

    <form action="{{ route('admin.user.store') }}" method="post" class="grid grid-cols-2 gap-x-4 w-full py-5" id="form">
        @csrf
        <input type="hidden" name="id" id="id">
        <div class="input-group grid grid-cols-1 w-full -pt-3">
            <label for="book_name" class="text-lg text-gray-500">Book Name</label>
            <input type="text" name="book_name" id="book_name" class="border border-gray-300 pl-3 py-2 w-full rounded-md outline-blue-200" placeholder="Enter Book Name">
        </div>
        <div class="input-group grid grid-cols-1 w-full pt-3">
            <label for="quantity_book" class="text-lg text-gray-500">Quantity Book</label>
            <input type="number" name="quantity_book" id="quantity_book" class="border border-gray-300 pl-3 py-2 pr-3 w-full rounded-md outline-blue-200" placeholder="Enter Quantity Of The Book">
        </div>
        <div class="input-group grid grid-cols-1 w-full pt-3">
            <label for="book_price" class="text-lg text-gray-500">Book price</label>
            <input type="number" name="book_price" id="book_price" class="border border-gray-300 pl-3 py-2 pr-3 w-full rounded-md outline-blue-200" placeholder="Example : 80000">
        </div>
        <div class="input-group grid grid-cols-1 w-full pt-3">
            <label for="book_cover" class="text-lg text-gray-500">Cover Book</label>
            <input type="file" name="book_cover" id="book_cover" class="border border-gray-300 pl-3 py-2 w-full rounded-md outline-blue-200" placeholder="Enter ">
        </div>
        <div class="input-group grid grid-cols-1 w-full pt-3">
            <label for="book_about" class="text-lg text-gray-500">About Book</label>
            <textarea type="text" name="book_about" id="book_about" class="border border-gray-300 pl-3 py-2 w-full rounded-md outline-blue-200" style="min-height: 100px; max-height: 200px" placeholder="Enter Synopsis"></textarea>
        </div><br>
        <div></div>
        <div class="btn-submit pt-10 w-full flex justify-end">
            <button class="px-10 py-2 bg-blue-500 text-gray-100 font-semibold text-lg rounded-lg">Add Book</button>
        </div>
    </form>
</x-admin.modal>
