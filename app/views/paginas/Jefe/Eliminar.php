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
    <a href="<?php echo RUTA_URL;?>/Paginas/Empleados" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
      <h3> <?php echo $datos['Mensaje']; ?> </h3>
    <div class="form-row text-center">
     <div class="col-12">
      <label for="Instruccion" style="color: #969696"><h4><small>Verifique la información del empleado a eliminar</small></h4></label>
      <!--Poner el nombre del usuario-->
     </div>
    </div>
   </div>
    <form action= "<?php echo RUTA_URL;?>/Usuarios/eliminar/<?php echo $datos['Id']; ?>" method="POST">
<div class="card-body">

  <div class="form-group">
   <label for="IDEmp">ID del empleado</label>
   <input type="text" class="form-control" id="IDEmp" name="IDEmp"  value="<?php echo $datos['Id']; ?>" readonly aria-describedby="IDEmp">
   
   <label for="Nombre">Nombre completo</label>
   <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $datos['Nombre']; ?>"  readonly aria-describedby="Nombre">
   
     <label for="Puesto">Puesto</label>
    <select id="Rol" name="Rol" readonly value="<?php echo $datos['Rol']; ?>" class="form-control">
        <option selected value="1">Operador</option>
        <option value="2">Cocedores</option>
        <option value="3">Intendencia</option>
        <option value="4">Empaquetado</option>
        <option value="5">Repartidor</option>
    </select>
   <label for="Turno">Turno</label>
     <select id="Turno" name="Turno" readonly value="<?php echo $datos['Turno']; ?>" class="form-control">
        <option selected value="1">Matutino</option>
        <option value="2">Despertino</option>
        </select>

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
        
    







