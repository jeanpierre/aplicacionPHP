<?php

session_start();

if(!isset($_SESSION['poso'])){

$poso=500;
}

else
	$poso=$_SESSION['poso'];

if($poso<=0){
$mensaje="disabled";

}else
$mensaje="";

?>

<html>
<head>

<title> Juego</title>
<link type="text/css" rel="stylesheet" href="estilo.css" />
</head>
<body>

<?php if(isset($_GET['error']) && $_GET['error'] == '1'){ ?>
<p style="color: red"> Debe seleccionar su jugada </p>

<?php } ?>
<h1> JAN KEN PO </h1>
<form  action="juego.php" method="post">

<select name="operacion">
<option value="nada"> Seleccione </option>
<option value="piedra"> Piedra </option>
<option value="papel">Papel</option>
<option value="tijera">Tijera </option>
</select><br/>
<input type="submit" <?php echo $mensaje;?>><br/>
</form>

<p> Su poso actual es : <?php echo $poso?> </p>

</body>



</html>