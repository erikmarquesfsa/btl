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
	echo "<td>veiculo</td>";
	echo "<td>placa</td>";
	echo "<td>km</td>";
	echo "</tr>";


	$SQL = "SELECT *
	FROM cad_implemento ";
	$query = $mysqli->query($SQL);
	while ($dados = $query->fetch_array()) {


	// parte do modulo de feedbacks
	echo "<tr>";
	echo "<td>" . $dados["id"] . "</td>";
	echo "<td>" . $dados["veiculo"] . "</td>";
	echo "<td>" . $dados['placa'] . "</td>";
	echo "<td>" . $dados['km'] . "</td>";
	echo "</tr>";
	//$i++; contador n utilizado
	}


	echo "</table>";

?>