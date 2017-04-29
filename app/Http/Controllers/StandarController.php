<?php

namespace App\Http\Controllers;

use App\Standar;
use Illuminate\Http\Request;


class StandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $standar = Standar::OrderBy('id_Standar', 'DESC')->paginate(5);
        return view('standar.index', compact('standar'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('standar.tambah');
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
            'standar' => 'required',
            'bobot' => 'required',

        ]);

        Standar::create([
            'standar' => $request['standar'],
            'bobot' => $request['bobot'],
        ]);
        return redirect()->route('standar.index')
            ->with('success', 'Standar created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $standar = Standar::Find($id);
        return view('standar.lihat', compact('standar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $standar = Standar::Find($id);
        return view('standar.edit', compact('standar'));
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
            'standar' => 'required',
            'bobot' => 'required'
        ]);

        Standar::find($id)->update([
            'standar' => $request['standar'],
            'bobot' => $request['bobot'],
        ]);

//        Periode::Find($id)->update($request->all());
        return redirect()->route('standar.index')
            ->with('success', 'Standar updated successfully');
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
        Standar::find($id)->delete();

        //Redirecting to index() method
        return redirect()->route('standar.index')
            ->with('success', 'Standar Delete successfully');
    }
}
