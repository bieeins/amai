<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Periode;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $periode = Periode::OrderBy('id_Periode', 'DESC')->paginate(5);
        return view('periode.index', compact('periode'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periode.tambah');
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
            'nama_periode' => 'required',
            'awal_periode' => 'required',
            'akhir_periode' => 'required',
        ]);

        Periode::create([
            'nama_Periode' => $request['nama_periode'],
            'awal_Periode' => $request['awal_periode'],
            'akhir_Periode' => $request['akhir_periode'],
        ]);
        return redirect()->route('periode.index')
            ->with('success', 'Periode created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $periode = Periode::Find($id);
        return view('periode.lihat', compact('periode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periode = Periode::Find($id);
        return view('periode.edit', compact('periode'));
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
            'nama_periode' => 'required',
            'awal_periode' => 'required',
            'akhir_periode' => 'required',
        ]);

        Periode::find($id)->update([
//            'nama_Periode' => $request['nama_periode'],
            'awal_Periode' => $request['awal_periode'],
            'akhir_Periode' => $request['akhir_periode'],
            'status_Periode' => $request['status'],
        ]);

//        Periode::Find($id)->update($request->all());
        return redirect()->route('periode.index')
            ->with('success', 'Periode updated successfully');
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
        Periode::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('periode.index')
            ->with('success', 'Periode Delete successfully');
    }
}
