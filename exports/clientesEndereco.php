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
	echo "<td>cep</td>";
	echo "<td>estado</td>";
	echo "<td>rua</td>";
	echo "<td>n</td>";
	echo "<td>bairro</td>";
	echo "<td>cidade</td>";
	echo "<td>complemento</td>";
	echo "</tr>";


	$SQL = "SELECT cad_endereco.*, cad_clientes.nome as cliente
	FROM `cad_endereco`
	LEFT JOIN cad_clientes ON cad_clientes.id = cad_endereco.cod_cliente";
	$query = $mysqli->query($SQL);
	while ($dados = $query->fetch_array()) {


	// parte do modulo de feedbacks
	echo "<tr>";
	echo "<td>" . $dados["id"] . "</td>";
	echo "<td>" . $dados["cep"] . "</td>";
	echo "<td>" . $dados["estado"] . "</td>";
	echo "<td>" . $dados["rua"] . "</td>";
	echo "<td>" . $dados["n"] . "</td>";
	echo "<td>" . $dados["bairro"] . "</td>";
	echo "<td>" . $dados["cidade"] . "</td>";
	echo "<td>" . $dados["complemento"] . "</td>";
	echo "</tr>";
	//$i++; contador n utilizado
	}


	echo "</table>";

?>