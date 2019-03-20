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

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
         <span class="logo-mini"><b>B</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <!--<span class="logo-lg"><b>Admin</b>LTE</span>-->
          <span class="logo-lg"><img src="../../images/logo3.png" width="50%" height="50%"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
             
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Fulano de Tal - Admnistrador
                      <small>Cadastro realizado em Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!--<div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>-->
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--<li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>-->
            </ul>
          </div>
        </nav>
      </header>
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
            &nbsp;
            <small>&nbsp;</small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Perfil Cadastrado
                  <a href="../../exports/clientes.php"><img src="../../images/exccel.png" width="20" height="20"></a>
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="text-align: center">Nome</th>
                        <th style="text-align: center">Cadastro</th>                        
                        <th style="text-align: center">Programação</th>
                        <th style="text-align: center">Processos</th> 
                        <th style="text-align: center">CRMS</th>
                        <th style="text-align: center">Vazão</th>
                        <th style="text-align: center">Relatórios</th>
                        <th style="text-align: center">Segurança</th>
                        <th>&nbsp;</th>     
                        <th>&nbsp;</th>               
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                          $sql = "SELECT 
                          cad_clientes.id, 
                          cad_clientes.nome, 
                          cad_perfis.cadastro, 
                          cad_perfis.programacao, 
                          cad_perfis.processos, 
                          cad_perfis.crms, 
                          cad_perfis.vazao, 
                          cad_perfis.relatorios, 
                          cad_perfis.seguranca
                          FROM cad_clientes
                          LEFT JOIN cad_perfis ON cad_perfis.usuario = cad_clientes.id
                          ORDER BY cad_clientes.nome ASC";
                          $query = $mysqli->query($sql);
                          while ($dados = $query->fetch_array()) {
                      ?>

                      <tr>
                        <form id="formulario3" method="post" action="../../_scripts/atualizarPerfil.php" role="form">
                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">

                        <td style="text-align: center"><?php echo  utf8_encode($dados['nome']);?></td> 
                        <td style="text-align: center">
                          <select name="cp1" class="form-control">
                          <?php if(!empty($dados['cadastro'])){ ?>
                            <option value="<?php echo $dados['cadastro']; ?>"><?php echo $dados['cadastro']; ?></option>
                          <?php } ?>
                            <option value="NÃO">NÃO</option>
                            <option value="SIM">SIM</option>
                          </select>
                        </td> 
                        <td style="text-align: center">
                          <select name="cp2" class="form-control">
                          <?php if(!empty($dados['programacao'])){ ?>
                            <option value="<?php echo $dados['programacao']; ?>"><?php echo $dados['programacao']; ?></option>
                          <?php } ?>
                            <option value="NÃO">NÃO</option>
                            <option value="SIM">SIM</option>
                          </select>
                        </td> 
                        <td style="text-align: center">
                          <select name="cp3" class="form-control">
                          <?php if(!empty($dados['processos'])){ ?>
                            <option value="<?php echo $dados['processos']; ?>"><?php echo $dados['processos']; ?></option>
                          <?php } ?>
                            <option value="NÃO">NÃO</option>
                            <option value="SIM">SIM</option>
                          </select>
                        </td>  
                        <td style="text-align: center">
                          <select name="cp4" class="form-control">
                          <?php if(!empty($dados['crms'])){ ?>
                            <option value="<?php echo $dados['crms']; ?>"><?php echo $dados['crms']; ?></option>
                          <?php } ?>
                            <option value="NÃO">NÃO</option>
                            <option value="SIM">SIM</option>
                          </select>
                        </td> 
                        <td style="text-align: center">
                          <select name="cp5" class="form-control">
                          <?php if(!empty($dados['vazao'])){ ?>
                            <option value="<?php echo $dados['vazao']; ?>"><?php echo $dados['vazao']; ?></option>
                          <?php } ?>
                            <option value="NÃO">NÃO</option>
                            <option value="SIM">SIM</option>
                          </select>
                        </td> 
                        <td style="text-align: center">
                          <select name="cp6" class="form-control">
                          <?php if(!empty($dados['relatorios'])){ ?>
                            <option value="<?php echo $dados['relatorios']; ?>"><?php echo $dados['relatorios']; ?></option>
                          <?php } ?>
                            <option value="NÃO">NÃO</option>
                            <option value="SIM">SIM</option>
                          </select>
                        </td> 
                        <td style="text-align: center">
                          <select name="cp7" class="form-control">
                          <?php if(!empty($dados['seguranca'])){ ?>
                            <option value="<?php echo $dados['seguranca']; ?>"><?php echo $dados['seguranca']; ?></option>
                          <?php } ?>
                            <option value="NÃO">NÃO</option>
                            <option value="SIM">SIM</option>
                          </select>
                        </td>
                        <td style="text-align: center">                          
                              <button type="submit" value="submit" style="border: 0px; background: none">
                                <i style="color: green" class="fa fa-refresh"></i>
                              </button>
                          </form>
                        </td>
                        <td style="text-align: center">
                          <form id="formulario2" method="post" action="../../_scripts/delet.php" role="form">
                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                            <input type="hidden" name="tp" value="perfil_cad">
                              <button type="submit" value="submit" style="border: 0px; background: none">
                                <i style="color: red" class="fa fa-close"></i>
                              </button>
                          </form>
                        </td>
                      </tr>

                    <?php }  ?>

                  </tbody>
                  <tfoot>
                    <tr>
                        <th style="text-align: center">Nome</th>
                        <th style="text-align: center">Cadastro</th>                        
                        <th style="text-align: center">Programação</th>
                        <th style="text-align: center">Processos</th> 
                        <th style="text-align: center">CRMS</th>
                        <th style="text-align: center">Vazão</th>
                        <th style="text-align: center">Relatórios</th>
                        <th style="text-align: center">Segurança</th>
                        <th>&nbsp;</th>  
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
                // Fazendo requisição AJAX
                $.post(this.action, {cp1: cp1, cp2: cp2, cp3: cp3, cp4: cp4, cp5: cp5, cp6: cp6, cp7: cp7, cp8: cp8, cp9: cp9, cp10: cp10, cp11: cp11, cp12: cp12, cp13: cp13, cp14: cp14, cp15: cp15, cp16: cp16, cp17: cp17, cp18: cp18, cp19: cp19, cp20: cp20, cp21: cp21, tp: tp, login: login}, function (resposta) {
                    console.log(resposta);
                    var i=0;
                    swal("", "Adicionado com Sucesso", "success");   
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
                var id = $("input[name=id]").val();
                var tp = $("input[name=tp]").val();
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
            $('#formulario3').on('submit', function () {
               var i = 1;
                // Armazenando informações do formulário em variáveis
                var id = $("input[name=id]").val();
                var cp1 = $("select[name=cp1]").val();
                var cp2 = $("select[name=cp2]").val();
                var cp3 = $("select[name=cp3]").val();
                var cp4 = $("select[name=cp4]").val();
                var cp5 = $("select[name=cp5]").val();
                var cp6 = $("select[name=cp6]").val();
                var cp7 = $("select[name=cp7]").val();
                // Fazendo requisição AJAX
                $.post(this.action, {id: id, cp1: cp1, cp2: cp2, cp3: cp3, cp4: cp4, cp5: cp5, cp6: cp6, cp7: cp7}, function (resposta) {
                    console.log(resposta);
                    var i=0;
                    swal("", "Atualizado com Sucesso", "success");     
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


    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            //document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            //document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                //document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

  </body>
</html>
