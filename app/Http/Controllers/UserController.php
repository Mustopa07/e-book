<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __invoke(User $user)
    {
        $data = [
            "users" => $user->all(),
        ];

        return view('admin.users-management.users-management', $data);

    }

    public function store(Request $request, User $user)
    {
        $credentials = $request->validate([
            "full_name" => ['required'],
            "email" => ['required', 'unique:users,email'],
            "password" => ['required']
        ]);

        $credentials['balance'] = 0;
        $credentials['is_admin'] = 0;

        $user->create($credentials);

        return redirect()->route('admin-user-management')->with('pesan', "Berhasil Tambah Data User");
    }

    public function update(Request $request, User $user)
    {
        $credentials = $request->validate([
            "full_name" => ['required'],
            "email" => ['required'],
            "password" => ['required']
        ]);

        $user->find($request->id)->update($credentials);

        return redirect()->route('admin-user-management')->with('pesan', "Berhasil Update Data User");
    }

    public function destroy($id, User $user)
    {
        $user->find($id)->delete();

        return redirect()->route('admin-user-management')->with('pesan', "Berhasil Hapus Data User");
    }
}
