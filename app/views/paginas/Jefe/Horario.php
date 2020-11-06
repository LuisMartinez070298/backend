<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
</head>

<body>
 <p style="text-align: center; font-size: 30px;"><b>Horario</b></h3></p>
 <div class="container">
  <div class="card bg-success text-white">
   
   <div class="card-header bg-dark">
   
    <div class="col-md-6 col">
    </div>
    <div class="col-md-4 col">
     
    </div>
    <div class="col-md-4 col">
     <p></p>
    </div>
   </div>
   
   <div class="card-body">
     <form>
      <div class="form-row">
  <div class="form-group col-md-4">
   <label for="IDTur">Numero Turno</label>
   <input type="text" class="form-control" id="IDTur1" value="<?php echo $datos['Horario']['idTurno']; ?>" name="IDTur1" readonly >
   
   <label for="Turno">Turno</label>
   <input type="text" class="form-control" id="Turno1" name="Turno1" value="<?php echo $datos['Horario']['Turno']; ?>" readonly aria-describedby="Turno">
   
   <label for="Hora1">Hora de entrada</label>
   <input type="text" class="form-control" id="Hora1" name="Hora1" value="<?php echo $datos['Horario']['Horario Entrada']; ?>" readonly  aria-describedby="Hora">
   
   <label for="Hora de salida">Hora de salida</label>
   <input type="text" class="form-control" id="Hora12" name="Hora12" value="<?php echo $datos['Horario']['Hora Salida']; ?>" readonly aria-describedby="Hora">
  
   </div>
   
    <div class="form-group col-md-4"></div>
     
  <div class="form-group col-md-4">
   <label for="IDTur">Numero Turno</label>
   <input type="text" class="form-control" id="IDTur2" name="IDTur2" value="<?php echo $datos['Horario2']['idTurno']; ?>" readonly >
   
   <label for="Turno">Turno</label>
   <input type="text" class="form-control" id="Turno2" name="Turno2" value="<?php echo $datos['Horario2']['Turno']; ?>" readonly aria-describedby="Turno">
   
   <label for="Hora1">Hora de entrada</label>
   <input type="text" class="form-control" id="Hora2" name="Hora2" value="<?php echo $datos['Horario2']['Horario Entrada']; ?>" readonly  aria-describedby="Hora">
   
   <label for="Hora de salida">Hora de salida</label>
   <input type="text" class="form-control" id="Hora22" name="Hora22" value="<?php echo $datos['Horario2']['Hora Salida']; ?>" readonly aria-describedby="Hora">
   </form>
   </div>
  </div>
   </div>
   
   <div class="card-footer">
    <div class="form-row text-center">
     
    </div>
   </div>
 
   </div>
  </div>
 </div>

</body>

</html>
    
 
 
 
 
 
 
 
   