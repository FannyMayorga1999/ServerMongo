<?php

namespace App\Http\Controllers;
//importamos los modelos como users.php
use App\User;
//libreria para recibir peticiones obligatorio
use Illuminate\Http\Request;

class UserController extends Controller
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
        $user = User::get();
        return response()->json($user, 201);
    }

    public function post(Request $request){
        $data = $request->json()->all();
        //campo del modelo       //clave del json para extraer su valor 
        $user = User::create([
            'nombre'=> $data['nombre'],
            'email'=> $data['email'],
            "apellido"=> $data['apellido'],
	        "fechaNacimiento"=> $data['fechaNacimiento'],
	        "email"=> $data['email'],
	        "celular"=> $data['celular']
        ]);
        return response()->json($user, 201);
    }

    public function put(Request $request){
        $data = $request->json()->all();
        $user = User::findOrFail($data['_id']);
        $response = $user->update([
            'nombre'=> $data['nombre'],
            'email'=> $data['email'],
            'apellido'=> $data['apellido'],
	        'fechaNacimiento'=> $data['fechaNacimiento'],
	        'email'=> $data['email'],
            'celular'=> $data['celular']

        ]);
        return response()->json('Change Successfully', 201);
    }

    public function delete(Request $request){
        $data = $request->json()->all();
        $user = User::findOrFail($data['_id']);
        $response = $user->delete();
        return response()->json('Deleted Successfully', 201);
    }
}
