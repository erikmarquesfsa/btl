<?php

function dadosAcessso($login){
    include "config.php";
    $sql = "SELECT * FROM cad_perfis WHERE id = '$login'";
    $query = $mysqli->query($sql);
    $linha = mysqli_fetch_array($query);

    return array($linha['cadastro'],$linha['programacao'],$linha['processos'],$linha['crms'],$linha['crms'],$linha['relatorios'],$linha['seguranca']);

}

function dadosLogin($login){
    include "config.php";
    $sql = "SELECT * FROM login WHERE login = '$login'";
    $query = $mysqli->query($sql);
    $linha = mysqli_fetch_array($query);

    return $linha['id'];

}

function dadosFuncao($login){
    include "_scripts/config2.php";
    $sql = "SELECT * FROM dados_gerais_claro WHERE login_rede = '$login'";
    $query = $mysqli->query($sql);
    $linha = mysqli_fetch_array($query);
    $funcao  = $linha['funcao'];
    $t = 'COORDENADOR DE OPERACOES';

    if($funcao == $t){

        $d = 1;
    }else{

        $d = 0;
    }

    return $d;

}


function casosCoord($nome){

    include "_scripts/config.php";
    $sql = "SELECT base.*,base_abs.coordenador,base_abs.operador,base_abs.pausa 
    FROM base 
    INNER JOIN base_abs ON base.id_pausa = base_abs.id
    WHERE base.status = 'N ACEITO'
    AND  base_abs.supervisor = '$nome'     
    ORDER BY base_abs.operador";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;

    return $total;
}




