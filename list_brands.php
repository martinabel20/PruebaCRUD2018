<h1 class="text-info text-center">Registro de Formulario CRUD 2018</h1>


<a href="add_form.php" id="btn-new" class="btn btn-danger">Agregar Registro</a>
<br>
<br>

	<table id="mytable" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombres</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Telefono</th>
				<th>Mantenimiento</th>
			</tr>
		</thead>
		<tbody>

			<?php 
			
			require "Brands.php";

			$brands = new Brands();

			$rows = $brands->getBrands();

			for ($i=0; $i <count($rows) ; $i++) { 
				
			?>
			<tr>
				<td><?php echo $rows[$i]->Id ?></td>
				<td><?php echo $rows[$i]->Nombres ?></td>
				<td><?php echo $rows[$i]->Appat ?></td>
				<td><?php echo $rows[$i]->Apmat ?></td>
				<td><?php echo $rows[$i]->Fono ?></td>
				
				<td>
					<a href="" id="<?php echo $rows[$i]->Id ?>"  class="btn btn-danger btn-delete">Eliminar</a>
					<a href="edit_form.php?id=<?php echo $rows[$i]->Id ?>" class="btn btn-success">Editar</a>
				
				</td>
			</tr>
			<?php 
		}
			?>
		</tbody>
	</table>

<script src="js/datatable/jquery.dataTables.min.js"></script>
<script src="js/datatable/dataTables.bootstrap.js"></script>

<script>
	
 $(function(){

 	  $('#mytable').dataTable(
 	  		{
            "language": {
                "url": "js/datatable/datatables.spanish.json"
            }
        }
 	  	);

 	  $(".btn-delete").on("click",function(){
        var _id =$(this).attr("id");
        console.log(_id)
 	  	if (confirm("Deseas eliminar este registro?")) {

 	  		window.location="action_delete.php?id="+_id;
 	  	};
 	  	return false;
 	  })

 	
 });

</script>