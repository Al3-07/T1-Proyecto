@extends('plantilla')
@section('contenido')

<h1> Contacto <a class="btn btn-primary"href="{{route ('Contacto.create')}}"> Nuevo Contacto</a></h1>
<table border=1>
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo_electronico</th>
            <th>Telefono</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
</tr>
</thead>
<tbody>
    @foreach($contactos as $contacto)
    <tr>
        <td>{{$contacto->id}}</td>
        <td>{{$contacto->nombre}}</td>
        <td>{{$contacto->apellido}}</td>
        <td>{{$contacto->correo_electronico}}</td>
        <td>{{$contacto->telefono}}</td>
</tr>
<td><a class="btn btn-warning "href="{{route ('Contacto.show')}}"> Ver</a></td>
<td> <a class="btn btn-warning" href ="{{route('Contacto.edit',['id'=>$contacto->id])}}"> Editar</a></td>
<td>
    <form method ="post" action="{{route('Contacto.borrar'['id'=> $contacto->id])}}">
        @csrf
        @method('delete')
        <input type="submit" onclick 
        class="btn btn-danger">
</form>
</td>