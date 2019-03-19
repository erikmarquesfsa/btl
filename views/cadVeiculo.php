
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/af-2.3.2/b-1.5.4/b-print-1.5.4/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/af-2.3.2/b-1.5.4/b-print-1.5.4/datatables.min.js"></script>

<script type="text/javascript">
$(function () {

    $('#example').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         true,



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


    



} );


</script>


<section class="content-header">
          <h1>
            Formulário de Cadastro de Veículos
            <small>&nbsp;</small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">

        <div class="box box-primary">
          <div class="box-header with-border">

          <!--<div style="background: #fff;padding: 0px;vertical-align: middle;text-align: center"> -->           
            
          <form name="form1" method="post" action="_scripts/salvar.php">
            <input type="hidden" name="login" value="<?php echo $login; ?>">
            <input type="hidden" name="tp" value="veiculo">

            <table class="table" style="box-shadow: 0px 0px 1px #fff;border-radius: 3px;">

              <tr>
                <td style="vertical-align: middle;text-align: center">Placa:</td>
                <td colspan="3">
                  <input type="text" style="border-radius: 3px" required="" class="form-control" name="cp1">
                </td>
              </tr>

              <tr>
                <td style="vertical-align: middle;text-align: center">Renavan:</td>
                <td>
                  <input type="number" style="border-radius: 3px" required="" class="form-control" name="cp2">
                </td>

                <td style="vertical-align: middle;text-align: center">Tipo:</td>
                <td>
                  <select name="cp3" class="form-control">
                    <option value="-">-</option>
                     <?php
                      $sql = "SELECT *
                      FROM dados_forms
                      WHERE tipo = 'tipo_veic'
                      ORDER BY item ASC";
                      $query = $mysqli->query($sql);
                      while ($dados = $query->fetch_array()) {
                      ?>
                      <option value="<?php echo utf8_encode($dados['item']);?>"><?php echo utf8_encode($dados['item']);?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>


               <tr>
                <td style="vertical-align: middle;text-align: center">Marca:</td>
                <td>
                  <select name="cp4" class="form-control">
                    <option value="-">-</option>
                    <?php
                      $sql = "SELECT *
                      FROM dados_forms
                      WHERE tipo = 'marca'
                      ORDER BY item ASC";
                      $query = $mysqli->query($sql);
                      while ($dados = $query->fetch_array()) {
                      ?>
                      <option value="<?php echo $dados['item'];?>"><?php echo $dados['item'];?></option>
                    <?php } ?>
                  </select>
                </td>

                <td style="vertical-align: middle;text-align: center">Modelo:</td>
                <td>
                  <input type="text" style="border-radius: 3px" required="" class="form-control" name="cp5">
                </td>
              </tr>

              <tr>
                <td style="vertical-align: middle;text-align: center">Ano:</td>
                <td>
                  <input type="number" style="border-radius: 3px" required="" class="form-control" name="cp6">
                </td>

                <td style="vertical-align: middle;text-align: center">Chassi:</td>
                <td>
                  <input type="text" style="border-radius: 3px" required="" class="form-control" name="cp7">
                </td>
              </tr>


               <tr>
                <td style="vertical-align: middle;text-align: center">Cor:</td>
                <td>
                  <input type="text" style="border-radius: 3px" required="" class="form-control" name="cp8">
                </td>

                <td style="vertical-align: middle;text-align: center">Km:</td>
                <td>
                  <input type="text" style="border-radius: 3px" required="" class="form-control" name="cp9">
                </td>
              </tr>
            

            <tr>
              <td style="text-align: center" colspan="4">
                <input type="submit" value="Salvar" class="btn btn-primary">
              </td>
            </tr>

            </table>

          </form>

          </div>
        </div>

        </section>


<!-- CADASTROS REALIZADOS -->

      <section class="content-header">
          <h1>
            Cadastros Disponíveis 
            <a href="exports/baixarexcel.php"><img src="images/exccel.png" width="20" height="20"></a>
            <small>&nbsp;</small>
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">

        <div class="box box-primary">
          <div class="box-header with-border">

          <!--<div style="background: #fff;padding: 0px;vertical-align: middle;text-align: center"> -->           

          <table  style="box-shadow: 0px 0px 1px #fff;border-radius: 3px;" id="example" class="table display">

            <thead>
              <tr>
                <th>Placa</th> 
                <th>Renavan</th>  
                <th>Tipo</th>  
                <th>Marca</th>  
                <th>Modelo</th>  
                <th>Ano</th>   
                <th>Chassi</th>   
                <th>Cor</th>   
                <th>Km</th>
                <th>&nbsp;</th>                 
              </tr>
            </thead>

            <tbody>
              <?php
                  $sql = "SELECT *
                  FROM cad_veiculo
                  ORDER BY marca ASC";
                  $query = $mysqli->query($sql);
                  while ($dados = $query->fetch_array()) {
              ?>

              <tr>
                <td><?php echo $dados['placa'];?></td> 
                <td><?php echo $dados['renavan'];?></td>  
                <td><?php echo utf8_encode($dados['tipo']);?></td>  
                <td><?php echo $dados['marca'];?></td>  
                <td><?php echo $dados['modelo'];?></td>  
                <td><?php echo $dados['ano'];?></td>   
                <td><?php echo $dados['chassi'];?></td>   
                <td><?php echo $dados['cor'];?></td>   
                <td><?php echo $dados['km'];?></td>
                <td>
                  <i class="fa fa-pencil"></i> 
                  <i style="color: red" class="fa fa-close"></i>
                </td>
              </tr>

            <?php } ?>

          </tbody>
          <tfoot>
            <tr>
                <th>Placa</th> 
                <th>Renavan</th>  
                <th>Tipo</th>  
                <th>Marca</th>  
                <th>Modelo</th>  
                <th>Ano</th>   
                <th>Chassi</th>   
                <th>Cor</th>   
                <th>Km</th>
                <th styl>&nbsp;</th>  
            </tr>
        </tfoot>

            

        </table>






          </div>
        </div>

        
        

        </section>