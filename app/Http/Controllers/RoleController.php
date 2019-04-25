<?php

namespace App\Http\Controllers;
//importamos los modelos como users.php
use App\Role;
//libreria para recibir peticiones obligatorio
use Illuminate\Http\Request;

class RoleController extends Controller
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
        $role = Role::get();
        return response()->json($role, 200);
    }

    public function post(Request $request){
        $data = $request->json()->all();
        //campo del modelo       //clave del json para extraer su valor 
        $role = Role::create([
            'descripcion'=> $data['descripcion'],
        ]);
        return response()->json($role, 201);
    }

    /*
    public function put(Request $request){
        $data = $request->json()->all();
        $role = Role::findOrFail($data['id']);
        $response = $role->update([
            'descripcion'=> $data['descripcion'],
        ]);
        return response()->json($response, 201);
    }

    public function delete(Request $request){
        $data = $request->json()->all();
        $role = Role::findOrFail($data['id']);
        $response = $role->delete();
        return response()->json($response, 201);
    }*/
}
