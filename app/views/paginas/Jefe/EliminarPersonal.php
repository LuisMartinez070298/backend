<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Eliminar Empleado</title>
</head>

<body>
 <p style="text-align: center; font-size: 30px;"><b>Eliminar empleado</b></h3></p>
 <div class="container">
  <div class="card bg-success text-white">
   <div class="card-header bg-dark">
    <a href="<?php echo RUTA_URL;?>/Paginas/GesPer" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
      <h3> <?php echo $datos['Mensaje']; ?> </h3>
    <div class="form-row text-center">
     <div class="col-12">
      <label for="Instruccion" style="color: #969696"><h4><small>Verifique la información del empleado a eliminar</small></h4></label>
      <!--Poner el nombre del usuario-->
     </div>
    </div>
   </div>
    <form action= "<?php echo RUTA_URL;?>/Usuarios/eliminarPer/<?php echo $datos['Id']; ?>" method="POST">
<div class="card-body">

  <div class="form-group">
  
   <label for="Id">Id del usuario</label>
   <input type="text" class="form-control" id="Id" name="Id" value="<?php echo $datos['Id']; ?>"  readonly aria-describedby="Id">
   
  
  
   <label for="Nombre">Nombre completo</label>
   <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $datos['Nombre']; ?>"  readonly aria-describedby="Nombre">
   
   
    <label for="Usuario">Usuario</label>
    <input type="text" class="form-control" id="Usuario" name="Usuario" value="<?php echo $datos['Usuario']; ?>"  readonly aria-describedby="Usuario">
   
   
  
 </div>
</div>
<div class="card-footer">
 <div class="form-row text-center">
  <div class="col-12">
   <button type="submit" class="btn btn-dark btn-lg">Eliminar</button>
  </div>
 </div>
  </form>
</div>




</div>
</body>

</html>