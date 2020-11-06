<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
?>
 
 <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/solid.css ">
  <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/fontawesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/custom.css">
<title>Asistencia</title>
</head>

<body>
    <p style="text-align: center; font-size: 30px;"><b>Asistencia</b></h3></p>
    <div class="container">
        <div class="card bg-success text-white">
            <div class="card-header bg-dark">
                <div class="form-row text-center">
                    <div class="col-12">
                        <label for="Instruccion" style="color: #969696"><h4><small>Confirme su asitencia ingresando su ID</small></h4></label>
                    </div>
                </div>
            </div>
    <div class="card-body">
       <form action= "<?php echo RUTA_URL;?>/Paginas/Lista" method="POST">
            <div class="form-group">
                <label for="Id">ID del empleado</label>
                <input type="text" class="form-control" id="Id" name=" Id"aria-describedby="Nombre" placeholder="1">
            </div>
      
    </div>
        
    <div class="card-footer">
        <div class="form-row text-center">
            <div class="col-12">
                <button type="submit" class="btn btn-dark">Resistrar</button>
                <!--este boton cambiara si ya registro su asistencia-->
            
            </div>
        </div>
        
    </div>
    </div>
 </div>
 </div>
 </div>
</body>
    </form>
</html>
        
    



