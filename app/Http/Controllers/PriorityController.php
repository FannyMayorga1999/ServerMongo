<?php

namespace App\Http\Controllers;
//importamos los modelos como users.php
use App\Priority;
//libreria para recibir peticiones obligatorio
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //si recive la peticion de un clente solo si es necesario se pone Request $request como parametro
    public function get(Request $request){
        $priority = Priority::get();
        return response()->json($priority, 200);
    }

    public function post(Request $request){
        $data = $request->json()->all();
        //campo del modelo       //clave del json para extraer su valor 
        $priority = Priority::create([
            'descripcion'=> $data['descripcion']
        ]);
        return response()->json($priority, 201);
    }

    public function put(Request $request){
        $data = $request->json()->all();
        $priority = Priority::findOrFail($data['id']);
        $response = $priority->update([
            'descripcion'=> $data['descripcion'],
        ]);
        return response()->json($response, 201);
    }

    public function delete(Request $request){
        $data = $request->json()->all();
        $priority = Priority::findOrFail($data['id']);
        $response = $priority->delete();
        return response()->json($response, 201);
    }
}
