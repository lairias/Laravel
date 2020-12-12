<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class people extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {

     $personas = DB::select('select * from pe_personas');

   
     return view('people.table'
        ,compact('personas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('people.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ID_PERSONA = request()->input('ID_PERSONA');
        $FOT_PERSONA = request()->input('FOT_PERSONA');
        $NOM_PERSONA = request()->input('NOM_PERSONA');
        $APE_PERSONA = request()->input('APE_PERSONA');
        $SEX_PERSONA = request()->input('SEX_PERSONA');
        $FEC_NACIMIENTO = request()->input('FEC_NACIMIENTO');
        
        
        // DB::insert('INSERT INTO pe_personas (ID_PERSONA,FOT_PERSONA,NOM_PERSONA,APE_PERSONA,SEX_PERSONA,FEC_NACIMIENTO) VALUES (?,?,?,?,?,?)',['525','525','Luis','Irias','F','2020-12-19']);
        DB::insert('INSERT INTO pe_personas (ID_PERSONA,FOT_PERSONA,NOM_PERSONA,APE_PERSONA,SEX_PERSONA,FEC_NACIMIENTO) VALUES (?,?,?,?,?,?)',[$ID_PERSONA,$FOT_PERSONA,$NOM_PERSONA,$APE_PERSONA,$SEX_PERSONA,$FEC_NACIMIENTO]);
        
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {


    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
$ID_PERSONA = request()->input('ID_PERSONA');
$FOT_PERSONA = request()->input('FOT_PERSONA');
$NOM_PERSONA = request()->input('NOM_PERSONA');
$APE_PERSONA = request()->input('APE_PERSONA');
 $SEX_PERSONA = request()->input('SEX_PERSONA');
 $FEC_NACIMIENTO = request()->input('FEC_NACIMIENTO');


$data = DB::update('update pe_personas set ID_PERSONA ="'.$ID_PERSONA.'",FOT_PERSONA="'.$FOT_PERSONA.'", NOM_PERSONA="'.$NOM_PERSONA.'", APE_PERSONA="'.$APE_PERSONA.'",SEX_PERSONA="'.$SEX_PERSONA.'", FEC_NACIMIENTO="'.$FEC_NACIMIENTO.'" WHERE  COD_PERSONA = ?',[$id]);

$personas = DB::select('select * from pe_personas');

return view('people.table'
    , compact('personas'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($cr)
    {
       
    }






}
