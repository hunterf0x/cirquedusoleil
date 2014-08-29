<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="">
<title>ENTEL - Cirque Du Soleil</title>
<link href="assets/css/estilo.css" rel="stylesheet" type="text/css" />
<script type="application/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
<script type="application/javascript" src="assets/js/functions.js"></script>
<script type="text/javascript" src="http://dev.tests.cl:8080/target/target-script-min.js#anonymous"></script>
</head>

<body class="no-touch">
	<div id="content">
    	<div class="borde"></div>
        <div class="logo">Entel</div>
        <div class="curva"></div>
        <div class="corteo">Cirque Du Solei Corteo</div>
        <div class="cliente">Cliente Preferencial Entel</div>
        <div class="info">
        	<h1><img src="assets/img/h1.png" alt="Responde la Trivia Du Solei y demuestra tu conocimiento"/></h1>
            <h2><img src="assets/img/h2.png" alt="Estar&aacute;s participando por una de las 100 entradas dobles a Cirque Du Soleil"/></h2>
            <a href="#" id="inicio" >Comenzar</a>
        </div>
        <div class="trivia" id="trivia1">
        	<div class="preg"><img src="assets/img/preg1.png" alt="¿Qu&eacute; animal se repite en todas las producciones de Cirque Du Soleil?"/></div>
            <a class="triv" href="#" data-respuesta="1">Tigres</a>
            <a class="triv" href="#" data-respuesta="2">Elefantes</a>
            <a class="triv ok" href="#" data-respuesta="3">No usan animales</a>
        </div>
        <div class="trivia" id="trivia2">
        	<div class="preg"><img src="assets/img/preg2.png" alt="¿Qu&eacute; significa Cirque Du Soleil?"/></div>
            <a class="triv ok" href="#" data-respuesta="1">Circo del Sol</a>
            <a class="triv" href="#" data-respuesta="2">Cerca de los Sueños</a>
            <a class="triv" href="#" data-respuesta="3">La Casa del Sol</a>
        </div>
        <div class="trivia" id="trivia3">
        	<div class="preg"><img src="assets/img/preg3.png" alt="¿Cu&aacute;l de las siguientes no es una producción de Cirque Du Soleil?"/></div>
            <a class="triv" href="#" data-respuesta="1">Alegr&iacute;a</a>
            <a class="triv" href="#" data-respuesta="2">Corteo</a>
            <a class="triv ok" href="#" data-respuesta="3">Los Tachu&eacute;lles</a>
        </div>
        <div class="trivia" id="trivia4">
        	<div class="preg"><img src="assets/img/preg4.png" alt="¿De qu&eacute; pa&iacute;s es originario Cirque Du Soleil?"/></div>
            <a class="triv" href="#" data-respuesta="1">Chile</a>
            <a class="triv ok" href="#" data-respuesta="2">Canad&aacute;</a>
            <a class="triv" href="#" data-respuesta="3">Alemania</a>
        </div>
        <div class="trivia" id="trivia5">
        	<div class="preg"><img src="assets/img/preg5.png" alt="¿Qu&eacute; famoso d&uacute;o de baile chileno es parte del elenco en Las Vegas?"/></div>
            <a class="triv" href="#" data-respuesta="1">Hermanos Campos</a>
            <a class="triv ok" href="#" data-respuesta="2">Hermanos Peralta</a>
            <a class="triv" href="#" data-respuesta="3">Hermanos Bustos</a>
        </div>
        <div class="respuesta_no hide">
        	<div class="resp"><img class="imgr" src="assets/img/resp0.png" alt="Obtuviste 0 respuestas correctas"/></div>
            <p class="intentalo btnsx"><img src="assets/img/intentalo.png" alt="Int&eacute;ntalo de nuevo"/></p>
            <a href="#" id="again">Volver a Jugar</a>
        </div>
        <div class="respuesta_si hide">
        	<div class="resp"><img class="imgr" src="assets/img/resp5.png" alt="Obtuviste 5 respuestas correctas"/></div>
            <p class="txt_ok"><img src="assets/img/txt_ok.png" alt="Ya estás participando por una de las 100 entradas dobles a Cirque Du Soleil"/></p>
        </div>
    </div>

</body>
</html>
