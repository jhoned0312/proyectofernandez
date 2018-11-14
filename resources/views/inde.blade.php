
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/vistaproyec.css">
</head>
<body background="nuevo/fondoprin.jpg">
@yield('conten')
<div id="uno">


    <header id="dos">
        <h1><font color="red">BIENVENIDO A MI TIENDA DE COMIDA NACIONAL</font></h1>
    </header>
<nav id="tres">
    <ul class="menu">  
            <li><a href="{{route('menu.create')}}"> MENU   </a> </li>
            <li><a href="{{route('registro.create')}}"> REGISTROS    </a> </li>
            <li><a href="{{route('pedir.create')}}">REGISTRO DE PEDIDOS </a> </li>
            <li><a href="tres">GALERIA</a></li>
            
        </ul>   
</nav>
<section id="comentario">
    <article id="conterio1">
        <img src="nuevo/pique.jpg" width="500" height="300">
    </article>
    <article id="conterio2">
        <img src="nuevo/majadito.jpg" width="500" height="300">
    </article>
</section>
<footer id="pie">
    <p>GRACIAS POR TU CONSUMO VUELVE PROTO TE ESPERAMOS!!!!!</p>
</footer>
</div>
</body>
</html>