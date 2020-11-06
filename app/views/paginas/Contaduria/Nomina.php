<?php
ini_set('display_errors',0);
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Nomina</title>
</head>

<body>
 <p style="text-align: center; font-size: 30px;"><b>Nómina</b></h3></p>
 <div class="container">
  
  <div class="card bg-success text-white">
   
   <div class="card-header bg-dark">
    <div class="form-row text-center">
      <a href="<?php echo RUTA_URL;?>/Paginas/Volver" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
            <h3> <?php echo $datos['Mensaje']; ?> </h3>
     <div class="col-12">
      <label for="Instruccion" style="color: #969696"><h4><small>Complete los campos para crear una nueva nómina</small></h4></label>
     </div>
    </div>
   </div>
   
   <form action= "<?php echo RUTA_URL;?>/Usuarios/Carga" method="POST">
   <div class="card-body">
    <div class="form-row">
     <div class="form-group col-md-6">
      <label for="IDEmpl">ID</label>
      <input type="text" class="form-control" id="ID" name="ID" value="<?php echo $datos['ID']; ?>" placeholder="ID del empleado" pattern="[0-9]" title="Las ID son numéricas"required>
     </div>
     <div class="form-group col-md-6">
      <br>
      <label for="Buscar">Buscar:</label>
      <button type="submit" class="btn btn-dark">Buscar</button>
      
   </form>
  
   
     </div>
    </div>
  
  
  
      <form action= "<?php echo RUTA_URL;?>/Usuarios/Guardar" method="POST">
