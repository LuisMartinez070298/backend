<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Empleados</title>
</head>

<body>
    <p style="text-align: center; font-size: 30px;"><b>Usuario</b></h3></p>
    <div class="container">
        <div class="card bg-success text-white">
            <div class="card-header bg-dark">
                 <h3> <?php echo $datos['Mensaje']; ?> </h3>
                 
                        <a href="<?php echo RUTA_URL;?>/Paginas/VolverJefe" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
                
                    <div class="form-row text-center">
     <div class="col-12">
      <label for="Instruccion " style="color: #969696"><h4><small>Vista de los Usuarios</small></h4></label>
                    <!--Poner el nombre del usuario-->
     </div>
    </div>
                       
                  
                
            </div>
           <form action= "<?php echo RUTA_URL;?>/Usuarios/BusquedaPer" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="id">ID del Usuario: </label>
                        <input type="text" class="form-control" id="ID" name="ID" aria-describedby="ID" pattern="[0-9]" title="Las ID son númericas" required>
                        <small id="Advertencia" class="form-text text-white">Buscar al usuario por su ID</small>
                        <button type="submit" class="btn btn-dark">Buscar</button>
                    </div>
                </div>
           </form> 
                <div class="row">
                    <label></label>
                </div>
           
            <table class="table table-stripped">
            <thead class="bg-dark">
                <tr class="row col-md-12 text-center">
                    <th class="col-md-3">Nombre del usuario</th>
                    <th class="col-md-3">Usuario</th>
                    <th class="col-md-3">Tipo</th>
                    <th class="col-md-3">Botones de acción</th>                    
                </tr>
            </thead>
            
            <tbody class="bg-white text-dark">
                        <?php foreach($datos['Usuario'] as $usuario): ?>
                         
                <!--Enseguida del row va lo del ngFor para que se llene la tabla-->
                <tr class="row col-md-12 text-center">
                <td class="col-md-3"><?php echo $usuario['Nombre'];?> </td>
                <td class="col-md-3"><?php echo $usuario['Usuario'];?> </td>
                <td class="col-md-3"><?php echo $usuario['Tipo'];?> </td>
                    <td class="col-md-3"><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL;?>/Usuarios/editarPer/<?php echo $usuario['idUsuario']; ?>"><i class="fa fa-edit"></i></a>
                    &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL;?>/Usuarios/eliminarPer/<?php echo $usuario['idUsuario']; ?>"><i class="fa fa-times"></i></a></td>
                    <!--Llamado del campo aqui--></td>
                </tr>
                
                        <?php endforeach;?>
                    </tbody>
                 </table>
             </div>
            </div>
          </div>
</body>
</html>
        