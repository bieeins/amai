<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(Request $request)
    {
//        $users = User::orderBy('id', 'DESC')->paginate(5);
        $users = User::paginate(5);
        $jumlah_user = User::count();
        return view('users.index', compact('users','jumlah_user'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function getLihat($id)
    {
        $users = User::find($id);
        return view('users.lihat', compact('users'));
    }

    public function getTambah()
    {
        return view('users.tambah');

    }

    public function getEdit($id)
    {
        $users = User::find($id);
        return view('users.edit', compact('users'));

    }

    public function putEdit(Request $request, $id)
    {
        $this->validate($request, [
            'full_Name' => 'required',
            'email' => 'required',
        ]);

        User::find($id)->update($request->all());
        return redirect()->route('user.index')
            ->with('success', 'User updated successfully');
    }

    public function postTambah(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255|min:4|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'full_name' => 'required',
            'prodi' => 'required',
            'roles' => 'required',
            'status' => 'required',
        ]);

//        User::create($request->all());
        User::create([
            'full_Name' => $request['full_name'],
            'roles' => $request['roles'],
//            'id_ProgramStudi' => $request['id_ProgramStudi'],
            'keterangan' => $request['keterangan'],
            'status' => $request['status'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect()->route('user.index')
            ->with('success', 'Item created successfully');

    }

    public function Hapus($id)
    {
        //find result by id and delete
        User::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('user.index')
            ->with('success', 'User Delete successfully');
    }
}
