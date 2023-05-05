<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
    return view ('raizevento')->with('eventos',$eventos);
    }
    public function create(){
        return view('EventoFormulario');
    }
    public function store (Request $request){
        $request->validate([
            'titulo'=>'required|alpha',
            'descripcion'=>'required|alpha',
            'fecha_inicio'=>'required|datetime',
            'fecha_fin'=>'required|datetime',

        ]);
        $nuevoEvento = new  Evento();
        $nuevoEvento->titulo=$request->input(key:'titulo');
        $nuevoEvento->descripcion=$request->input(key:'descripcion');
        $nuevoEvento->fecha_inicio=$request->input(key:'fechain');
        $nuevoEvento->fecha_fin=$request->input(key:'fechafin');
        

        $creado=$nuevoEvento->save();
        if($creado){
            return redirect()->route()->with ('mensaje','El evento fue creado exitosamente');
        }else{
            return back();
        
    }
       

    }
     //editar
     public function edit ($id){
        $evento = Evento::findOrfail($id);
        return view('FormularioEditarEvento')->with('evento',$evento);
    }
    //actualizar
    public function update (Request $request , $id){

        $request ->validate([
            'titulo'=>'required|alpha',
            'descripcion'=>'required|alpha',
            'fecha_inicio'=>'required|datetime',
            'fecha_fin'=>'required|datetime',
           
        ]);
        $nuevoEvento = new  Evento();
        $nuevoEvento->titulo=$request->input(key:'titulo');
        $nuevoEvento->descripcion=$request->input(key:'descripcion');
        $nuevoEvento->fecha_inicio=$request->input(key:'fechain');
        $nuevoEvento->fecha_fin=$request->input(key:'fechafin');
        


    }
}
