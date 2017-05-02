<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use App\SubStandar;
use Illuminate\Http\Request;

use App\Http\Requests;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pertanyaan = Pertanyaan::OrderBy('id_Pertanyaan', 'DESC')->paginate(5);
        return view('pertanyaan.index', compact('pertanyaan'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $substandar = SubStandar::All();
        return view('pertanyaan.tambah',compact('substandar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_SubStandar' => 'required',
            'pertanyaan' => 'required',
            'standar_Nilai' => 'required',
            'status' => 'required',
        ]);

        Pertanyaan::create([
            'id_SubStandar' => $request['id_SubStandar'],
            'pertanyaan' => $request['pertanyaan'],
            'standar_Nilai' => $request['standar_Nilai'],
            'status' => $request['status'],
        ]);
        return redirect()->route('pertanyaan.index')
            ->with('success', 'Pertanyaan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::Find($id);
        return view('pertanyaan.lihat',compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::Find($id);
        $substandar = SubStandar::All();
        return view('pertanyaan.edit', compact('pertanyaan', 'substandar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_SubStandar' => 'required',
            'pertanyaan' => 'required',
            'standar_Nilai' => 'required',
            'status' => 'required',
        ]);

        Pertanyaan::Find($id)->update($request->all());
        return redirect()->route('pertanyaan.index')
            ->with('success', 'Pertanyaan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find result by id and delete
        Pertanyaan::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('pertanyaan.index')
            ->with('success', 'Pertanyaan Delete successfully');
    }
}
