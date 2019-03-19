<?php
header("Content-Type: text/html; charset=ISO-8859-1'");
header("Content-type: application/vnd.ms-excel");
header("Content-type: application/force-download");
header("Content-Disposition: attachment; filename=relatorio.xls");
header("Pragma: no-cache");


include "../_scripts/config.php";

//VARIÁVEIS RECEBIDAS DO USUÁRIO
/*$data_inicial = $_POST["data_inicial"];
$data_final = $_POST["data_final"];
$tipo = $_POST["tipo"];
$data_inicial = implode("-", array_reverse(explode("/",$data_inicial)));
$data_final = implode("-", array_reverse(explode("/",$data_final)));*/



	echo "<table border='1'>";
	echo "<tr>";
	//*******************CAMPOS COMUNS A TODOS OS FORMULÁRIOS******************************************
	echo "<td>id</td>";
	echo "<td>placa</td>";
	echo "<td>renavan</td>";
	echo "<td>tipo</td>";
	echo "<td>marca</td>";
	echo "<td>modelo</td>";
	echo "<td>ano</td>";
	echo "<td>chassi</td>";
	echo "<td>cor</td>";
	echo "<td>km</td>";
	echo "</tr>";


	$SQL = "SELECT *
	FROM cad_veiculo ";
	$query = $mysqli->query($SQL);
	while ($dados = $query->fetch_array()) {


	// parte do modulo de feedbacks
	echo "<tr>";
	echo "<td>" . $dados["id"] . "</td>";
	echo "<td>" . $dados["placa"] . "</td>";
	echo "<td>" . utf8_decode($dados['renavan']) . "</td>";
	echo "<td>" . $dados['tipo'] . "</td>";
	echo "<td>" . utf8_decode($dados['marca']) . "</td>";
	echo "<td>" . utf8_decode($dados['modelo']) . "</td>";
	echo "<td>" . utf8_decode($dados['ano']) . "</td>";
	echo "<td>" . utf8_decode($dados['chassi']) . "</td>";
	echo "<td>" . utf8_decode($dados['cor']) . "</td>";
	echo "<td>" . utf8_decode($dados['km']) . "</td>";	
	echo "</tr>";
	//$i++; contador n utilizado
	}


	echo "</table>";

?>