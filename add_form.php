<?php 

include "header.php";

 ?>

<div class="container">
 
 <form id="frm-add-brand" action="action_add.php" method="POST" role="form">
 	<legend>Agregar usuario</legend>
 
 	<div class="form-group">
 		<label for="">Nombres</label>
 		<input type="text"   class="form-control" name="name" id="name" placeholder="Nombre">
 	</div>
        <div class="form-group">
 		<label for="">Apellido Paterno</label>
 		<input type="text" class="form-control" name="appat" id="appat" placeholder="Apellido Paterno">
 	</div>		
 	<div class="form-group">
 		<label for="">Apellido Materno</label>
		<input type="text" class="form-control" name="apmat" id="apmat" placeholder="Apellido Materno">
 	</div>
        <div class="form-group">
 		<label for="">Telefono</label>
                <input type="tel" class="form-control" name="fono" id="fono" placeholder="Telefono">
 	</div>
  	
 
 	<button type="submit" id="btn-add-brand" class="btn btn-primary">Registrar</button><br>
  <a href="index.php"><h1>Volver</h1></a>
 </form>
</div>



<script type="text/javascript">
  
  $(function(){
   
  	$("#btn-add-brand").on("click",function(){
       
       var _form = $("#frm-add-brand");
       

       if (_form.find("#name").val()==='') {

       	  alert("Por favor ingresa el nombre");
       	  return false;
       };
     
  	})


  })


</script>


<?php require "footer.php" ?>