
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body background="{{asset('nuevo/fondoregistro1.jpg') }}">
<div align="center">
<h1>REGISTRAR CLIENTES</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form method="POST" action="{{route('pedir.store') }}">
{{csrf_field()}}
nombre cliente:
<input type="text" name="nombre"><br><br>
direccion cliente:
<input type="text" name="direccion"><br><br>
nombre de pedido:
<input type="text" name="pedido"><br><br>
costo:
<input type="text" name="costo"><br><br>
forma de pago : <select name="tipo">
	<option value="boliviano">boliviano </option>
		<option value="dolares">dolares </option>
			<option value="pesos">pesos </option>
</select><br>

<input type="submit" value="registrar">

</form>
</div>
<a href="{{route('pedir.index')}}"><button>pagina principal</button></a>

</body>
</html>
