<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteJson;
use App\Http\Controllers\people;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/people',"people@index");

Route::get('/people/crear',"people@create");

Route::DELETE('/people/del/{id}', function ($id) {

    DB::delete('DELETE FROM  pe_personas where COD_PERSONA =?',[$id] );

    $personas = DB::select('select * from pe_personas');




return view('people.table'
    , compact('personas'));



});


// Route::get('/people/edit/{id}', function ($id) {
    
//     $persona = DB::select('select * from pe_personas where COD_PERSONA =?',[$id]);
  
//     // return $persona;
//      return view('people.edit',compact('persona'));
// });


Route::get('/people/edit/{id}', function($id){

    $persona = DB::select('select * from pe_personas where COD_PERSONA =?', [$id]);

// return $persona;
return view('people.edit', compact('persona'));

});


/////////////////////////
Route::get("/personas","clienteJson@getAllPost");
Route::get("/personas/{id}","clienteJson@getId");


Route::resource('/people', 'people');