<input class="Text" type="hidden" id="ID" name="ID" value="<?php echo $datos['ID']; ?>">
   
  
  
  
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="Nombre">Nombre del empleado</label>
      <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $datos['Nombre']; ?>" readonly placeholder="">
     </div>
     <div class="form-group col-md-4"></div>
     <div class="form-group col-md-4">
      <br>
      <label for="Regimen">Regimen del trabajador: Sueldos</label>
     </div>
    </div>
       <div class="form-row">
     <div class="form-group col-md-6">
      <label for="Telefono">Teléfono</label>
       <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $datos['Telefono']; ?>" readonly placeholder="">
     </div>
     
     <div class="form-group col-md-6">
      <label for="Correo">Correo</label>
      <input type="text" class="form-control" id="Correo" name="Correo" value="<?php echo $datos['Correo']; ?>" readonly placeholder="">
     </div>
     </div>
    <div class="form-row">
     <div class="form-group col-md-3">
      <label for="R.F.C">R.F.C</label>
      <input type="text" class="form-control" id="RFC" name="RFC" value="<?php echo $datos['RFC']; ?>" readonly placeholder="">
     </div>
     <div class="form-group col-md-3">
      <label for="Curp">Curp</label>
      <input type="text" class="form-control" id="Curp" name="Curp" value="<?php echo $datos['Curp']; ?>" readonly placeholder="">
     </div>
     <div class="form-group col-md-3">
      <label for="N.S.S">N.S.S</label>
      <input type="text" class="form-control" id="N.S.S" name="N.S.S" value="<?php echo $datos['N.S.S']; ?>" readonly placeholder="">
     </div>
     <div class="form-group col-md-3">
      <label for="Salario">Pago con: Por definir</label>
     </div>
    </div>
    
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="Puesto">Puesto</label>
       <input type="text" class="form-control" id="Puesto" name="Puesto" value="<?php echo $datos['Rol']; ?>" readonly placeholder="">
     </div>
     
     <div class="form-group col-md-4">
      <label for="Turno">Turno</label>
      <input type="text" class="form-control" id="Turno" name="Turno" value="<?php echo $datos['Turno']; ?>" readonly placeholder="">
     </div>
     
     <div class="form-group col-md-4">
      <label for="Salario">Salario Diario</label>
      
      <input type="text" class="form-control" id="Salario" name="Salario" value="<?php echo $datos['Salario']; ?>" readonly placeholder="">
     </div>
    </div>
    
    <div class="form-row">
     <div class="form-group col-md-4">
       <label for="Fecha">Fecha Ingreso</label>
      <input type="text" class="form-control" id="Fecha" name="Fecha" value="<?php echo $datos['Fecha']; ?>" readonly placeholder="">
    
        </div>
     
     <div class="form-group col-md-4">
      </div>
      
     <div class="form-group col-md-4">
      <label for="SalarioMes">Salario base de cotización</label>
       <input type="text" class="form-control" id="SalarioBC" name="SalarioBC" value="<?php echo $datos['SalarioBC']; ?>" readonly placeholder="">
      </div>
     

    </div>
    
 <!-----------percep y deducc---------------------------------->
    <div class="container">
  <div class="row align-items-start bg-dark">
    <div class="col">
      <label for="Percepciones">Percepciones:</label>
    </div>
    <div class="col">
      
    </div>
    <div class="col">
      <label for="Deducciones">Deducciones:</label>
    </div>
  </div>
  <!-------Checks percepciones-------->
  <div class="row align-items-center">
   
   
    <div class="col">
     
     
     <div class="row align-items-center">
      <div class="col">
    <label for="SalarioMes">Salario Mensual</label>
    <input type="text" class="form-control" id="SalarioMes" name="SalarioMes" value="<?php echo $datos['SalarioMes']; ?>" readonly placeholder="">
   
      </div>
     </div>
     
     <div class="row align-items-center">
      <div class="col">
      <label for="BonoP">Bono de asistencia</label>
    <select id="BonoA" name="BonoA" class="form-control">
        <option selected value="1">No</option>
        <option value="2">Si</option>
    </select>
      </div>
     </div>
     <div class="row align-items-center">
      <div class="col">
        <label for="Bono">Bono asistencia: </label>
        <input type="text" class="form-control" id="BonoAA" name="BonoAA" value="0" readonly placeholder="">
      </div>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row align-items-center">
      <div class="col">
   <label for="BonoP">Bono de puntualidad</label>
    <select id="BonoP" name="BonoP" class="form-control">
        <option selected value="1">No</option>
        <option value="2">Si</option>
    </select>
      </div>
     </div>
     
   <div class="row align-items-center">
      <div class="col">
        <label for="Bono">Bono puntualidad: </label>
        <input type="text" class="form-control" id="BonoPP" name="BonoPP" value="0" readonly placeholder="">
      </div>
     </div>
     <div class="row">
      <label></label>
     </div>
      <div class="row">
      <label></label>
     </div>
     <div class="row align-items-center">
      <div class="col">
    <label for="Vacaciones">Vacaciones</label>
    <select id="Vacaciones" name="Vacaciones" class="form-control">
        <option selected value="0">No</option>
        <option value="6">Si</option>
          </select>
      </div>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row">
      <label></label>
     </div>
      <div class="row align-items-center">
      <div class="col">
          <label for="VacacionesP">Prima vacacional </label>
        <input type="text" class="form-control" id="VacacionesP" name="VacacionesP"   readonly placeholder="">
      </div>
      
     </div>
       <div class="row">
      <label></label>
     </div>
     <div class="row">
      <label></label>
     </div>
     <div class="row align-items-center">
      <div class="col">
          <label for="TotalP">Total percepciones </label>
        <input type="text" class="form-control" id="Tp" name="Tp"  readonly placeholder="">
      </div>
      
     </div>
       <div class="row align-items-center">
     
     </div>
    </div>
    <!-------para estilo:v---->
    <div class="col">
      
    </div>
    <!----deducciones------->
    <div class="col">
      <div class="row align-items-center">
      <div class="col">
       <label for="ISR">ISR</label>
       <input type="text" class="form-control" id="ISR" name="ISR" readonly placeholder="">
      </div>
     </div>
     <div class="row align-items-center">
      <div class="col">
       <label for="IMSS">IMSS</label>
       <input type="text" class="form-control" id="IMSS" name="IMSS"  readonly placeholder="">
      </div>
     </div>
     <div class="row align-items-center">
      <div class="col">
       <label for="Fondo">Fondo de vivienda</label>
       <input type="text" class="form-control" id="Fondo" required value="0" name="Fondo" placeholder="" pattern="[0-9]" title="El fondo de vivienda es numérico" >
       <div class="row">
        <label></label>
       </div>
      </div>
     </div>
      <div class="row align-items-center">
      <div class="col">
       <label for="IMSS">Total deducciones</label>
       <input type="text" class="form-control" id="Td" name="Td"  readonly placeholder="">
      </div>
     </div>
    </div>
  </div>
  <!------estilo :B--->
 
  
  
  
  
   <div class="row align-items-end-center">
   <div class="col">
    <div class="form-row">
    <div class="form-group col-md-12 text-center ">
    <label></label>
     
     <label></label>
     </div>
      </div>
   </div>
  </div>
</div>
<!------------------------------------------------->    
        
   <div class="form-row">
    <div class="form-group col-md-10 text-center ">
    
    </div>
    <div class="form-group col-md-2  ">
     <label for="Total">Total Neto</label>
  <input type="text" class="form-control" id="T" name="T"  readonly placeholder="">
    </div>
   </div>
   
   <div class="form-row">
    <div class="form-group col-md-10 text-center ">
     
    </div>
     
    <div class="form-group col-md-2 text-center">
    
       
        <button type="button" class="btn btn-dark" onclick="sumar();" >Calcular </button>
    </div>
   </div>
 
   </div>
  <div class="card-footer text-center">
  
   <button type="submit" class="btn btn-dark">Guardar</button>
   </form>
  </div>
  




















