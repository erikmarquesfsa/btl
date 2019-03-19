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
	echo "<td>data_inc</td>";
	echo "<td>login_ad</td>";
	echo "<td>cliente</td>";
	echo "<td>t_entrega</td>";
	echo "<td>preco</td>";
	echo "<td>rota1</td>";
	echo "<td>rota2</td>";
	echo "<td>t_ida</td>";
	echo "<td>t_descarrego</td>";
	echo "<td>t_volta</td>";
	echo "<td>t_total</td>";
	echo "<td>p_ida</td>";
	echo "<td>p_volta</td>";
	echo "<td>p_total</td>";
	echo "<td>t_agua</td>";
	echo "<td>ad_agua</td>";
	echo "<td>servico</td>";
	echo "<td>solicit1</td>";
	echo "<td>solicit2</td>";
	echo "<td>recebedor1</td>";
	echo "<td>recebedor2</td>";
	echo "<td>auxiliar</td>";
	echo "<td>bomba</td>";
	echo "<td>comp_mangueira</td>";
	echo "<td>pol_mangueira</td>";
	echo "<td>conexao1</td>";
	echo "<td>conexao2</td>";
	echo "<td>f_pagamento</td>";
	echo "<td>prazo</td>";


	echo "</tr>";


	$SQL = "SELECT *
	FROM cad_adicionais_clientes ";
	$query = $mysqli->query($SQL);
	while ($dados = $query->fetch_array()) {


	// parte do modulo de feedbacks
	echo "<tr>";
	echo "<td>" . $dados["id"] . "</td>";
	echo "<td>" . $dados["data_inc"] . "</td>";
	echo "<td>" . $dados["login_ad"] . "</td>";
	echo "<td>" . $dados["cliente"] . "</td>";
	echo "<td>" . $dados["t_entrega"] . "</td>";
	echo "<td>" . $dados["preco"] . "</td>";
	echo "<td>" . $dados["rota1"] . "</td>";
	echo "<td>" . $dados["rota2"] . "</td>";
	echo "<td>" . $dados["t_ida"] . "</td>";
	echo "<td>" . $dados["t_descarrego"] . "</td>";
	echo "<td>" . $dados["t_volta"] . "</td>";
	echo "<td>" . $dados["t_total"] . "</td>";
	echo "<td>" . $dados["p_ida"] . "</td>";
	echo "<td>" . $dados["p_volta"] . "</td>";
	echo "<td>" . $dados["p_total"] . "</td>";
	echo "<td>" . $dados["t_agua"] . "</td>";
	echo "<td>" . $dados["ad_agua"] . "</td>";
	echo "<td>" . $dados["servico"] . "</td>";
	echo "<td>" . $dados["solicit1"] . "</td>";
	echo "<td>" . $dados["solicit2"] . "</td>";
	echo "<td>" . $dados["recebedor1"] . "</td>";
	echo "<td>" . $dados["recebedor2"] . "</td>";
	echo "<td>" . $dados["auxiliar"] . "</td>";
	echo "<td>" . $dados["bomba"] . "</td>";
	echo "<td>" . $dados["comp_mangueira"] . "</td>";
	echo "<td>" . $dados["pol_mangueira"] . "</td>";
	echo "<td>" . $dados["conexao1"] . "</td>";
	echo "<td>" . $dados["conexao2"] . "</td>";
	echo "<td>" . $dados["f_pagamento"] . "</td>";
	echo "<td>" . $dados["prazo"] . "</td>";


	echo "</tr>";
	//$i++; contador n utilizado
	}


	echo "</table>";

?>