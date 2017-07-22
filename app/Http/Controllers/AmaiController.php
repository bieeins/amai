<?php

namespace App\Http\Controllers;

use App\SubStandar;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Fakultas;
use App\Pertanyaan;
use App\Standar;

class AmaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input(Request $request)
    {
        $sC = Standar::all()->count();

        $query1 = DB::table('pertanyaan')
            ->join('substandar', 'pertanyaan.id_SubStandar', '=', 'substandar.id_SubStandar')
            ->join('standar', 'substandar.id_Standar', '=', 'standar.id_Standar')
            ->where('pertanyaan.status', '=', 'aktif')
            ->where('substandar.id_SubStandar', '=', '1')
            ->where('standar.id_Standar', '=', '1');

        $perstd1 = $query1->get();

        $judul = $query1->addSelect('standar')->get();
        foreach ($judul as $jdl ) {
            $jd = $jdl->standar;
        }


        $perstd2 = DB::table('pertanyaan')
            ->join('substandar', 'pertanyaan.id_SubStandar', '=', 'substandar.id_SubStandar')
            ->join('standar', 'substandar.id_Standar', '=', 'standar.id_Standar')
            ->where('pertanyaan.status', '=', 'aktif')
            ->where('substandar.id_SubStandar', '=', '2')
            ->where('standar.id_Standar', '=', '1')->get();

        return view('amai.indexx', compact('count','jd', 'pertanyaan', 'fakultas', 'standar', 'substandar', 'sC', 'loop', 'perstd1', 'perstd2','tes'))->with('iii', 0)->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
