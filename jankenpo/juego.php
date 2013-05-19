<?php
session_start();
include 'funciones.php';


if(!isset($_SESSION['poso'])){
$_SESSION['poso']=500;
}

$valor=$_POST['operacion'];

$es_valido=validar_jugada($valor);

if(!$es_valido){
header('Location:index.php?error=1');
exit();
}

#jugada de la computadora
$generar_jugada=computadora();

#jGanador
$resultado=ganador($valor,$generar_jugada);

#Acumular Poso
if($resultado=='empate'){
		
	$_SESSION['poso']+=0;
}
else if($resultado==$generar_jugada){
	$_SESSION['poso']-=300;

}else 
$_SESSION['poso']+=500;
	
?>

<html>

<head>
<link type="text/css" rel="stylesheet" href="estilo.css" />
</head>
<body>

<h1> Jan Ken Po </h1>

<p> Tu jugada fue: <?php   echo $valor ?> </p></br>

<img src="<?php echo $valor?>.jpg" width="100px" height="100px" > <br/>


<p> La computadora elegio: <?php echo $generar_jugada ?> </p><br/>
<img src="<?php echo $generar_jugada?>.jpg" width="100px" height="100px" > <br/>

<p> Ganador : <?php echo $resultado ?></p>
<p> Poso : <?php echo $_SESSION['poso']; ?> </p>



<a href="index.php"> Regresar a jugar </a>
</body>

<html>