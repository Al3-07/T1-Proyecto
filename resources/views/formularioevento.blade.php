<!DOCTYPE htmel>
<html>
    <head>
    <meta charset="UTF-8">
    <title> Contacto Form </title>
</head>
<h1>Creación de nuevo contacto </h1>
<form method="post" action="{{route('Evento.guardar')}}">
@csrf

<label> Titulo </label>
<input type="text" name="titulo">
<label> Descripcion </label>
<input type="textarea" name="descripcion">
<label> Fecha de inicio </label>
<input type="datetime" name="fechain">
<label> Fecha fin</label>
<input type="datetime" name="fechafin">

<button type="submit" class="btn btn primary" >Guardar
    <input type= "reset" value="borrar">
</form>