<?php
include "config.php";
date_default_timezone_set('America/Sao_Paulo');
//$cp1 = utf8_decode($_POST['cp1']);
$id = $_POST['id'];
$cp1 = $_POST['cp1'];
$cp2 = $_POST['cp2'];
$cp3 = $_POST['cp3'];
$cp4 = $_POST['cp4'];
$cp5 = $_POST['cp5'];
$cp6 = $_POST['cp6'];
$cp7 = $_POST['cp7'];

	
	//verificar se o usuário tem um perfil cadastrado
	$sql = "SELECT * FROM cad_perfis WHERE usuario = '$id'";
	$query = $mysqli->query($sql);
	$total = $query->num_rows;

	//caso o registro exista deletamos
	if($total>=1){
		/*$sql2 = "DELETE FROM cad_perfis WHERE id = '$id'";
		$query2 = $mysqli->query($sql2); */

		$sql3 = "UPDATE cad_perfis SET cadastro = '$cp1', programacao = '$cp2', processos = '$cp3', crms = '$cp4', vazao = '$cp5', relatorios = '$cp6', seguranca = '$cp7' WHERE usuario = '$id'";
		$query3 = $mysqli->query($sql3);

	}else{

		
		$sql3 = "INSERT INTO cad_perfis (usuario,cadastro,programacao,processos,crms,vazao,relatorios,seguranca) VALUES ('$id','$cp1','$cp2','$cp3','$cp4','$cp5','$cp6','$cp7')";
		$query3 = $mysqli->query($sql3);
	}



?>