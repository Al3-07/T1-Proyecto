<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title> Nota Form </title>
</head>
<h1>Creación de nueva nota </h1>
<form method="post" action="{{route('nota.guardar')}}">
@csrf

<label> Texto </label>
<input type="textarea" name="texto">
<label> Fecha</label>
<input type="datetime" name="fecha">

<button type="submit" class="btn btn primary" >Guardar
    <input type= "reset" value="borrar">
</form>