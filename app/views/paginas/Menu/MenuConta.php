<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Menu Contador</title>
</head>
 <h3> <?php echo $datos['Mensaje'].$datos['usuario']; ?> </h3>
  <div class="container">
   <form action= "<?php echo RUTA_URL;?>/Paginas/Nomina" >
    <div class="col-12">
      <br>
         <div class="card bg-success text-white text-center">
         <div class="card-header bg-dark ">
          <img src="<?php echo RUTA_URL;?>/public/img/agregar-nomina.png" title="" style="height: 2.5rem;  width:2.5rem;">
                 <label for="Instruccion"><h5><b>Generar Nómina</b></h5></label>
                
                
            </div>
            <div class="card-body">
                
                 <h6>En esta sección, podrá crear la nómina del empleado.</h6>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
           </form>
            </div>
         </div>   
        
    </div>
      <form action= "<?php echo RUTA_URL;?>/Paginas/Reporte" >
    <div class="col-12">
        <div class="card bg-success text-white text-center">
            <div class="card-header bg-dark">
              <img src="<?php echo RUTA_URL;?>/public/img/editar-nomina.png" title="" style="height: 2.5rem;  width:2.5rem;">
                   <label for="Instruccion"><h5><b>Gestión de Nóminas</b></h5></label>
                
                
            </div>
            <div class="card-body">
                
                <h6>En esta sección, podrá visualizar, modificar o eliminar alguna nómina.</h6>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
          </form>   
                
            </div>
         </div>
        </div>
    
    
    
     
      </div>
  
  
  
  
  
  </div>