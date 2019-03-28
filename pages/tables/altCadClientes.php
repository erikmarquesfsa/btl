<?php
session_start();
include "../../_scripts/Functions.php";
$login = $_SESSION['login'];
$acess = dadosAcessso(dadosLogin($login));
$nome= dadosUsuario($login);
include "../../_scripts/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BLT ÁGUA POTÁVEL</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include "../../header.php"; ?>
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          
          <?php include "../../menu.php"; //arquivo de menu ?>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
            Alterar Cadastro de Clientes
            <small>&nbsp;</small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
        </section>

        <?php
          $id = $_GET['id'];
          $sql = "
            SELECT *
            FROM cad_clientes
            WHERE id = '$id'";
            $query = $mysqli->query($sql);
            $linha = $query->fetch_array();
            $nome = $linha['nome'];
            $situacao = $linha['situacao'];
            $cnpj = $linha['cnpj'];
            $cep = $linha['cep'];
            $estado = $linha['estado'];
            $rua = $linha['rua'];
            $n = $linha['n'];
            $bairro = $linha['bairro'];
            $cidade = $linha['cidade'];
            $complemento = $linha['complemento'];
            $telefones = $linha['telefones'];
            $email_prin = $linha['email_prin'];
            $email_sec = $linha['email_sec'];
            $resp_compras = $linha['resp_compras'];
            $tel_compras = $linha['tel_compras'];
            $resp_financeiro = $linha['resp_financeiro'];
            $tel_financeiro = $linha['tel_financeiro'];
            $resp_manut = $linha['resp_manut'];
            $tel_manut = $linha['tel_manut'];
            $tp_cobranca = $linha['tp_cobranca'];
            $ativo = $linha['ativo'];          
            
            
        ?>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <!--<form name="form1" method="post" action="../../_scripts/salvar.php">-->
                  <form id="formulario" method="post" action="../../_scripts/alterar.php" role="form">
                  <input type="hidden" name="login" value="user">
                  <input type="hidden" name="tp" value="cad_clientes">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">

                  <table class="table" style="box-shadow: 0px 0px 1px #fff;border-radius: 3px;">

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Razão Social / Fantasia:</td>
                    <td colspan="3">
                      <input type="text" style="border-radius: 3px" value="<?php echo $nome; ?>" required="" class="form-control" name="cp1">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Situação:</td>
                    <td colspan="3">
                      <input type="text" style="border-radius: 3px" value="<?php echo $situacao; ?>" required="" class="form-control" name="cp2">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">CNPJ:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo $cnpj; ?>" required="" class="form-control" name="cp3">
                    </td>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Cep:</td>
                    <td>
                      <input type="number" style="border-radius: 3px" value="<?php echo $cep; ?>" id="cep" onblur="pesquisacep(this.value);" required="" class="form-control" name="cp4">
                      <a href="addCepCliente.php?id=<?php echo $id; ?>"><i class="fa fa-plus-square-o pull-right"></i></a>
                    </td>

                    <td style="vertical-align: middle;text-align: center">Estado:</td>
                    <td>
                      <input type="text" style="border-radius: 3px;vertical-align: middle;" value="<?php echo $estado; ?>" id="uf" required="" class="form-control" name="cp5">
                    </td>
                  </tr>

                   <tr>
                    <td style="vertical-align: middle;text-align: center">Rua:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo utf8_encode($rua); ?>" id="rua" required="" class="form-control" name="cp6">
                    </td>

                    <td style="vertical-align: middle;text-align: center">Nº:</td>
                    <td>
                      <input type="number" style="border-radius: 3px" value="<?php echo $n; ?>" required="" class="form-control" name="cp7">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Bairro:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo $bairro; ?>" id="bairro" required="" class="form-control" name="cp8">
                    </td>

                    <td style="vertical-align: middle;text-align: center">Cidade:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo $cidade; ?>" id="cidade" required="" class="form-control" name="cp9">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Complemento:</td>
                    <td colspan="3">
                      <input type="text" style="border-radius: 3px" value="<?php echo utf8_encode($complemento); ?>" required="" class="form-control" name="cp10">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Telefones:</td>
                    <td colspan="3">
                      <input type="text" style="border-radius: 3px" value="<?php echo $telefones; ?>" required="" class="form-control" name="cp11">
                      <a href="addTel.php?id=<?php echo $id; ?>"><i class="fa fa-plus-square-o pull-right"></i></a>
                    </td>
                  </tr>

                   <tr>
                    <td style="vertical-align: middle;text-align: center">E-mail Principal:</td>
                    <td>
                      <input type="email" style="border-radius: 3px" value="<?php echo $email_prin; ?>" required="" class="form-control" name="cp12">
                    </td>

                    <td style="vertical-align: middle;text-align: center">E-mail Secundário:</td>
                    <td>
                      <input type="email" style="border-radius: 3px" value="<?php echo $email_sec; ?>" required="" class="form-control" name="cp13">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Responsável Setor de Compras:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo $resp_compras; ?>"  required="" class="form-control" name="cp14">
                    </td>

                    <td style="vertical-align: middle;text-align: center">Telefone:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo $tel_compras; ?>" required="" class="form-control" name="cp15">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Responsável Setor Financeiro:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo $resp_financeiro; ?>" required="" class="form-control" name="cp16">
                    </td>

                    <td style="vertical-align: middle;text-align: center">Telefone:</td>
                    <td>
                      <input type="text" style="border-radius: 3px"  value="<?php echo $tel_financeiro; ?>" required="" class="form-control" name="cp17">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Responsável Setor de Manutenção:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" value="<?php echo $resp_manut; ?>" required="" class="form-control" name="cp18">
                    </td>

                    <td style="vertical-align: middle;text-align: center">Telefone:</td>
                    <td>
                      <input type="text" style="border-radius: 3px" required="" value="<?php echo $tel_manut; ?>" class="form-control" name="cp19">
                    </td>
                  </tr>

                  <tr>
                    <td style="vertical-align: middle;text-align: center">Tipo de Cobrança:</td>
                    <td>
                      <select name="cp20" class="form-control">
                        <option value="<?php echo utf8_encode($tp_cobranca); ?>"><?php echo utf8_encode($tp_cobranca); ?></option>
                        <option value="m³">m³</option>
                        <option value="Entrega">Entrega</option>
                      </select>
                    </td>

                    <td style="vertical-align: middle;text-align: center">Ativo:</td>
                    <td>
                      <select name="cp21" class="form-control">
                        <option value="<?php echo utf8_encode($ativo); ?>"><?php echo utf8_encode($ativo); ?></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td style="text-align: center" colspan="4">
                    <input type="submit" value="Alterar" class="btn btn-primary">
                    </td>
                  </tr>

                  </table>

                  </form>

                </div><!-- /.box-body -->
              </div><!-- /.box -->


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Endereço Extra Cadastrado
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="text-align: center">CEP</th> 
                        <th style="text-align: center">Estado</th> 
                        <th style="text-align: center">Rua</th> 
                        <th style="text-align: center">Número</th> 
                        <th style="text-align: center">Bairro</th> 
                        <th style="text-align: center">Cidade</th> 
                        <th style="text-align: center">Complemento</th> 
                        <th>&nbsp;</th>                    
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                          $sql = "SELECT *
                          FROM cad_endereco
                          WHERE cod_cliente = '$id'
                          ORDER BY id ASC";
                          $query = $mysqli->query($sql);
                          while ($dados2 = $query->fetch_array()) {
                      ?>

                      <tr>
                        <td style="text-align: center"><?php echo  utf8_encode($dados2['cep']);?></td> 
                        <td style="text-align: center"><?php echo  utf8_encode($dados2['estado']);?></td> 
                        <td style="text-align: center"><?php echo  utf8_encode($dados2['rua']);?></td> 
                        <td style="text-align: center"><?php echo  utf8_encode($dados2['estado']);?></td> 
                        <td style="text-align: center"><?php echo  utf8_encode($dados2['bairro']);?></td> 
                        <td style="text-align: center"><?php echo  utf8_encode($dados2['cidade']);?></td> 
                        <td style="text-align: center"><?php echo  utf8_encode($dados2['complemento']);?></td>

                        <td style="text-align: center">
                          <form id="formulario2" method="post" action="../../_scripts/delet.php" role="form">
                            <input type="hidden" name="id2" value="<?php echo $dados2['id'];?>">
                            <input type="hidden" name="tp2" value="endereco_extra">
                              <button type="submit" value="submit" style="border: 0px; background: none">
                                <i style="color: red" class="fa fa-close"></i>
                              </button>
                          </form>
                        </td> 

                      </tr>

                    <?php } ?>

                  </tbody>
                  <tfoot>
                    <tr>
                        <th style="text-align: center">CEP</th> 
                        <th style="text-align: center">Estado</th> 
                        <th style="text-align: center">Rua</th> 
                        <th style="text-align: center">Número</th> 
                        <th style="text-align: center">Bairro</th> 
                        <th style="text-align: center">Cidade</th> 
                        <th style="text-align: center">Complemento</th> 
                        <th>&nbsp;</th>    
                    </tr>
                  </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->




              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Telefones Extras Cadastrados
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="text-align: center">Telefone</th> 
                        <th>&nbsp;</th>                    
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                          $sql = "SELECT *
                          FROM cad_tel
                          WHERE cod_cliente = '$id'
                          ORDER BY id ASC";
                          $query = $mysqli->query($sql);
                          while ($dados3 = $query->fetch_array()) {
                      ?>

                      <tr>
                        <td style="text-align: center"><?php echo  utf8_encode($dados3['telefone']);?></td> 

                        <td style="text-align: center">
                          <form id="formulario22" method="post" action="../../_scripts/delet.php" role="form">
                            <input type="hidden" name="id3" value="<?php echo $dados3['id'];?>">
                            <input type="hidden" name="tp3" value="tel_extra">
                              <button type="submit" value="submit" style="border: 0px; background: none">
                                <i style="color: red" class="fa fa-close"></i>
                              </button>
                          </form>
                        </td> 

                      </tr>

                    <?php } ?>

                  </tbody>
                  <tfoot>
                    <tr>
                        <th style="text-align: center">Telefone</th>
                        <th>&nbsp;</th>    
                    </tr>
                  </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2019 <a href="#">BLT</a>.</strong> Todos os Direitos Reservardos.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script src="http://malsup.github.io/min/jquery.form.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <script type="text/javascript">
        $(function ($) {
            // Quando enviado o formulário            
            $('#formulario').on('submit', function () {
               var i = 1;
                // Armazenando informações do formulário em variáveis
                var cp1 = $("input[name=cp1]").val();
                var cp2 = $("input[name=cp2]").val();
                var cp3 = $("input[name=cp3]").val();
                var cp4 = $("input[name=cp4]").val();
                var cp5 = $("input[name=cp5]").val();
                var cp6 = $("input[name=cp6]").val();
                var cp7 = $("input[name=cp7]").val();
                var cp8 = $("input[name=cp8]").val();
                var cp9 = $("input[name=cp9]").val();
                var cp10 = $("input[name=cp10]").val();
                var cp11 = $("input[name=cp11]").val();
                var cp12 = $("input[name=cp12]").val();
                var cp13 = $("input[name=cp13]").val();
                var cp14 = $("input[name=cp14]").val();
                var cp15 = $("input[name=cp15]").val();
                var cp16 = $("input[name=cp16]").val();
                var cp17 = $("input[name=cp17]").val();
                var cp18 = $("input[name=cp18]").val();
                var cp19 = $("input[name=cp19]").val();
                var cp20 = $("select[name=cp20]").val();
                var cp21 = $("select[name=cp21]").val();
                var tp = $("input[name=tp]").val();
                var login = $("input[name=login]").val();
                var id = $("input[name=id]").val();
                // Fazendo requisição AJAX
                $.post(this.action, {cp1: cp1, cp2: cp2, cp3: cp3, cp4: cp4, cp5: cp5, cp6: cp6, cp7: cp7, cp8: cp8, cp9: cp9, cp10: cp10, cp11: cp11, cp12: cp12, cp13: cp13, cp14: cp14, cp15: cp15, cp16: cp16, cp17: cp17, cp18: cp18, cp19: cp19, cp20: cp20, cp21: cp21, tp: tp, login: login, id: id}, function (resposta) {
                    console.log(resposta);
                    var i=0;
                    swal("", "Alterado com Sucesso", "success");   
                    $('#formulario')[0].reset();    
                    if(i==0){
                      setTimeout('location.reload();', 1000);
                    }       
                });
                // Retorna FALSE para que o formulário não seja enviado de forma convencional
                return false;

            }); 
             
        });

    </script>

    <script type="text/javascript">
        $(function ($) {
            // Quando enviado o formulário            
            $('#formulario2').on('submit', function () {
               var i = 1;
                // Armazenando informações do formulário em variáveis
                var id = $("input[name=id2]").val();
                var tp = $("input[name=tp2]").val();
                // Fazendo requisição AJAX
                $.post(this.action, {id: id, tp: tp}, function (resposta) {
                    console.log(resposta);
                    var i=0;
                    swal("", "Deletado com Sucesso", "success");     
                    if(i==0){
                      setTimeout('location.reload();', 1000);
                    }       
                });
                // Retorna FALSE para que o formulário não seja enviado de forma convencional
                return false;

            }); 
             
        });

    </script>

    <script type="text/javascript">
        $(function ($) {
            // Quando enviado o formulário            
            $('#formulario22').on('submit', function () {
               var i = 1;
                // Armazenando informações do formulário em variáveis
                var id = $("input[name=id3]").val();
                var tp = $("input[name=tp3]").val();
                // Fazendo requisição AJAX
                $.post(this.action, {id: id, tp: tp}, function (resposta) {
                    console.log(resposta);
                    var i=0;
                    swal("", "Deletado com Sucesso", "success");     
                    if(i==0){
                      setTimeout('location.reload();', 1000);
                    }       
                });
                // Retorna FALSE para que o formulário não seja enviado de forma convencional
                return false;

            }); 
             
        });

    </script>


    <script>
      $(function () {

        $('#example1').DataTable( {



         "language": {
        "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
      },
      "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
          }
      }






    } );


    $('#example3').DataTable( {



         "language": {
        "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
      },
      "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
          }
      }






    } );  


  




        $("#example11").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

    




    
  </body>
</html>
