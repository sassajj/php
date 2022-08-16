<?php

if(isset($_POST["enviar"]) && !empty($_POST["masa"]) && !empty($_POST["altura"])){

$masa = $_POST["masa"];

$altura = $_POST["altura"];

$resultado = $masa / $altura;

echo "<br> Su peso es: " .$masa . "<br><br>";

echo "Su altura es: " .$altura . "<br><br>";

echo "Su masa corporal es: " . $resultado;

}else{

echo "escriba los campos del formulario";

}

?>