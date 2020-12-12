<?php

namespace App\Http\Controllers;

use App\Models\Propersona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeprocedure (){
        $Insperosna = DB::select('select * from pe_personas');
        return view('admin/proPersona')->with('admin',$Insperosna);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propersona  $propersona
     * @return \Illuminate\Http\Response
     */
    public function show(Propersona $propersona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propersona  $propersona
     * @return \Illuminate\Http\Response
     */
    public function edit(Propersona $propersona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propersona  $propersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propersona $propersona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propersona  $propersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propersona $propersona)
    {
        //
    }
}
