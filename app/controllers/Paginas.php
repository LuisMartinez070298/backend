<?php
class Paginas extends Controller{
    
    public function __construct(){
        
    }
    public function index(){
        $datos=[
        'titulo'=>'Bienvenidos: '
        ];
        $this->view('paginas/dashboard',$datos);
        
    }
    
    public function Nomina(){
        $this->view('paginas/Contaduria/Nomina');
    }
    
    
    
    
    
    
    
    
    
    public function Reporte(){
        
        $this->usuarioModel=$this->model('Usuario');
        $F=$this->usuarioModel->obtenerTablaNo();
        $datos=['Nomina'=>$F];
         $this->view('paginas/General/Reporte', $datos);
        
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     public function VerNomina(){
        $this->view('paginas/General/VerNomina');
        
    }
  
    public function Volver(){
            $this->view('paginas/Menu/MenuConta');    
    }
    
    
    
    
    
    
     public function VolverJefe(){
            $this->view('paginas/Menu/MenuJefe');    
    }
    
    
    
    
    
     public function Empleados(){
         
            $this->usuarioModel=$this->model('Usuario');
            $usuarios = $this->usuarioModel->ObtenerTabla();
            
            $datos=[
            'Empleado'=>$usuarios
        ];
            
        
           $this->view('paginas/Jefe/Empleados',$datos);    
    }
    
    
    
    
    
    
    
      public function AgreEmp(){
            $this->view('paginas/Jefe/Agregar');    
    }
     public function EdiEmp($idEmpleado){
            $this->view('paginas/Jefe/Editar');
            
            
            
    }
     public function EliEmp($idEmpleado){
            $this->view('paginas/Jefe/Eliminar');
            
            
            
    }
     public function Horario(){
     
     $this->usuarioModel=$this->model('Usuario');
     
     $horario=$this->usuarioModel->Horario();
     $horario2=$this->usuarioModel->Horario2();
     $datos=['Horario'=>$horario, 'Horario2'=>$horario2];
     
            $this->view('paginas/Jefe/Horario',$datos);
            
    }
    
    
    
    
    
    
    
    
    
        
     public function Asistencia(){
           
        $this->usuarioModel=$this->model('Asistencia');
         $Asistencia=$this->usuarioModel->obtenerDia();
          $datos=[
                   'Asistencia'=>$Asistencia
                   ];
          
            $this->view('paginas/Asistencia/VerAsistencias', $datos);            
    
    
    
    }
    
    
    
    
    
    
    
    
    
      public function AsistenciaTod(){
         $this->usuarioModel=$this->model('Asistencia');
         $Asistencia=$this->usuarioModel->obtenerAsTa();
          $datos=[
                   'Asistencia'=>$Asistencia
                   ];
        
            $this->view('paginas/Asistencia/VerAsistenciaTod', $datos);            
    }
    
    public function AsisTod(){
          $this->usuarioModel=$this->model('Asistencia');
         $Asistencia=$this->usuarioModel->obtenerAsTaTod($_POST['ID']);
         if(empty($Asistencia)){
            
            $Asistencia=null;
         }
         if($Asistencia!=null){
          $datos=[
                   'Asistencia'=>$Asistencia
                   ];
        
            $this->view('paginas/Asistencia/VerAsistenciaTod', $datos);      
         }else{
             $datos=[
                   'Mensaje'=>'Empleado no encontrado'
                   ];
             $this->view('paginas/Asistencia/VerAsistenciaTod', $datos);     
         }
        
    }
    
    
    
    
    
    
    
    
    
    
       public function Personal(){
            $this->view('paginas/Jefe/Personal');            
    }
    
     public function GesPer(){
        
            $this->usuarioModel=$this->model('Usuario');
            $usuarios = $this->usuarioModel->ObtenerTablaPer();
            $datos=[
            'Usuario'=>$usuarios
        ];
            
        
            $this->view('paginas/Jefe/GestionPersonal',$datos);            
    }
    
    
    
    
    
    
     public function EdiPer(){
            $this->view('paginas/Jefe/EditarPersonal');            
    }
    
     public function EliPer(){
            $this->view('paginas/Jefe/EliminarPersonal');            
    }
    
    
    
       public function GesNom(){
            $this->view('paginas/General/Reporte');            
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      public function Lista(){
        $this->usuarioModel=$this->model('Asistencia'); $this->usuarioModel->RegistrarAsistencia($_POST['Id']);
            $this->view('paginas/Asistencia/Asistencia');            
    }
    
    
    
    
    
    
    
    
}

?>