<?php 

include "header.php";

 ?>

<?php 
 require 'Brands.php';

$_id = $_GET['id'];


$brand = new Brands();

$result = $brand->getBrandsById($_id);
 


?>

<div class="container">
 
 <form action="action_edit.php" method="POST" role="form">
 	<legend>Actualizar Usuario</legend>
 	<input  type="hidden" name ="id" id="id" value ="<?php echo $result->Id ?>">
 	<div class="form-group">
 		<label for="">Nombres</label>
 		<input type="text" class="form-control" name="name" id="name" value ="<?php  echo $result->Nombres ?>" placeholder="Nombres">
 	</div>
		
 	<div class="form-group">
 		<label for="">Apellido Paterno</label>
		<input type="text" class="form-control" name="appat" id="appat" value ="<?php  echo $result->Appat ?>" placeholder="Apellido Paterno">
 	</div> 	
 	<div class="form-group">
 		<label for="">Apellido Materno</label>
		<input type="text" class="form-control" name="apmat" id="apmat" value ="<?php  echo $result->Apmat ?>" placeholder="Apellido Materno">
 	</div>	
        <div class="form-group">
 		<label for="">Telefonos</label>
                <input type="tel" class="form-control" name="fono" id="fono" value ="<?php  echo $result->Fono ?>" placeholder="Telefono">
 	</div>	
 
 	<button type="submit" class="btn btn-primary">Registrar</button><br/>
 	<a href="index.php"><h1>Volver</h1></a>
 </form>

</div>



<?php require "footer.php" ?>