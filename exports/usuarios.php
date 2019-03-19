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
	echo "<td>nome</td>";
	echo "<td>cep</td>";
	echo "<td>estado</td>";
	echo "<td>rua</td>";
	echo "<td>n</td>";
	echo "<td>bairro</td>";
	echo "<td>cidade</td>";
	echo "<td>complemento</td>";
	echo "<td>tel1</td>";
	echo "<td>tel2</td>";
	echo "<td>rg</td>";
	echo "<td>cpf</td>";
	echo "<td>cnh</td>";
	echo "<td>cargo</td>";
	echo "<td>email</td>";
	echo "<td>ativo</td>";

	echo "</tr>";


	$SQL = "SELECT *
	FROM cad_usuario ";
	$query = $mysqli->query($SQL);
	while ($dados = $query->fetch_array()) {


	// parte do modulo de feedbacks
	echo "<tr>";
	echo "<td>" . $dados["id"] . "</td>";
	echo "<td>" . $dados["nome"] . "</td>";
	echo "<td>" . $dados["cep"] . "</td>";
	echo "<td>" . $dados["estado"] . "</td>";
	echo "<td>" . $dados["rua"] . "</td>";
	echo "<td>" . $dados["n"] . "</td>";
	echo "<td>" . $dados["bairro"] . "</td>";
	echo "<td>" . $dados["cidade"] . "</td>";
	echo "<td>" . $dados["complemento"] . "</td>";
	echo "<td>" . $dados["tel1"] . "</td>";
	echo "<td>" . $dados["tel2"] . "</td>";
	echo "<td>" . $dados["rg"] . "</td>";
	echo "<td>" . $dados["cpf"] . "</td>";
	echo "<td>" . $dados["cnh"] . "</td>";
	echo "<td>" . $dados["cargo"] . "</td>";
	echo "<td>" . $dados["email"] . "</td>";
	echo "<td>" . $dados["ativo"] . "</td>";

	echo "</tr>";
	//$i++; contador n utilizado
	}


	echo "</table>";

?>