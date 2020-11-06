<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Editar Usuario</title>
</head>

<body>
 <p style="text-align: center; font-size: 30px;"><b>Editar usuario</b></h3></p>
 <div class="container">
  <div class="card bg-success text-white">
   <div class="card-header bg-dark">
    <a href="<?php echo RUTA_URL;?>/Paginas/GesPer" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
      <h3> <?php echo $datos['Mensaje']; ?> </h3>
    <div class="form-row text-center">
     <div class="col-12">
      <label for="Instruccion" style="color: #969696"><h4><small>Modifique la información del usuario</small></h4></label>
      <!--Poner el nombre del usuario-->
     </div>
    </div>
   </div>
    <form action= "<?php echo RUTA_URL;?>/Usuarios/editarPer/<?php echo $datos['Id']; ?>" method="POST">
<div class="card-body">

  <div class="form-group">
  
   <label for="Id">Id del usuario</label>
   <input type="text" class="form-control" id="Id" name="Id" value="<?php echo $datos['Id']; ?>"  readonly aria-describedby="Id">
   
  
  
   <label for="Nombre">Nombre completo</label>
   <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $datos['Nombre']; ?>" aria-describedby="Nombre" required maxlength="50" required minlength="3" pattern="^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
   
   
    <label for="Usuario">Usuario</label>
    <input type="text" class="form-control" id="Usuario" name="Usuario" value="<?php echo $datos['Usuario']; ?>" aria-describedby="Usuario" required minlength="3" required maxlength="30" required>
   
    <label for="Contraseña">Contraseña</label>
    <input type="text" class="form-control" id="Contraseña" name="Contraseña" value="<?php echo $datos['Contraseña']; ?>" aria-describedby="Contraseña" required minlength="8" required maxlength="20" required>
   




     <label for="Tipo">Tipo de usuario</label>
    <select id="Tipo" name="Tipo" value="<?php echo $datos['Tipo']; ?>" class="form-control" required>
        <option selected value="admin">admin</option>
        <option value="conta">conta</option>
    </select>
  
 </div>
</div>
<div class="card-footer">
 <div class="form-row text-center">
  <div class="col-12">
   <button type="submit" class="btn btn-dark btn-lg">Guardar</button>
  </div>
 </div>
  </form>
</div>




</div>
</body>

</html>