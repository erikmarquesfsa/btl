<?php
session_start();
include "config.php";
date_default_timezone_set('America/Sao_Paulo');
//$cp1 = utf8_decode($_POST['cp1']);
$login = $_POST['login'];
$senha = $_POST['senha'];

	
	//verificar se o usuário tem um perfil cadastrado
	$sql = "SELECT * FROM login WHERE login = '$login'";
	$query = $mysqli->query($sql);
	$total = $query->num_rows;

		if($total>=1){//login ok

			$sql2 = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
			$query2 = $mysqli->query($sql2);
			$total2 = $query2->num_rows;

				if($total2>=1){//se senha ok

					$_SESSION['login'] = $login;	
					echo "<script language='javascript'>
				    window.location='../painel.php';
				    </script>";

				}
				else{
					echo "<script language='javascript'>
				    alert('Ops! Sua senha está incorreta.')
				    window.location='../index.php';
				    </script>";
				}


		}else{

			echo "<script language='javascript'>
		    alert('Ops! Seu login está incorreto.')
		    window.location='../index.php';
		    </script>";
		}

	

?>