/*


function dadosCargo($login){
    include "_scripts/config.php";
    $sql = mysql_query("SELECT * FROM login WHERE login = '$login'");
    $linha = mysql_fetch_array($sql);
    $cargo  = $linha['cargo'];

    return $cargo;

}



function verificaUsuario($login) {//FUNÇÃO UTILIZADA PARA PEGAR OS DADOS DO ADMINISTRADOR
    include "config.php";
    $sql = "SELECT * FROM login WHERE login = '$login'";
    $executar = mysql_query($sql);
    while ($linha = mysql_fetch_array($executar)){
        $nome  = $linha['nome'];
    }
    return ($nome);

}


function autenticaUser($login,$senha) {//FUNÇÃO UTILIZADA PARA VERIFICAR A QUANTIDADE DE TRATADOS
    include "config.php";
    $sql = mysql_query("SELECT id FROM login WHERE login = '$login' AND senha = '$senha'");
    $tratados = mysql_num_rows($sql);
    return $tratados;

}

function totalMonitorias($login) {//FUNÇÃO UTILIZADA PARA VERIFICAR A QUANTIDADE DE TRATADOS
    include "config2.php";
    $sql = mysql_query("SELECT id FROM `tab_rep`
    where monitor = '$login'
    UNION ALL
    SELECT id FROM `tab_transf`
    where monitor = '$login'");
    $tratados = mysql_num_rows($sql);
    return $tratados;

}



function totalMonitoriasRep($login) {//FUNÇÃO UTILIZADA PARA VERIFICAR A QUANTIDADE DE TRATADOS
    include "config2.php";
    $sql = mysql_query("SELECT id FROM `tab_rep`
    where monitor = '$login'
    AND tipo = 'AFORTUNADOS'");
    $tratados = mysql_num_rows($sql);
    return $tratados;

}


function totalMonitoriasTransf($login) {//FUNÇÃO UTILIZADA PARA VERIFICAR A QUANTIDADE DE TRATADOS
    include "config2.php";
    $sql = mysql_query("SELECT id FROM `tab_transf`
    where monitor = '$login'
    AND tipo = 'AFORTUNADOS'");
    $tratados = mysql_num_rows($sql);
    return $tratados;

}




function verificaQtdeTratadaUser($login) {//FUNÇÃO UTILIZADA PARA VERIFICAR A QUANTIDADE DE TRATADOS
    include "config2.php";
    $sql = mysql_query("SELECT id FROM base WHERE login = '$login' AND date(data) = CURRENT_DATE");
    $tratados = mysql_num_rows($sql);
    return $tratados;

}






function verificaRep($super,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";


    $sql = mysql_query("
        SELECT repetidas.login,
        SUM(atd) as ATD,
        SUM(rep_24) as rep,
        round(100*(SUM(rep_24)/SUM(atd)),2) as p,
        super,
        op,
        bd.login as login_op
        FROM `repetidas`
        INNER JOIN bd ON bd.login = repetidas.login
        WHERE super = '$super'
        AND MONTH(dt_rep) = MONTH(CURRENT_DATE())
        AND YEAR(dt_rep) = YEAR(CURRENT_DATE())
        GROUP BY repetidas.login
        ORDER BY p $tipo
        LIMIT 1
    ");

    $linha = mysql_fetch_array($sql);

    return array($linha['p'],$linha['op'],$linha['login_op']);

}



function dadosCaso($login,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";

    if($tipo=="rep"){

        $sql = mysql_query("
        SELECT MATR_CHAMADA_REPETIDA as login,
        TERMINAL,
        DATA_HORA_INI_CHAMADA_GERADORA  as data_rep,
        id
        FROM dados_lig_rep
        WHERE MATR_CHAMADA_GERADORA = '$login'
        AND status = 'ABERTO'
        ORDER BY id DESC
        LIMIT 1
        ");

        $linha = mysql_fetch_array($sql);

        return array($linha['id'],$linha['TERMINAL'],$linha['data_rep']);

    }



   else{

        $sql = mysql_query("
        SELECT dados_lig_transf.CD_MATRICULA_ATD as CD_MATRICULA_ATD,
        dados_lig_transf.NU_CLITRATADO as NU_CLITRATADO,
        dados_lig_transf.id as id,
        dados_lig_transf.SEGSTART_DATE as SEGSTART_DATE,
        bd.login
        FROM dados_lig_transf
        INNER JOIN bd ON bd.login2 = dados_lig_transf.CD_MATRICULA_ATD
        WHERE bd.login = '$login'
        AND status = 'ABERTO'
        ORDER BY id DESC
        LIMIT 1
        ");

        $linha = mysql_fetch_array($sql);

        return array($linha['id'],$linha['NU_CLITRATADO'],$linha['SEGSTART_DATE']);

    }

    

}
















function verificaRepIntervalo($super,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT repetidas.login,
        SUM(atd) as ATD,
        SUM(rep_24) as rep,
        round(100*(SUM(rep_24)/SUM(atd)),2) as p,
        super,
        op,
        bd.login as login_op
        FROM `repetidas`
        INNER JOIN bd ON bd.login = repetidas.login
        WHERE super = '$super'
        AND dt_rep BETWEEN CURRENT_DATE()-3 AND CURRENT_DATE()-2
        AND MONTH(dt_rep) = MONTH(CURRENT_DATE())
        AND YEAR(dt_rep) = YEAR(CURRENT_DATE())
        GROUP BY repetidas.login
        ORDER BY p $tipo
        LIMIT 1
    ");

    $linha = mysql_fetch_array($sql);

    return array($linha['p'],$linha['op'],$linha['login_op']);

}


function verificaTransf($super,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT transf.login,
        SUM(atd) as atd,
        SUM(transf_int) as ti,
        SUM(transf_ext) as te,
        round(100*(SUM(transf_int))/SUM(atd),2) as tiPerc,
        round(100*(SUM(transf_ext))/SUM(atd),2) as tePerc,
        round(100*(SUM(transf_int)+SUM(transf_ext))/SUM(atd),2) as p,
        super,
        op,
        bd.login as login_op
        FROM `transf`
        INNER JOIN bd ON bd.login2 = transf.login
        WHERE super = '$super'
        AND MONTH(data) = MONTH(CURRENT_DATE())
        AND YEAR(data) = YEAR(CURRENT_DATE())
        GROUP BY transf.login
        ORDER BY p $tipo
        LIMIT 1
    ");

    $linha = mysql_fetch_array($sql);

    return array($linha['p'],$linha['op'],$linha['tiPerc'],$linha['tePerc'],$linha['login_op']);

}



function verificaRecorrencia($super,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT recorrencia.login,
        SUM(entrante) as atd,
        SUM(recorrente) as recorrente,
        ROUND(SUM(recorrente)/SUM(entrante),2)*100 as p,
        super,
        op,
        bd.login as login_op
        FROM `recorrencia`
        INNER JOIN bd ON bd.login2 = recorrencia.login
        WHERE super = '$super'
        AND MONTH(data) = MONTH(CURRENT_DATE())
        AND YEAR(data) = YEAR(CURRENT_DATE())
        GROUP BY recorrencia.login
        ORDER BY p $tipo
        LIMIT 1
    ");

    $linha = mysql_fetch_array($sql);

    return array($linha['p'],$linha['op'],$linha['login_op']);

}


function verificarTicket($super,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT ticket_medio.CRIADO_POR,
        SUM(qtd) as qtde,
        SUM(ajuste) as ajuste,
        ROUND(SUM(ajuste)/SUM(qtd),2)*100 as p,
        super,
        op,
        bd.login as login_op
        FROM `ticket_medio`
        INNER JOIN bd ON bd.login2 = ticket_medio.CRIADO_POR
        WHERE super = '$super'
        AND MONTH(DATA_DE_ABERTURA) = MONTH(CURRENT_DATE())
        AND YEAR(DATA_DE_ABERTURA) = YEAR(CURRENT_DATE())
        GROUP BY ticket_medio.CRIADO_POR
        ORDER BY p $tipo
        LIMIT 1
    ");

    $linha = mysql_fetch_array($sql);

    return array($linha['p'],$linha['op'],$linha['login_op']);

}


function verificarIndevidos($super,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT indevidos.login2,
        SUM(indev) as indevido,
        SUM(contestado) as contestado,
        ROUND(SUM(indev)/SUM(contestado),2)*100 as p,
        super,
        op,
        bd.login as login_op
        FROM `indevidos`
        INNER JOIN bd ON bd.login2 = indevidos.login2
        WHERE super = '$super'
        AND MONTH(DATA_DE_ABERTURA) = MONTH(CURRENT_DATE())
        AND YEAR(DATA_DE_ABERTURA) = YEAR(CURRENT_DATE())
        GROUP BY indevidos.login2
        ORDER BY p $tipo
        LIMIT 1
    ");

    $linha = mysql_fetch_array($sql);

    return array($linha['p'],$linha['op'],$linha['login_op']);

}




function verificaTransfIntervalo($super,$tipo) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT transf.login,
        SUM(atd) as atd,
        SUM(transf_int) as ti,
        SUM(transf_ext) as te,
        round(100*(SUM(transf_int))/SUM(atd),2) as tiPerc,
        round(100*(SUM(transf_ext))/SUM(atd),2) as tePerc,
        round(100*(SUM(transf_int)+SUM(transf_ext))/SUM(atd),2) as p,
        super,
        op,
        bd.login as login_op
        FROM `transf`
        INNER JOIN bd ON bd.login2 = transf.login
        WHERE super = '$super'
        AND data BETWEEN CURRENT_DATE()-2 AND CURRENT_DATE()-1
        AND MONTH(data) = MONTH(CURRENT_DATE())
        AND YEAR(data) = YEAR(CURRENT_DATE())
        GROUP BY transf.login
        ORDER BY p $tipo
        LIMIT 1
    ");

    $linha = mysql_fetch_array($sql);

    return array($linha['p'],$linha['op'],$linha['tiPerc'],$linha['tePerc'],$linha['login_op']);

}


function maiorDataTransf() {//RETORNAR A MAIOR DATA NO BANCO.
    include "config2.php";
    $sql = mysql_query("            
        SELECT max(data) as d 
        from transf
        WHERE MONTH(data) = MONTH(CURRENT_DATE())
        AND YEAR(data) = YEAR(CURRENT_DATE());
    ");

    $linha = mysql_fetch_array($sql);

    return implode("/", array_reverse(explode("-",$linha['d'])));

}


function maiorDataRecorrencia() {//RETORNAR A MAIOR DATA NO BANCO.
    include "config2.php";
    $sql = mysql_query("            
        SELECT max(data) as d 
        from recorrencia
        WHERE MONTH(data) = MONTH(CURRENT_DATE())
        AND YEAR(data) = YEAR(CURRENT_DATE());
    ");

    $linha = mysql_fetch_array($sql);

    return implode("/", array_reverse(explode("-",$linha['d'])));

}


function maiorDataTicket() {//RETORNAR A MAIOR DATA NO BANCO.
    include "config2.php";
    $sql = mysql_query("            
        SELECT max(DATA_DE_ABERTURA) as d 
        from ticket_medio
        WHERE MONTH(DATA_DE_ABERTURA) = MONTH(CURRENT_DATE())
        AND YEAR(DATA_DE_ABERTURA) = YEAR(CURRENT_DATE());
    ");

    $linha = mysql_fetch_array($sql);

    return implode("/", array_reverse(explode("-",$linha['d'])));

}

function maiorDataIndevidos() {//RETORNAR A MAIOR DATA NO BANCO.
    include "config2.php";
    $sql = mysql_query("            
        SELECT max(DATA_DE_ABERTURA) as d 
        from indevidos
        WHERE MONTH(DATA_DE_ABERTURA) = MONTH(CURRENT_DATE())
        AND YEAR(DATA_DE_ABERTURA) = YEAR(CURRENT_DATE());
    ");

    $linha = mysql_fetch_array($sql);

    return implode("/", array_reverse(explode("-",$linha['d'])));

}


function maiorDataRep() {//RETORNAR A MAIOR DATA NO BANCO.
    include "config2.php";
    $sql = mysql_query("            
        SELECT max(dt_rep) as d 
        from repetidas
        WHERE MONTH(dt_rep) = MONTH(CURRENT_DATE())
        AND YEAR(dt_rep) = YEAR(CURRENT_DATE());
    ");

    $linha = mysql_fetch_array($sql);

    return implode("/", array_reverse(explode("-",$linha['d'])));

}


function dadosAlterarRep($id) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT * 
        FROM `tab_rep`
        WHERE id = '$id'
    ");
    $total = mysql_num_rows($sql);

    $linha = mysql_fetch_array($sql);

    return array($linha['dt_analise'],$linha['monitor'],$linha['binado'],$linha['dt_hora_ligacao'],$linha['motivo_1'],$linha['obs1'],$linha['causa1'],$linha['subcausa1'],$linha['erro_detalhamento'],$linha['operador_pos_atendimento'],$linha['dt_hora_ligacao2'],$linha['motivo_2'],$linha['obs2'],$linha['mesmo_motivo'],$linha['acao_adotada'],$linha['obs_geral'],$linha['tipo'],$total);

}


function dadosAlterarTransf($id) {//FUNÇÃO UTILIZADA PARA TRAZER QUEM É O MELHOR E O PIOR OPERADOR
    include "config2.php";
    $sql = mysql_query("
        SELECT * 
        FROM `tab_transf`
        WHERE id = '$id'
    ");
    $total = mysql_num_rows($sql);

    $linha = mysql_fetch_array($sql);

    return array($linha['binado'],$linha['dt_hora'],$linha['produto'],$linha['pn'],$linha['ml'],$linha['obs'],$linha['st'],$linha['s_indevida'],$linha['check_list'],$linha['tma'],$linha['grupo_t'],$linha['qual_grupo'],$linha['qual_erro'],$linha['acao_adotada'],$linha['obs_geral'],$total);

}




*/





?>