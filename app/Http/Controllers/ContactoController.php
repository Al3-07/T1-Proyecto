<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;


class ContactoController extends Controller
{
    public function index(){
        $contactos=Contacto::paginate(10);
        return view ('raizcontacto')->with('contactos',$contactos);
    }
    public function show($id){
        $contactos=Contacto::findOrfail($id);
        return view('contactoIndividual')->with('contactos',$contactos); //mostrar un contacto individual

    }
    public function create(){
        return view(view:'formulariocontacto'); //controlador para el formulario
    }
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|alpha',
            'apellido'=>'required|alpha',
            'correo'=>'required|email|unique',
            'telefono'=>'required|numeric',

        ]);
        $nuevoContacto = new Contacto();
        $nuevoContacto->nombre=$request->input(key:'nombre');
        $nuevoContacto->apellido=$request->input(key:'apellido');
        $nuevoContacto->correo_electronico=$request->input(key:'correo');
        $nuevoContacto->telefono=$request->input(key:'tel');

        $creado=$nuevoContacto->save();
        if($creado){
            return redirect()->route()->with ('mensaje','El contacto fue creado exitosamente');
        }else{
            return back();
        }

    }
    //editar
    public function edit ($id){
        $contacto = Contacto::findOrfail($id);
        return view('formulariocontacto')->with('contacto',$contacto);
    }
    //actualizar
    public function update (Request $request , $id){

        $request ->validate([
            'nombre'=>'required|alpha',
            'apellido'=>'required|alpha',
            'correo'=>'required|email|unique',
            'telefono'=>'required|numeric',
        ]);
        $contacto = $Contacto();
        $contacto->nombre=$request->input(key:'nombre');
        $contacto->apellido=$request->input(key:'apellido');
        $contacto->correo_electronico=$request->input(key:'correo');
        $contacto->telefono=$request->input(key:'tel');
        $creado=$nuevoContacto->save();
        


    }
}

