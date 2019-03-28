<?php
include "config.php";
date_default_timezone_set('America/Sao_Paulo');
$tp = $_POST['tp'];
//$login = $_POST['login'];

switch ($tp) {

	case 'endereco_extra':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_endereco WHERE id = '$id'";

		break;

	case 'tel_extra':
		
		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_tel WHERE id = '$id'";

		break;


	case 'perfil_cad':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_perfis WHERE id = '$id'";

		$res = 'index.php?t=veic';

	break;
	
	case 'cad_implemento':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_implemento WHERE id = '$id'";

		$res = 'index.php?t=veic';

	break;
	


	case 'veiculo':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_veiculo WHERE id = '$id'";

		$res = 'index.php?t=veic';

	break;
	

	case 'cad_tanque':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_tanques WHERE id = '$id'";

		$res = 'index.php?t=veic';

	break;


	case 'cad_agua':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_agua WHERE id = '$id'";

	break;

	case 'cad_poco':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_poco WHERE id = '$id'";

	break;

	case 'cad_leitura':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_leitura WHERE id = '$id'";

	break;

	case 'cad_pag':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_pagamento WHERE id = '$id'";

	break;

	case 'cad_clientes':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_clientes WHERE id = '$id'";

	break;

	case 'cad_clientes_ad':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_adicionais_clientes WHERE id = '$id'";

	break;

	case 'cad_motorista':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_motorista WHERE id = '$id'";

	break;


	case 'cad_servico':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_servico WHERE id = '$id'";

	break;

	case 'uni_medida':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_medida WHERE id = '$id'";

	break;


	case 'cad_usuario':

		$id = utf8_decode($_POST['id']);

		$sql = "DELETE FROM cad_usuario WHERE id = '$id'";

	break;



}

	$query = $mysqli->query($sql);

	if($query){

		echo "FOI";
		echo $id; echo $tp;
	}else{

		echo "ERRO";
	}


?>