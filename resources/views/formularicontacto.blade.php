<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title> Contacto Form </title>
</head>
<h1>Creación de nuevo contacto </h1>
<form method="post" action="{{route('Contacto.guardar')}}">
@csrf

<label> Nombre </label>
<input type="text" name="nombre">
<label> Apellido </label>
<input type="text" name="apellido">
<label> Correo </label>
<input type="text" name="correo">
<label> Telefono</label>
<input type="text" name="tel">

<button type="submit" class="btn btn primary" >Guardar
    <input type= "reset" value="borrar">
</form>

