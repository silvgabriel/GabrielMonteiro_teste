<?php
$con = mysqli_connect("localhost", "root","","bdcorrida");


if(!$con){
	die("Falha" . mysqli_connect_error());
}else{
echo "Erro ao conectar !";
	
}
?>