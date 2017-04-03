<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Fakultas;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jurusan = Jurusan::paginate(5);
        return view('jurusan.index', compact('jurusan'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::All();
        return view('jurusan.tambah', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fakultas' => 'required',
            'nama_Jurusan' => 'required|unique:jurusan',
        ]);

        Jurusan::create([
            'id_Fakultas' => $request['fakultas'],
            'nama_Jurusan' => $request['nama_Jurusan'],
        ]);
        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusan = Jurusan::Find($id);
        return view('jurusan.lihat', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::Find($id);
        $fakultas = Fakultas::all();
        return view('jurusan.edit', compact('fakultas', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_Fakultas' => 'required',
            'nama_Jurusan' => 'required',
        ]);

        Jurusan::Find($id)->update($request->all());
        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find result by id and delete
        Jurusan::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan Delete successfully');
    }
}
