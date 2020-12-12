<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class clienteJson extends Controller
{
    public function getAllPost()
    {
        $response = Http::get("http://18.212.204.249:5000/persona");

        return $response->json();
    }

public function getId($id){
    $response = Http::get("http://18.212.204.249:5000/persona".$id);

return $response->json();

}
public function Addpeople($id){
    $response = Http::post("http://18.212.204.249:5000/persona",[
        
    ]);

return $response->json();

}

}

