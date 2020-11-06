<!DOCTYPE html>
<html lang="en">


<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Agregar Empleado</title>
</head>


<body>
   <p style="text-align: center; font-size: 30px;"><b>Agregar nuevo empleado</b></p>
   <div class="container">
    <div class="card bg-success text-white" id="agregar">
     <div class="card-header bg-dark">
         <a href="<?php echo RUTA_URL;?>/Paginas/VolverJefe" id="volver" class="btn btn-dark btn-sm float:right mt-3 mb-6" title="volver"><h3>Regresar</h3></a>
         <h3> <?php echo $datos['Mensaje']; ?> </h3>
         <div class="form-row text-center">
           <div class="col-12">
             <label for="Instruccion" style="color: #969696"><h3><small>Complete los campos para agregar al nuevo empleado</small></h3></label>
             <!--Poner el nombre del usuario-->
           </div>
         </div>
     </div>
     <div class="card-body">
        <form action= "<?php echo RUTA_URL;?>/Usuarios/agregar" method="POST" id="agregar" class="needs-validation">
           <div class="form-group" >
             <label for="Nombre">Nombre Completo</label>
             <input type="text" class="form-control" name="Nombre" id="Nombre"  aria-describedby="Nombre" placeholder="Jose Soy Un Ejemplo" required maxlength="50" required minlength="3" pattern="^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
            <div class="invalid-feedback bg-danger" style="color: #ffffff;">Es necesario el nombre de usuario</div>  
           </div>
           
           <div class="form-group">
            <label for="Curp">Curp</label>
            <input type="text" class="form-control" name="Curp" id="Curp" value="<?php echo $datos['Curp']; ?>" aria-describedby="Curp" placeholder="FEPM890204HASRRN08" pattern="([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$" title="La Curp debe de contar con 10 dígitos (y MAYÚSCULAS)" required>
           </div>
           
           <div class="form-group">
            <label for="Rfc">R.F.C</label>
            <input type="text" class="form-control" name="Rfc" id="Rfc" value="<?php echo $datos['Rfc']; ?>" aria-describedby="R.F.C" placeholder="VECJ880326" pattern="[A-Z]{4}[0-9]{6}" title="El RFC necesita un formato de 4 letras MAYÚSCULAS, seguido de 6 números" required>
           </div>
           
             
           <div class="form-group">
            <label for="Telefono">Teléfono</label>
            <input type="text" class="form-control" name="Telefono" id="Telefono"  value="<?php echo $datos['Telefono']; ?>" aria-describedby="Telefono" placeholder="810633456" pattern="[0-9]{10,10}" title="Número telefónico de 10 dígitos" required>
           </div>
             
           <div class="form-group">
            <label for="Correo">Correo Electrónico</label>
            <input type="email" class="form-control" name="Correo" id="Correo" value="<?php echo $datos['Correo']; ?>" aria-describedby="Correo" placeholder="correoEjemp21@dominio.com" required> 
           </div>
            
           <div class="form-group">
            <label for="NSS">N.S.S</label>
            <small id="Advertencia" style="color: white;">(Número de seguro social)</small>
            <input type="text" class="form-control" name="NSS" id="NSS" value="<?php echo $datos['NSS']; ?>" aria-describedby="NSS" placeholder="555501234" pattern="[0-9]{11,11}" title="El NSS se conforma por 11 dígitos" required>
           </div>
           
           <div class="form-group">
            <label for="Puesto">Puesto</label>
            <select id="Rol" name="Rol" value="<?php echo $datos['Rol']; ?>" class="form-control" title="Verifique que sí sea el puesto que se desea" required>
                  <option selected value="1">Operador</option>
                  <option value="2">Cocedores</option>
                  <option value="3">Intendencia</option>
                  <option value="4">Empaquetado</option>
                  <option value="5">Repartidor</option>
            </select>
           </div>
           
           <div class="form-group">
            <label for="Turno">Turno</label>
              <select id="Turno" name="Turno" value="<?php echo $datos['Turno']; ?>" class="form-control" title="Verifique que sí sea el turno que se desea" required>
                 <option selected value="1">Matutino</option>
                 <option value="2">Vespertino</option>
              </select>
           </div>
           
           <div class="form-group">
            <label for="Salario">Salario diario</label>
            <input type="text" class="form-control" id="Salario" name="Salario" value="<?php echo $datos['Salario']; ?>" aria-describedby="Salario" placeholder="250" required minlength="0" required maxlength="100000000" title="Dígitos Númericos" required>
           </div>
            
           <div class="form-group">
            <label for="Fecha">Fecha de Ingreso</label>
            <input type="text" class="form-control" id="Fecha" name ="Fecha" value="<?php echo $datos['Fecha']; ?>" aria-describedby="Fecha" placeholder="YYYY(Año)-MM(Mes)-DD(Dia)" pattern="^([0-9]{4})-([0-9]{2})-([0-9]{2})$" title="La fecha se conforma con un formato así YYYY-MM-DD" required>
           </div>
           
           <div class="card-footer">
         <div class="form-row text-center">
            <div class="col-12">
             <button type="submit" class="btn btn-dark btn-lg">Agregar</button>
            </div>
         </div>
        </div>
  </form>
   

     </div>
  
        
    </div>
   </div>


<!--<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>-->

</body>

</html>
        
    








