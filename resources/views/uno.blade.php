
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body background="{{asset('nuevo/fondoregistro.jpg') }}">
<div align="center">
<header id="uno"><h1>REGISTRAR LA ORDEN</h1></header>
<form  method="POST" action="{{route('registro.store') }}">

{{csrf_field()}}
Ingrese nombre del plato:
<input type="text" name="nombre"><br><br>
Ingrese el precio del plato:
<input type="text" name="plato"><br><br>
seleccionar que comera:
<select name="tipo">
	<option value="sopa">sopa</option>
	<option value="segundo">segundo</option>
	<option value="postre">postre</option>
</select><br>
alguna sugerencia:
<input type="text" name="descripcion"><br><br>
<input type="submit" value="Registrar">


</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="{{route('pedir.index')}}"><button>pagina principal</button></a>
</body>
</html>
