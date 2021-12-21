<x-admin-layout>

    <x-slot name="title">
        Admin | Users Management
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
                    <th class="border border-gray-300">Full Name</th>
                    <th class="border border-gray-300">Email</th>
                    <th class="border border-gray-300"></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr class="h-12">
                            <td class="border border-gray-300 pl-3">{{ $user->full_name }}</td>
                            <td class="border border-gray-300 pl-3">{{ $user->email }}</td>
                            <td class="border border-gray-300">
                                <div class="btn-action flex justify-center w-full space-x-2">
                                    <button class="edit bg-blue-500 text-gray-50 px-5 py-1 rounded-lg" onclick="openModalEdit(this)"
                                    data-id="{{ $user->id }}"
                                    data-full_name="{{ $user->full_name }}"
                                    data-email="{{ $user->email }}">Edit</button>
                                    <a href="{{ route('admin.user.destroy', ['id' => $user->id]) }}">
                                        <button class="delete bg-red-500 text-gray-50 px-5 py-1 rounded-lg">Delete</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty

                    @endforelse
                </tbody>
              </table>
        </div>
    </div>


</x-admin-layout>


<x-admin.modal>
    <x-slot name="title">
        User
    </x-slot>

    <form action="{{ route('admin.user.store') }}" method="post" class="grid grid-cols-1 w-full py-5" id="form">
        @csrf
        <input type="hidden" name="id" id="id">
        <div class="input-group grid grid-cols-1 w-full">
            <label for="full_name" class="text-lg text-gray-500">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="border border-gray-300 pl-3 py-2 w-full rounded-md outline-blue-200" placeholder="Enter Your Full Name">
        </div>
        <div class="input-group grid grid-cols-1 w-full pt-3">
            <label for="email" class="text-lg text-gray-500">Email</label>
            <input type="email" name="email" id="email" class="border border-gray-300 pl-3 py-2 w-full rounded-md outline-blue-200" placeholder="Enter Your Email">
        </div>
        <div class="input-group grid grid-cols-1 w-full pt-3">
            <label for="password" class="text-lg text-gray-500">Password</label>
            <input type="password" name="password" id="password" class="border border-gray-300 pl-3 py-2 w-full rounded-md outline-blue-200" placeholder="Enter Your Password">
        </div>
        <div class="btn-submit pt-10 w-full flex justify-end">
            <button class="px-10 py-2 bg-blue-500 text-gray-100 font-semibold text-lg rounded-lg">Add User</button>
        </div>
    </form>
</x-admin.modal>
