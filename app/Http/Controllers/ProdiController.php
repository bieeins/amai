<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;
use App\User;

class ProdiController extends Controller
{
    public function getIndex(Request $request)
    {
        $prodis = Prodi::OrderBy('id_ProgramStudi', 'DESC')->paginate(5);
        return view('prodi.index', compact('prodis'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function getTambah()
    {
        $users = User::All();
        return view('prodi.tambah', compact('users'));

    }
    public function postTambah(Request $request)
    {
        $this->validate($request, [
            'fakultas' => 'required',
            'jurusan' => 'required',
            'nama_ProgramStudi' => 'required|unique:program_studis',
        ]);

        Prodi::create([
            'id_Fakultas' => $request['fakultas'],
            'id_Jurusan' => $request['jurusan'],
            'nama_ProgramStudi' => $request['nama_ProgramStudi'],
        ]);
        return redirect()->route('prodi.index')
            ->with('success', 'Prodi created successfully');

    }

    public function getLihat($id)
    {
        $prodi = Prodi::Find($id);
        return view('prodi.lihat', compact('prodi'));
    }

    public function getEdit($id)
    {
        $prodis = Prodi::Find($id);
        $users = User::all();
        return view('prodi.edit', compact('prodis','users'));

    }

    public function putEdit(Request $request, $id)
    {
        $this->validate($request, [
            'id_Fakultas' => 'required',
            'id_Jurusan' => 'required',
            'nama_ProgramStudi' => 'required',
        ]);

        Prodi::Find($id)->update($request->all());
        return redirect()->route('prodi.index')
            ->with('success', 'Prodi updated successfully');
    }
}
