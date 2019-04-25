<?php

namespace App\Http\Controllers;
//importamos los modelos como users.php
use App\SizeProject;
//libreria para recibir peticiones obligatorio
use Illuminate\Http\Request;

class SizeProjectController extends Controller
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
        $sizeProjects = SizeProject::get();
        return response()->json($sizeProjects, 200);
    }

    public function post(Request $request){
        $data = $request->json()->all();
        //campo del modelo       //clave del json para extraer su valor 
        $sizeProject = SizeProject::create([
            'descripcion'=> $data['descripcion'],
        ]);
        return response()->json($sizeProject, 201);
    }

    /*
    public function put(Request $request){
        $data = $request->json()->all();
        $sizeProject = SizeProject::findOrFail($data['id']);
        $response = $sizeProject->update([
            'descripcion'=> $data['descripcion'],
        ]);
        return response()->json($response, 201);
    }

    public function delete(Request $request){
        $data = $request->json()->all();
        $sizeProject = SizeProject::findOrFail($data['id']);
        $response = $sizeProject->delete();
        return response()->json($response, 201);
    }*/
}
