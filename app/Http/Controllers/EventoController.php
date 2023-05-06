<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
    $eventos = Evento::paginate(10);
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
        $nuevoEvento->titulo=$request->input('titulo');
        $nuevoEvento->descripcion=$request->input('descripcion');
        $nuevoEvento->fecha_inicio=$request->input('fechain');
        $nuevoEvento->fecha_fin=$request->input('fechafin');
            
        $creado=$nuevoEvento->save();
        if($creado){
            return redirect()->route('Evento.index')->with ('mensaje','El evento fue creado exitosamente');
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
        $evento = Evento::findOrFail($id);
        $evento->titulo=$request->input('titulo');
        $evento->descripcion=$request->input('descripcion');
        $evento->fecha_inicio=$request->input('fechain');
        $evento->fecha_fin=$request->input('fechafin');
        
        $creado= $evento->save();
        if($creado){
            return redirect()->route('Evento.index')->with ('mensaje', "".$evento->titulo." se actualizó correctamente");
        }else{
            return back();    
        }
    }
}