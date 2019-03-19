<?php
include "config.php";
date_default_timezone_set('America/Sao_Paulo');
$tp = $_POST['tp'];
$login = $_POST['login'];
$id = $_POST['id'];

switch ($tp) {


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

		$sql = "UPDATE cad_usuario SET nome = '$cp1',cep = '$cp2',estado = '$cp3',rua = '$cp4',n = '$cp5',bairro = '$cp6',cidade = '$cp7',complemento = '$cp8',tel1 = '$cp9',tel2 = '$cp10',rg = '$cp11',cpf = '$cp12',cnh = '$cp13',cargo = '$cp14',email = '$cp15',ativo = '$cp16' WHERE id = '$id'";

	break;
	
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

		$sql = "UPDATE cad_veiculo SET placa = '$cp1', renavan = '$cp2', tipo = '$cp3', marca = '$cp4', modelo = '$cp5', ano = '$cp6', chassi = '$cp7',cor = '$cp8',km = '$cp9' WHERE id = '$id'";

	break;


	case 'cad_agua':

		$cp1 = utf8_decode($_POST['cp1']);;

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

		$cp1 = utf8_decode($_POST['cp1']);;

		$sql = "INSERT INTO cad_pagamento (tipo,login_ad) VALUES ('$cp1','$login')";

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

		$sql = "UPDATE cad_clientes SET nome = '$cp1',situacao = '$cp2',cnpj = '$cp3',cep = '$cp4',estado = '$cp5',rua = '$cp6',n = '$cp7',bairro = '$cp8',cidade = '$cp9',complemento = '$cp10',telefones = '$cp11',email_prin = '$cp12',email_sec = '$cp13',resp_compras = '$cp14',tel_compras = '$cp15',resp_financeiro = '$cp16',tel_financeiro = '$cp17',resp_manut = '$cp18',tel_manut = '$cp19',tp_cobranca = '$cp20',ativo = '$cp21' WHERE id = '$id' ";
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

		$sql = "UPDATE cad_adicionais_clientes SET cliente = '$cp1',t_entrega = '$cp2',preco = '$cp3',rota1 = '$cp4',rota2 = '$cp5',t_ida = '$cp6',t_descarrego = '$cp7',t_volta = '$cp8',t_total = '$cp9',p_ida = '$cp10',p_volta = '$cp11',p_total = '$cp12',t_agua = '$cp13',ad_agua = '$cp14',servico = '$cp15',solicit1 = '$cp16',solicit2 = '$cp17',recebedor1 = '$cp18',recebedor2 = '$cp19',auxiliar = '$cp20',bomba = '$cp21',comp_mangueira = '$cp22',pol_mangueira = '$cp23',conexao1 = '$cp24',conexao2 = '$cp25',f_pagamento = '$cp26',prazo = '$cp27' WHERE id = '$id' ";
	break;






	case 'cad_motorista':

		$cp1 = utf8_decode($_POST['cp1']);
		$cp2 = utf8_decode($_POST['cp2']);
		$cp3 = utf8_decode($_POST['cp3']);
		$cp4 = utf8_decode($_POST['cp4']);

		$sql = "UPDATE cad_motorista SET nome = '$cp1', cnh  = '$cp2', contato = '$cp3', situacao = '$cp4' WHERE id = '$id'";

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



}

	$query = $mysqli->query($sql);

	if($query){

		echo "FOI";
	}else{

		echo "ERRO";
	}


?>