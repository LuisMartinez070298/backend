

<?php
//ini_set('error_reporting',0);
//session_destroy();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>


  <p style="text-align: center; font-size: 30px;"><b>Iniciar Sesión</b></p>
  <div class="container">
    <div class="card bg-success text-white" id="login">
      <div class="card header bg-dark">
        <br>
        <br>
      </div>
      <div class="card-body">
        <form action= "<?php echo RUTA_URL;?>/auths/login" method="POST" id="login" class="needs-validation" novalidate>
          <div class="form-group">
            <label for="Usuario" style="font-size: 20px;">Nombre de usuario</label>
            <input type="text" class="form-control" id="Usuario" name="Usuario" aria-describedby="Usuario" required >
            <!--<div class="valid-feedback" style="color: #ffffff;">Válido</div>-->
            <div class="invalid-feedback bg-danger" style="color: #ffffff;">Es necesario el nombre de usuario</div>
            <small id="Advertencia" class="form-text text-white text-center bg-dark">Ingrese su nombre de usuario y contraseña asignados</small>
          </div>
          <div class="form-group">
            <label for="contraseña" style="font-size: 20px;">Contraseña</label>
            <input type="password" class="form-control" id="Contraseña" name="Contraseña" required>
            <!--<div class="valid-feedback">Válido</div>-->
            <div class="invalid-feedback bg-danger" style="color: #ffffff;">Es necesaria la contraseña del usuario</div>
            <small id="Advertencia" class="form-text text-muted text-center bg-dark"></small>
          </div>
          
          <button type="submit" class="btn btn-dark">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
  
<!------------------------------- js de validación ------------------------------------->
<script>
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
</script>
  
