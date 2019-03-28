<?php
include "config.php";
date_default_timezone_set('America/Sao_Paulo');
$tp = $_POST['tp'];
$login = $_POST['login'];
$id = $_POST['id'];

		$cp1 = utf8_decode($_POST['cp1']);

		$sql = "INSERT INTO cad_tel (telefone,cod_cliente,login_ad) VALUES ('$cp1','$id','$login')";

	

	$query = $mysqli->query($sql);

	if($query){

		echo "FOI";
	}else{

		echo "ERRO";
	}


?>