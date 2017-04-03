<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Prodi;
use App\Fakultas;
use App\User;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function getIndex(Request $request)
    {
//        $prodis = Prodi::OrderBy('id_ProgramStudi', 'DESC')->paginate(5);
        $prodis = Prodi::paginate(5);
        $jumlah_prodi = Prodi::count();
        return view('prodi.index', compact('prodis', 'jumlah_prodi'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function getTambah()
    {
        $jurusan = Jurusan::All();
        $fakultas = Fakultas::All();
        return view('prodi.tambah', compact('jurusan', 'fakultas'));

    }

    public function postTambah(Request $request)
    {
        $this->validate($request, [
            'fakultas' => 'required',
            'jurusan' => 'required',
            'nama_ProgramStudi' => 'required|unique:program_studi',
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
        $prodis = Prodi::Find($id);
        return view('prodi.lihat', compact('prodis'));
    }

    public function getEdit($id)
    {
        $prodis = Prodi::Find($id);
        $jurusan = Jurusan::all();
        $fakultas = Fakultas::all();
        return view('prodi.edit', compact('prodis', 'fakultas', 'jurusan'));

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
