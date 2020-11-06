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
    <p style="text-align: center; font-size: 30px;"><b>Empleados</b></h3></p>
    <div class="container">
        <div class="card bg-success text-white">
            <div class="card-header bg-dark">
                 <h3> <?php echo $datos['Mensaje']; ?> </h3>
                  <a href="<?php echo RUTA_URL;?>/Paginas/VolverJefe" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
    
                <label for="Instruccion " style="color: #969696"><h4><small>Vista de los empleados</small></h4></label>
            </div>
           <form action= "<?php echo RUTA_URL;?>/Usuarios/Busqueda" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="id">ID del empleado: </label>
                        <input type="text" class="form-control" id="ID" name="ID" aria-describedby="IDEmp" pattern="[0-9]" title="Las ID son númericas" required>
                        <small id="Advertencia" class="form-text text-white">Buscar al empleado por su ID</small>
                        <button type="submit" class="btn btn-dark">Buscar</button>
                    </div>
                </div>
           </form> 
                <div class="row">
                    <label></label>
                </div>
           
            <table class="table ">
            <thead class="bg-dark">
                <tr class="row col-md-12 text-center">
                    <th class="col-md-3">Nombre del empleado</th>
                    <th class="col-md-3">Puesto</th>
                    <th class="col-md-3">Turno</th>
                    <th class="col-md-3">Botones</th>                    
                </tr>
            </thead>
            
            <tbody class="bg-white text-dark ">
                        <?php foreach($datos['Empleado'] as $usuario):?>
                <!--Enseguida del row va lo del ngFor para que se llene la tabla-->
                <tr class="row col-md-12 text-center">
                <td class="col-md-3"><?php echo $usuario['Nombre'];?> </td>
                <td class="col-md-3"><?php echo $usuario['Puesto'];?> </td>
                <td class="col-md-3"><?php echo $usuario['Turno'];?> </td>
                    <td class="col-md-3"><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL;?>/Usuarios/editar/<?php echo $usuario['idEmpleado']; ?>"><i class="fa fa-edit"></i></a>
                    &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL;?>/Usuarios/eliminar/<?php echo $usuario['idEmpleado']; ?>"><i class="fa fa-times"></i></a></td>
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
        
    
    
    
    
    
    
    
    
 
