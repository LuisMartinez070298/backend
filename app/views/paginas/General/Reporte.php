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
    <p style="text-align: center; font-size: 30px;"><b>Nómina</b></h3></p>
    <div class="container">
        <div class="card bg-success text-white">
            <div class="card-header bg-dark">
                  <a href="<?php echo RUTA_URL;?>/Paginas/Volver" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
     <h3> <?php echo $datos['Mensaje']; ?> </h3>
                <label for="Instruccion " style="color: #969696"><h4><small>Vista de las Nóminas</small></h4></label>
            </div>
           <form action= "<?php echo RUTA_URL;?>/Usuarios/BusquedaNom" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="id">ID del empleado: </label>
                        <input type="text" class="form-control" id="ID" name="ID" aria-describedby="IDEmp" pattern="[0-9]" title="Las ID son numéricas" required>
                        <small id="Advertencia" class="form-text text-white">Buscar al empleado por su ID</small>
                        <button type="submit" class="btn btn-dark">Buscar</button>
                    </div>
                </div>
           </form> 
                <div class="row">
                    <label></label>
                </div>
           
            <table class="table table-stripped text-center">
            <thead class="bg-dark text-center">
                <tr class="row col-md-12">
                    <th class="col-md-3">Id Empleado</th>
                    <th class="col-md-3">Nombre del empleado</th>
                    <th class="col-md-3">Fecha</th>
                    <th class="col-md-3">Botones</th>                    
                </tr>
            </thead>
            
            <tbody class="bg-white text-dark text-center">
                        <?php foreach($datos['Nomina'] as $usuario):?>
                <!--Enseguida del row va lo del ngFor para que se llene la tabla-->
                <tr class="row col-md-12">
                <td class="col-md-3"><?php echo $usuario['Empleado_idEmpleado'];?> </td>
                <td class="col-md-3"><?php echo $usuario['Nombre'];?> </td>
                <td class="col-md-3"><?php echo $usuario['Fecha'];?> </td>
                    <td class="col-md-3"><a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL;?>/Usuarios/eliminarNom/<?php echo $usuario['idNom']; ?>"><i class="fa fa-times"></i></a>
                    &nbsp; <a class="btn btn-sm btn-secondary"href="<?php echo RUTA_URL;?>/Usuarios/toPdf/<?php echo $usuario['idNom'];?>"><i class="fa fa-eye"></i></a></td>
                    <!--Llamado del campo aqui-->
                </tr>
                        <?php endforeach;?>
                    </tbody>
                 </table>
             </div>
            </div>
          </div>
</body>
</html>