<script src="<?php echo RUTA_URL; ?>/public/js/JQUERY.js"></script>
    <script src="<?php echo RUTA_URL; ?>/public/js/fontawesome.min.js"></script>
    <script src="<?php echo RUTA_URL; ?>/public/js/bootstrap.js"></script>
    <script type="text/javascript">

    
    
    
    
     function sumar(){
          var Vaca=parseInt(document.getElementById("Vacaciones").value);
          var operador1=parseInt(document.getElementById("Salario").value);
          var Vivienda=parseInt(document.getElementById("Fondo").value);
          var BonoA=parseInt(document.getElementById("BonoA").value);
          var BonoP=parseInt(document.getElementById("BonoP").value);
          var SalMes=parseInt(document.getElementById("SalarioMes").value);
          if(operador1!==null ){
            var total=parseFloat(operador1*Vaca);
            var prim=parseFloat(total*0.25);
            var primF=parseFloat(prim/365);
            var agui=parseFloat(15*operador1);
            var aguiF=parseFloat(agui/365);
            
           
            
            
            
            var BonoTotalA;
            var BonoTotalP;
            if (BonoA==1) {
                 BonoTotalA=parseFloat(operador1*0);
                
                
             
                
            }else{
                  BonoTotalA=parseFloat(operador1*0.10);
            }
          
            
            
              if (BonoP==1) {
                 BonoTotalP=parseFloat(operador1*0);
                
                
             
                
            }else{
                  BonoTotalP=parseFloat(operador1*0.10);
            }
        
         
         
         
         
         
         var Isr;
         var Por;
         if (SalMes >= 0.01 && SalMes <= 578.52) {
             Isr=parseFloat(SalMes - 0.01);
             Por=parseFloat((Isr * 0.0192) + 0);
         }
         
         if (SalMes >= 578.53 && SalMes <= 4910.18) {
             Isr=parseFloat(SalMes - 578.50 );
             Por=parseFloat((Isr * 0.0640) + 11.11);
         }
         
          if (SalMes >= 4910.19 && SalMes <= 8629.20) {
             Isr=parseFloat(SalMes - 4910.19 );
             Por=parseFloat((Isr * 0.1088) + 288.33);
         }
         
           if (SalMes >= 8629.21 && SalMes <= 10031.07) {
             Isr=parseFloat(SalMes - 8629.21 );
             Por=parseFloat((Isr * 0.16) + 692.96);
         }
         
          if (SalMes >= 10031.08 && SalMes <= 12009.94) {
             Isr=parseFloat(SalMes - 10031.08 );
             Por=parseFloat((Isr * 0.1792) + 917.26);
         }
         
          if (SalMes >= 12009.95 && SalMes <= 24222.31) {
             Isr=parseFloat(SalMes - 12009.95 );
             Por=parseFloat((Isr * 0.2136) + 1271.87);
         }
         
          if (SalMes >= 24222.32 && SalMes <= 38177.69) {
             Isr=parseFloat(SalMes - 24222.32 );
             Por=parseFloat((Isr * 0.2352) + 3880.44);
         }
         
         if (SalMes >= 38177.70 && SalMes <= 72887.50) {
             Isr=parseFloat(SalMes - 38177.70 );
             Por=parseFloat((Isr * 0.30) + 7162.74);
         }
         
         if (SalMes >= 72887.51 && SalMes <= 97183.33) {
             Isr=parseFloat(SalMes - 72887.51 );
             Por=parseFloat((Isr * 0.32) + 17575.69);
         }
         
         if (SalMes >= 97183.34 && SalMes <= 291550.0) {
             Isr=parseFloat(SalMes - 97183.34 );
             Por=parseFloat((Isr * 0.34) + 25350.35);
         }
         
         if (SalMes >= 291550.01) {
             Isr=parseFloat(SalMes - 291550.01 );
             Por=parseFloat((Isr * 0.35) + 91435.02);
         }
         
              document.getElementById('ISR').value=(Por);
              document.getElementById('VacacionesP').value=(prim);
              document.getElementById('BonoAA').value=(BonoTotalA);
              document.getElementById('BonoPP').value=(BonoTotalP);
              document.getElementById('SalarioBC').value=(operador1+primF+aguiF);
              document.getElementById('Tp').value=(prim+BonoTotalA+BonoTotalP+SalMes);
            
            
             document.getElementById('Td').value=((((operador1+primF+aguiF)* 30)* 0.02375)+Por+Vivienda);
            
            document.getElementById('IMSS').value=(((operador1+primF+aguiF)* 30) * 0.02375);
            
            
            var totalNeto=parseFloat((prim+BonoTotalA+BonoTotalP+SalMes) - ((((operador1+primF+aguiF)*30)*0.02375)+Por+Vivienda));
             document.getElementById('T').value=(totalNeto);
            
            return true;
          }

         }
    </script>

</body>

</html>



