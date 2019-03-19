<?php
include "config.php";
date_default_timezone_set('America/Sao_Paulo');
$tp = $_POST['tp'];
$login = $_POST['login'];
$id = $_POST['id'];

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);
		$cp5 = utf8_decode($_POST['cp5']);
		$cp6 = utf8_decode($_POST['cp6']);
		$cp7 = utf8_decode($_POST['cp7']);
		$cp8 = utf8_decode($_POST['cp8']);

		$sql = "INSERT INTO cad_endereco (cep,estado,rua,n,bairro,cidade,complemento,cod_cliente,login_ad) VALUES ('$cp2','$cp3','$cp4','$cp5','$cp6','$cp7','$cp8','$id','$login')";

	

	$query = $mysqli->query($sql);

	if($query){

		echo "FOI";
	}else{

		echo "ERRO";
	}


?>