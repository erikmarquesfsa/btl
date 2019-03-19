<?php //include "../_scripts/config.php"; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/af-2.3.2/b-1.5.4/b-print-1.5.4/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/af-2.3.2/b-1.5.4/b-print-1.5.4/datatables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

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



<table id="example" class="table display" style="width:100%">
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
            <td><?php echo $dados['tipo'];?></td>
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
            <th>&nbsp;</th>
        </tr>
    </tfoot>
</table>


