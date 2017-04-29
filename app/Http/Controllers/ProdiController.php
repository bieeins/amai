<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Prodi;
use Illuminate\Http\Request;
use Datatables;
use DB;
use App\Fakultas;

class ProdiController extends Controller
{
    public function data()
    {
        return view('data');
    }

    public function getdata()
    {
        $data = DB::table('program_studi')->select('*');
        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="datatable/edit-'.$data->id_ProgramStudi.'" class="btn btn-xs btn-primary"> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id_ProgramStudi}}')
            ->removeColumn('password')
            ->make(true);

    }


    public function getIndex(Request $request)
    {
        $prodis = Prodi::OrderBy('id_ProgramStudi', 'DESC')->paginate(5);
        return view('prodi.index', compact('prodis'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function getTambah()
    {
        $fakultas = Fakultas::All();
        $jurusan = Jurusan::All();
        return view('prodi.tambah', compact('fakultas', 'jurusan'));

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
        $fakultas = Fakultas::All();
        $jurusan = Jurusan::All();
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

    public function Hapus($id)
    {
        //find result by id and delete
        Prodi::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('prodi.index')
            ->with('success', 'Prodi Delete successfully');
    }
}
