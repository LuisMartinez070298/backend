
<head>
<?php
ini_set('display_errors',0);
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<title>Menu de jefe</title>
</head>
<body>
 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <h3> <?php echo $datos['Mensaje'].$datos['usuario']; ?> </h3>
  <div class="container">
   
    <form action= "<?php echo RUTA_URL;?>/Paginas/AgreEmp" >
    <div class="col-12">
     <br>
         <div class="card bg-success text-white text-center">
         <div class="card-header bg-dark ">
          <img src="<?php echo RUTA_URL;?>/public/img/agregar-empleados.png" title="" style="height: 2.5rem;  width:2.5rem;">
                 <label for="Instruccion" ><h5><b>Añadir Empleado</b></h5></label>
                
                
            </div>
            <div class="card-body">
                <h6>En esta sección, usted podrá agregar a nuevo personal.</h6>
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
            </form>  
                
            </div>
         </div>   
        
    </div>
      <form action= "<?php echo RUTA_URL;?>/Paginas/Empleados" >
    <div class="col-12">
        <div class="card bg-success text-white text-center">
            <div class="card-header bg-dark">
             <img src="<?php echo RUTA_URL;?>/public/img/gestion-empleados.png" title="" style="height: 2.5rem;  width:2.5rem;">
                   <label for="Instruccion"><h5><b>Gestión de empleados</b></h5></label>
                
                
            </div>
            <div class="card-body">
                
                <h6>En esta sección, usted podrá revisar, editar,
                o, en el peor de los casos, eliminar, la información de cada empleado. </h6>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
      </form>
                
            </div>
         </div>
        </div>
    
    
    
    
    
    
    
    
    
    
     <form action= "<?php echo RUTA_URL;?>/Paginas/Personal" >
    <div class="col-12">
        <div class="card bg-success text-white text-center">
            <div class="card-header bg-dark">
             <img src="<?php echo RUTA_URL;?>/public/img/agregar-usuarios.png" title="" style="height: 2.5rem;  width:2.5rem;">
                   <label for="Instruccion"><h5><b>Añadir usuario</b></h5></label>
                
                
            </div>
            <div class="card-body">
                
                <h6>En esta sección, usted como administrador, creará usuarios que puedan usar el sitio de funcionamiento.</h6>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
      </form>
                
            </div>
         </div>
        </div>
    
    
    
       <form action= "<?php echo RUTA_URL;?>/Paginas/GesPer" >
    <div class="col-12">
        <div class="card bg-success text-white text-center">
            <div class="card-header bg-dark">
             <img src="<?php echo RUTA_URL;?>/public/img/gestionar-empleados.png" title="" style="height: 2.5rem;  width:2.5rem;">
                   <label for="Instruccion"><h5><b>Gestión de usuarios</b></h5></label>
                
                
            </div>
            <div class="card-body">
                
                <h6>Sección para la realizar cambios o la eliminación de un usuario.</h6>
                
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-dark">Ingresar</button>
      </form>
                
            </div>
         </div>
        </div>
    
    
  
         </div>
        </div>
      </div>
  
  
  
  
  
  </div>
  </body>