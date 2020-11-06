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
 <p style="text-align: center; font-size: 30px;"><b>Eliminar Nomina</b></h3></p>
 <div class="container">
  <div class="card bg-success text-white">
   <div class="card-header bg-dark">
    <a href="<?php echo RUTA_URL;?>/Paginas/Reporte" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
      <h3> <?php echo $datos['Mensaje']; ?> </h3>
    <div class="form-row text-center">
     <div class="col-12">
      <label for="Instruccion" style="color: #969696"><h4><small>Verifique la información de la nomina a eliminar</small></h4></label>
      <!--Poner el nombre del usuario-->
     </div>
    </div>
   </div>
    <form action= "<?php echo RUTA_URL;?>/Usuarios/eliminarNom/<?php echo $datos['IDN']; ?>" method="POST">
<div class="card-body">

  <div class="form-group">
    <label for="ID">ID de la nomina</label>
   <input type="text" class="form-control" id="IDN" name="IDN"  value="<?php echo $datos['IDN']; ?>" readonly aria-describedby="IDEmp">
   
   
   <label for="ID">ID del empleado</label>
   <input type="text" class="form-control" id="IDE" name="IDE"  value="<?php echo $datos['IDE']; ?>" readonly aria-describedby="IDEmp">
   
   <label for="Nombre">Nombre completo</label>
   <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $datos['Nombre']; ?>"  readonly aria-describedby="Nombre">
   
   
   <label for="Fecha">Fecha de la nomina</label>
   <input type="text" class="form-control" id="Fecha" name="Fecha" value="<?php echo $datos['Fecha']; ?>"  readonly aria-describedby="Nombre">
   

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
        
    


