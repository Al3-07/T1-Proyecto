<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index(){
        return view ('raiznota')->with('notas',$notas);
        }
        public function create(){
            return view('NotaFormulario');
        }
        public function store (Request $request){
            $request->validate([
                'texto'=>'required|alpha',
                'fecha'=>'required|datetime',
    
            ]);
            $nuevoNota = new Nota();
            $nuevoNota->texto=$request->input(key:'texto');
            $nuevoNota->fecha=$request->input(key:'fecha');
            
    
            $creado=$nuevoNota->save();
            if($creado){
                return redirect()->route()->with ('mensaje','La nota fue creada exitosamente');
            }else{
                return back();
            
        }
           
    
        }
        //editar
    public function edit ($id){
        $contacto = Contacto::findOrfail($id);
        return view('FormularioEditarContacto')->with('contacto',$contacto);
    }
    //actualizar
    public function update (Request $request , $id){

        $request ->validate([
            'texto'=>'required|alpha',
            'fecha'=>'required|datetime',
            
        ]);
        
        $nuevoNota = new Nota();
        $nuevoNota->texto=$request->input(key:'texto');
        $nuevoNota->fecha=$request->input(key:'fecha');


    }
}