
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="nuevo/fondoregistro1.jpg">
<h1 align="CENTER">REGISTRAR CLIENTES</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center">
<form method="POST" action="base.php">
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
	<option>boliviano </option>
		<option>dolares </option>
			<option>pesos </option>
</select><br>

<input type="submit" value="registrar">

</form>
</div>
<a href="home"><button>pagina principal</button></a>

</body>
</html>
