<?php
include "config.php";
date_default_timezone_set('America/Sao_Paulo');
$tp = $_POST['tp'];
$login = $_POST['login'];

switch ($tp) {
	
	case 'veiculo':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);
		$cp5 = utf8_decode($_POST['cp5']);
		$cp6 = utf8_decode($_POST['cp6']);
		$cp7 = utf8_decode($_POST['cp7']);
		$cp8 = utf8_decode($_POST['cp8']);
		$cp9 = utf8_decode($_POST['cp9']);

		$sql = "INSERT INTO cad_veiculo (placa, renavan, tipo, marca, modelo,ano,chassi,cor,km,login_ad) VALUES ('$cp1','$cp2','$cp3','$cp4','$cp5','$cp6','$cp7','$cp8','$cp9','$login')";

		$res = 'index.php?t=veic';

	break;

	case 'cad_implemento':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);

		$sql = "INSERT INTO cad_implemento (veiculo,placa,km,login_ad) VALUES ('$cp3','$cp1','$cp2','$login')";

	break;



	case 'cad_agua':

		$cp1 = utf8_decode($_POST['cp1']);

		$sql = "INSERT INTO cad_agua (agua,login_ad) VALUES ('$cp1','$login')";

	break;

	case 'cad_poco':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);

		$sql = "INSERT INTO cad_poco (poco,vazao,login_ad) VALUES ('$cp1','$cp2','$login')";

	break;

	case 'cad_leitura':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);

		$sql = "INSERT INTO cad_leitura (data_leitura,volume,login_ad) VALUES ('$cp1','$cp2','$login')";

	break;

	case 'cad_pag':

		$cp1 = utf8_decode($_POST['cp1']);

		$sql = "INSERT INTO cad_pagamento (tipo,login_ad) VALUES ('$cp1','$login')";

	break;


	case 'cad_tanque':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);

		$sql = "INSERT INTO cad_tanques (placa,capacidade,login_ad) VALUES ('$cp1','$cp2','$login')";

	break;

	case 'cad_clientes':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);
		$cp5 = utf8_decode($_POST['cp5']);
		$cp6 = utf8_decode($_POST['cp6']);
		$cp7 = utf8_decode($_POST['cp7']);
		$cp8 = utf8_decode($_POST['cp8']);
		$cp9 = utf8_decode($_POST['cp9']);
		$cp10 = utf8_decode($_POST['cp10']);
		$cp11 = utf8_decode($_POST['cp11']);
		$cp12 = utf8_decode($_POST['cp12']);
		$cp13 = utf8_decode($_POST['cp13']);
		$cp14 = utf8_decode($_POST['cp14']);
		$cp15 = utf8_decode($_POST['cp15']);
		$cp16 = utf8_decode($_POST['cp16']);
		$cp17 = utf8_decode($_POST['cp17']);
		$cp18 = utf8_decode($_POST['cp18']);
		$cp19 = utf8_decode($_POST['cp19']);
		$cp20 = utf8_decode($_POST['cp20']);
		$cp21 = utf8_decode($_POST['cp21']);

		$sql = "INSERT INTO cad_clientes (nome,situacao,cnpj,cep,estado,rua,n,bairro,cidade,complemento,telefones,email_prin,email_sec,resp_compras,tel_compras,resp_financeiro,tel_financeiro,resp_manut,tel_manut,tp_cobranca,ativo,login_ad) VALUES ('$cp1','$cp2','$cp3','$cp4','$cp5','$cp6','$cp7','$cp8','$cp9','$cp10','$cp11','$cp12','$cp13','$cp14','$cp15','$cp16','$cp17','$cp18','$cp19','$cp20','$cp21','$login')";

		$res = 'index.php?t=veic';

	break;

	case 'cad_clientes_ad':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);
		$cp5 = utf8_decode($_POST['cp5']);
		$cp6 = utf8_decode($_POST['cp6']);
		$cp7 = utf8_decode($_POST['cp7']);
		$cp8 = utf8_decode($_POST['cp8']);
		$cp9 = utf8_decode($_POST['cp9']);
		$cp10 = utf8_decode($_POST['cp10']);
		$cp11 = utf8_decode($_POST['cp11']);
		$cp12 = utf8_decode($_POST['cp12']);
		$cp13 = utf8_decode($_POST['cp13']);
		$cp14 = utf8_decode($_POST['cp14']);
		$cp15 = utf8_decode($_POST['cp15']);
		$cp16 = utf8_decode($_POST['cp16']);
		$cp17 = utf8_decode($_POST['cp17']);
		$cp18 = utf8_decode($_POST['cp18']);
		$cp19 = utf8_decode($_POST['cp19']);
		$cp20 = utf8_decode($_POST['cp20']);
		$cp21 = utf8_decode($_POST['cp21']);
		$cp22 = utf8_decode($_POST['cp22']);
		$cp23 = utf8_decode($_POST['cp23']);
		$cp24 = utf8_decode($_POST['cp24']);
		$cp25 = utf8_decode($_POST['cp25']);
		$cp26 = utf8_decode($_POST['cp26']);
		$cp27 = utf8_decode($_POST['cp27']);

		$sql = "INSERT INTO cad_adicionais_clientes (cliente,t_entrega,preco,rota1,rota2,t_ida,t_descarrego,t_volta,t_total,p_ida,p_volta,p_total,t_agua,ad_agua,servico,solicit1,solicit2,recebedor1,recebedor2,auxiliar,bomba,comp_mangueira,pol_mangueira,conexao1,conexao2,f_pagamento,prazo,login_ad) VALUES ('$cp1','$cp2','$cp3','$cp4','$cp5','$cp6','$cp7','$cp8','$cp9','$cp10','$cp11','$cp12','$cp13','$cp14','$cp15','$cp16','$cp17','$cp18','$cp19','$cp20','$cp21','$cp22','$cp23','$cp24','$cp25','$cp26','$cp27','$login')";

		$res = 'index.php?t=veic';

	break;

	case 'cad_motorista':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);

		$sql = "INSERT INTO cad_motorista (nome, cnh, contato, situacao, login_ad) VALUES ('$cp1','$cp2','$cp3','$cp4','$login')";

		$res = 'index.php?t=veic';

	break;


	case 'cad_servico':

		$cp1 = utf8_decode($_POST['cp1']);

		$sql = "INSERT INTO cad_servico (servico, login_ad) VALUES ('$cp1','$login')";

		$res = 'index.php?t=veic';

	break;

	case 'uni_medida':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);

		$sql = "INSERT INTO cad_medida (codigo, grandeza, nome, simbolo, login_ad) VALUES ('$cp1','$cp2','$cp3','$cp4','$login')";

		$res = 'index.php?t=veic';

	break;


	case 'cad_usuario':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);
		$cp5 = utf8_decode($_POST['cp5']);
		$cp6 = utf8_decode($_POST['cp6']);
		$cp7 = utf8_decode($_POST['cp7']);
		$cp8 = utf8_decode($_POST['cp8']);
		$cp9 = utf8_decode($_POST['cp9']);
		$cp10 = utf8_decode($_POST['cp10']);
		$cp11 = utf8_decode($_POST['cp11']);
		$cp12 = utf8_decode($_POST['cp12']);
		$cp13 = utf8_decode($_POST['cp13']);
		$cp14 = utf8_decode($_POST['cp14']);
		$cp15 = utf8_decode($_POST['cp15']);
		$cp16 = utf8_decode($_POST['cp16']);

		$sql = "INSERT INTO cad_usuario (nome, cep, estado, rua, n, bairro, cidade, complemento, tel1, tel2, rg, cpf, cnh, cargo, email, ativo, login_ad) VALUES ('$cp1','$cp2','$cp3','$cp4','$cp5','$cp6','$cp7','$cp8','$cp9','$cp10','$cp11','$cp12','$cp13','$cp14','$cp15','$cp16','$login')";

		$res = 'index.php?t=veic';

	break;



}

	$query = $mysqli->query($sql);

	if($query){

		echo "FOI";
	}else{

		echo "ERRO";
	}


?>