<?php
function validar_jugada($operacion){
if($operacion=="nada"){
			return false;
		}	else{
			return true;

		}

}

function computadora(){
$arreglo= array('piedra','papel','tijera');

$computadora;

shuffle($arreglo);

$arreglo=array_slice($arreglo,2);
$computadora=$arreglo[0];


return $computadora;
}

function ganador($num1,$num2){
$resultado="";
switch($num1){
case 'piedra':
					switch($num2){
					case 'piedra':
						$resultado="empate";
							break;
							case 'papel':
						$resultado="papel";
							break;
							case 'tijera':
							$resultado="piedra";
							break;
					}
					break;
case 'papel':	
					switch($num2){
					case 'piedra':
						$resultado="papel";
							break;
							case 'papel':
						$resultado="empate";
							break;
							case 'tijera':
							$resultado="tijera";
							break;
					}
					break;
case 'tijera':
	switch($num2){
					case 'piedra':
						$resultado="piedra";
							break;
							case 'papel':
						$resultado="tijera";
							break;
							case 'tijera':
							$resultado="empate";
							break;
					}
					break;						
}

return $resultado;

}


?>