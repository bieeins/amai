<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
use App\Http\Requests;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fakultas = Fakultas::paginate(10);
        return view('fakultas.index', compact('fakultas'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fakultas.tambah');
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
            'nama_Fakultas' => 'required|unique:fakultas',
        ]);

        Fakultas::create([
            'nama_Fakultas' => $request['nama_Fakultas'],
        ]);
        return redirect()->route('fakultas.index')
            ->with('success', 'Fakultas created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fakultas = Fakultas::Find($id);
        return view('fakultas.lihat', compact('fakultas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fakultas = Fakultas::Find($id);
        return view('fakultas.edit', compact('fakultas'));
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
            'nama_Fakultas' => 'required',
        ]);

        Fakultas::Find($id)->update($request->all());
        return redirect()->route('fakultas.index')
            ->with('success', 'Fakultas updated successfully');
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
        Fakultas::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('fakultas.index')
            ->with('success', 'Fakultas Delete successfully');
    }
}
