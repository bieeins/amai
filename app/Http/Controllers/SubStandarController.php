<?php

namespace App\Http\Controllers;

use App\Standar;
use App\SubStandar;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubStandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $substandar = SubStandar::OrderBy('id_SubStandar', 'DESC')->paginate(5);
        return view('substandar.index', compact('substandar'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $standar = Standar::All();
        return view('substandar.tambah',compact ('standar'));
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
            'substandar' => 'required',
            'id_Standar' => 'required',

        ]);

        SubStandar::create([
            'subStandar' => $request['substandar'],
            'id_Standar' => $request['id_Standar'],
        ]);
        return redirect()->route('substandar.index')
            ->with('success', 'Sub Standar created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $substandar = SubStandar::Find($id);
        return view('substandar.lihat', compact('substandar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $substandar = SubStandar::Find($id);
        $standar = Standar::All();
        return view('substandar.edit', compact('substandar', 'standar'));

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
            'id_Standar' => 'required',
            'subStandar' => 'required',
        ]);

        SubStandar::Find($id)->update($request->all());
        return redirect()->route('substandar.index')
            ->with('success', 'SubStandar updated successfully');
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
        SubStandar::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('substandar.index')
            ->with('success', 'SubStandar Delete successfully');
    }
}
