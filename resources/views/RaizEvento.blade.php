@extends('plantilla')
@section('contenido')

<h1> Evento </h1>
<table border=1>
    <thead>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Fecha de inicio</th>
            <th>Fecha final</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
            
</tr>
</thead>
<tbody>
    @forelse ($eventos as $evento)
    <tr>
        <td>{{$contacto->id}}</td>
        <td>{{$contacto->titulo}}</td>
        <td>{{$contacto->descripcion}}</td>
        <td>{{$contacto->fecha_inicio}}</td>
        <td>{{$contacto->fecha_fin}}</td>
</tr>
<td><a class="btn btn-warning "href="{{route ('Evento.show')}}"> Ver</a></td>
<td> <a class="btn btn-warning" href ="{{route('Evento.edit',['id'=>$evento->id])}}"> Editar</a></td>
<td>
    <form method ="post" action="{{route('Evento.borrar'['id'=> $evento->id])}}">
        @csrf
        @method('delete')
        <input type="submit" onclick 
        class="btn btn-danger">
</form>
</td>