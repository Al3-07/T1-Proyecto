@extends('plantillas.plantilla')
@section('contenido')

<h1> Nota </h1>
<table border=1>
    <thead>
        <tr>
            <th>id</th>
            <th>Texto</th>
            <th>Fecha</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
            
            
        </tr>
</thead>
<tbody>
    @forelse ($eventos as $evento)
    <tr>
        <td>{{$contacto->id}}</td>
        <td>{{$contacto->texto}}</td>
        <td>{{$contacto->fecha}}</td>
</tr>
<td><a class="btn btn-warning "href="{{route ('Nota.show')}}"> Ver</a></td>
<td> <a class="btn btn-warning" href ="{{route('Nota.edit',['id'=>$nota->id])}}"> Editar</a></td>
<td>
    <form method ="post" action="{{route('Nota.borrar'['id'=> $nota->id])}}">
        @csrf
        @method('delete')
        <input type="submit" onclick 
        class="btn btn-danger">
</form>
</td>