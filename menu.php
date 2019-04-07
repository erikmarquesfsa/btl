<?php
//session_start();
//$login = 'ecarmo';
$login = $_SESSION['login'];
  if($login==""){

    echo "<script language='javascript'>
    alert('Ops! Por favor, acesse o sistema novamente. $login')
    window.location='../../index.php';
    </script>";
  }
$base_url = 'http://localhost/btl/btl';
?>

<!-- Sidebar user panel -->

<!--
<div class="user-panel">
  <div class="pull-left image">
    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
  </div>
  <div class="pull-left info">
    <p>Alexander Pierce</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>
< !-- search form ->
<form action="#" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
  </div>
</form> -->
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
  <li class="header">MENU</li>

<?php if($acess[0]=="SIM"){ ?>

  <li class="active treeview">
    <a href="#">
      <i class="fa fa-table"></i> <span>Cadastros</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadUsuarios.php"><i class="fa fa-circle-o"></i>Usuários</a></li>
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadVeiculos.php"><i class="fa fa-circle-o"></i> Veículos</a></li>
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadAgua.php"><i class="fa fa-circle-o"></i> Tipos de Água</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i>Adicionais na Água</a></li>
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadServico.php"><i class="fa fa-circle-o"></i> Serviços</a></li>
      <!--<li><a href="<?php echo $base_url; ?>/pages/tables/cadUniMedida.php"><i class="fa fa-circle-o"></i> Unidades de Medidas</a></li>-->
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadPagamento.php"><i class="fa fa-circle-o"></i> Condições de Pagamento</a></li>
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadTanque.php"><i class="fa fa-circle-o"></i> Cadastro de Tanques</a></li>
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadClientes.php"><i class="fa fa-circle-o"></i> Clientes</a></li>
      <!--<li><a href="<?php echo $base_url; ?>/pages/tables/cadClientesAdicionais.php"><i class="fa fa-circle-o"></i> Adicionais de Clientes</a></li>-->
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadMotorista.php"><i class="fa fa-circle-o"></i> Motoristas</a></li>
    </ul>
  </li>

<?php } ?>

 
<?php if($acess[1]=="SIM"){ ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-filter"></i> <span>Programação</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadPoco.php"><i class="fa fa-circle-o"></i> Poços</a></li>
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadLeituras.php"><i class="fa fa-circle-o"></i> Leituras</a></li>
    </ul>
  </li>
<?php } ?>

<?php if($acess[2]=="SIM"){ ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-gear"></i> <span>Processos</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Pedidos</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Controle Geral</a></li>
    </ul>
  </li>
<?php } ?>

<?php if($acess[3]=="SIM"){ ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-print"></i> <span>CRMS</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Controle</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Impressão</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Impressos</a></li>
    </ul>
  </li>
<?php } ?>

<?php if($acess[4]=="SIM"){ ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-industry"></i> <span>VAZÃO</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i>Teste</a></li>
    </ul>
  </li>
<?php } ?>

<?php if($acess[5]=="SIM"){ ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Relatórios</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Quantidades de carradas</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Metros cúbicos</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Entrega em reais</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> KM rodados</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Preço por km/rodado</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Horas trabalhadas</a></li>
    </ul>
  </li>
<?php } ?>

<?php if($acess[6]=="SIM"){ ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-lock"></i> <span>Segurança</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Usuários</a></li>
      <li><a href="<?php echo $base_url; ?>/pages/tables/cadPerfisAcesso.php"><i class="fa fa-circle-o"></i> Perfis de Acesso</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Alterar senha</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Usuários logados</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Logs de Acesso</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Recados/Avisos</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Justificativas</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Prazos</a></li>
    </ul>
  </li>
<?php } ?>
<!--
  <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Layout Options</span>
      <span class="label label-primary pull-right">4</span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
      <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
      <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
      <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
    </ul>
  </li>
  <li>
    <a href="pages/widgets.html">
      <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Charts</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
      <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
      <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
      <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i>
      <span>UI Elements</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
      <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
      <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
      <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
      <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
      <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-edit"></i> <span>Forms</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
      <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
      <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-table"></i> <span>Tables</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
      <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
    </ul>
  </li>
  <li>
    <a href="pages/calendar.html">
      <i class="fa fa-calendar"></i> <span>Calendar</span>
      <small class="label pull-right bg-red">3</small>
    </a>
  </li>
  <li>
    <a href="pages/mailbox/mailbox.html">
      <i class="fa fa-envelope"></i> <span>Mailbox</span>
      <small class="label pull-right bg-yellow">12</small>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-folder"></i> <span>Examples</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
      <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
      <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
      <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
      <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
      <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
      <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
      <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-share"></i> <span>Multilevel</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      <li>
        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
    </ul>
  </li>
  <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
  <li class="header">LABELS</li>
  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
</ul>

-->