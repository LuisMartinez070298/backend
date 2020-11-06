<?php class Usuarios extends Controller{
    public function __construct(){
        
        $this->usuarioModel=$this->model('Usuario');
    }
    public function index(){
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        $datos=[
            'usuarios'=>$usuarios  
        ];
       $this->view('paginas/Usuarios/usuarios',$datos);
    }
    
    public function agregar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $usuarios=$this->usuarioModel->obtenerUsuario();
            $datos=[
              'Id'=> $usuarios['idE']+1, 
              'Nombre'=> trim($_POST['Nombre']),
              'Curp'=> trim($_POST['Curp']),
              'Rfc'=> trim($_POST['Rfc']),
              'Telefono'=> trim($_POST['Telefono']),
              'Correo'=> trim($_POST['Correo']),
              'NSS'=> (int)trim($_POST['NSS']),
              'Rol'=> (int)trim($_POST['Rol']),
              'Turno'=> (int)trim($_POST['Turno']),
              'Salario'=> (Double)trim($_POST['Salario']),
              'Fecha'=> trim($_POST['Fecha']),
              'SalMen' => (Double)trim($_POST['Salario'])*30.4
                
            ];
            if($this->usuarioModel->agregarUsuario($datos)){
            $datos=['Mensaje'=> 'Se ha registrado correctamente'];
            $this->view('paginas/Jefe/Agregar',$datos);
            }else{
                
            }
        }
        else{
            $datos=[
                
                 'Nombre'=> '',
                 'Curp'=> '',
                 'Rfc'=> '',
                 'Telefono'=> '',
                 'Correo'=> '',
                 'NSS'=> '', 
                 'Rol'=> '',
                 'Turno'=> '',
                 'Salario'=> '',
                 'Fechas'=> '',
                 'Mensaje'=> '',

                
            ];
            $this->view('paginas/Jefe/Agregar',$datos);
            
        }
        
    }
   
   
   
   
      
    public function eliminar($id){
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'Id'=> trim($_POST['IDEmp'] ),
              'Nombre'=> trim($_POST['Nombre']), 
              'Rol'=> (int)trim($_POST['Rol']),
              'Turno'=> (int)trim($_POST['Turno']),
             
                
            ];
            if($this->usuarioModel->EliminarUsuario($datos)){
           $datos=[
              'Id'=> '',
              'Nombre'=> '', 
              'Rol'=> '',
              'Turno'=> '',
              'Mensaje'=> 'Se ha eliminado con exito',
             
                
            ];
            $this->view('paginas/Jefe/Eliminar',$datos);
            
            
            }else{
                 $datos=['Mensaje'=> 'No se ha modificado correctamente'];
            }
        }
        else{
            
            $usuario=$this->usuarioModel->obtenerUsuarioId($id);
        
            $datos=[
                 'Id' =>$usuario ['idEmpleado'],
                 'Nombre'=> $usuario['Nombre'],
                 'Rol'=> $usuario['Puesto_idPuesto'],
                 'Turno'=> $usuario['Turno_idTurno'],
                 'Mensaje'=> '',
                
            ];
            $this->view('paginas/Jefe/Eliminar',$datos);
            
        }
    }
    
   
   
   
   
   
   
   
   
    public function agregarPer(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $usuarios=$this->usuarioModel->obtenerUsuario();
            $datos=[
              'Nombre'=> trim($_POST['Nombre']), 
              'Userr'=> trim($_POST['Userr']),
              'Contraseña'=> trim($_POST['Contraseña']),
              'Tipo'=> trim($_POST['Tipo'])
              
                
            ];
            if($this->usuarioModel->agregarPer($datos)){
            $datos=['Mensaje'=> 'Se ha registrado correctamente'];
            $this->view('paginas/Jefe/Personal',$datos);
            }else{
                
            }
        }
        else{
            $datos=[
                
                 'Nombre'=> '',
                 'Userr'=> '',
                 'Contraseña'=> '',
                 'Tipo'=> '',
                

                
            ];
            $this->view('paginas/Jefe/Personal',$datos);
            
        }
        
    }
   
   
   
   
   
   
   
   
   
   
    
    
    
    
       public function editar($id){
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'Id'=> trim($_POST['Id'] ),
              'Nombre'=> trim($_POST['Nombre']),
              'Curp'=> trim($_POST['Curp']),
              'Rfc'=> trim($_POST['Rfc']),
              'Telefono'=> trim($_POST['Telefono']),
              'Correo'=> trim($_POST['Correo']),
              'NSS'=> (int)trim($_POST['NSS']),
              'Rol'=> (int)trim($_POST['Rol']),
              'Turno'=> (int)trim($_POST['Turno']),
              'Salario'=> (Double)trim($_POST['Salario']),
              'Fecha'=> trim($_POST['Fecha']),
              'SalMen' => (Double)trim($_POST['Salario'])*30.4,
              'Mensaje'=> 'Se ha modificado correctamente'
                
            ];
            if($this->usuarioModel->ModificarUsuario($datos)){
           
            $this->view('paginas/Jefe/Editar',$datos);
            
            
            }else{
                 $datos=['Mensaje'=> 'No se ha modificado correctamente'];
            }
        }
        else{
            
            $usuario=$this->usuarioModel->obtenerUsuarioId($id);
        
            $datos=[
                 'Id' =>$usuario ['idEmpleado'],
                 'Nombre'=> $usuario['Nombre'],
                 'Curp'=> $usuario['Curp'],
                 'Rfc'=> $usuario['RFC'],
                 'Telefono'=> $usuario['Telefono'],
                 'Correo'=> $usuario['Correo'],
                 'NSS'=> $usuario['NSS'], 
                 'Rol'=> $usuario['Puesto_idPuesto'],
                 'Turno'=> $usuario['Turno_idTurno'],
                 'Salario'=> $usuario['Salario'],
                 'Fecha'=> $usuario['FechaIng'],
                 'Mensaje'=> '',

                
            ];
            $this->view('paginas/Jefe/Editar',$datos);
            
        }
    }
    
    
    
    
    
    
    
    
    
    public function editarPer($id){
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
               'Id'=> trim($_POST['Id']),
              'Nombre'=> trim($_POST['Nombre'] ),
              'Usuario'=> trim($_POST['Usuario']),
              'Contraseña'=> trim($_POST['Contraseña']),
              'Tipo'=> trim($_POST['Tipo']),
              'Mensaje'=> 'Se ha modificado correctamente'
                
            ];
            if($this->usuarioModel->ModificarPer($datos)){
           
            $this->view('paginas/Jefe/EditarPersonal',$datos);
            
            
            }else{
                 $datos=['Mensaje'=> 'No se ha modificado correctamente'];
            }
        }
        else{
            
            $usuario=$this->usuarioModel->obtenerPerId($id);
      
            $datos=[
               'Id' => $usuario['idUsuario'],
                 'Nombre' =>$usuario['Nombre'],
                 'Usuario'=> $usuario['Usuario'],
                 'Contraseña'=> $usuario['Contraseña'],
                 'Tipo'=> $usuario['Tipo'],
                 
                 'Mensaje'=> '',

                
            ];
            $this->view('paginas/Jefe/EditarPersonal',$datos);
            
        }
    }
    
     
    public function eliminarPer($id){
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'Id'=> trim($_POST['Id'] ),
              'Nombre'=> trim($_POST['Nombre']), 
              'Usuario'=> trim($_POST['Usuario']),
            
             
                
            ];
            if($this->usuarioModel->EliminarPer($datos)){
           $datos=[
              'Id'=> '',
              'Nombre'=> '', 
              'Usuario'=> '',
              'Mensaje'=> 'Se ha eliminado con exito',
             
                
            ];
            $this->view('paginas/Jefe/EliminarPersonal',$datos);
            
            
            }else{
                 $datos=['Mensaje'=> 'No se ha modificado correctamente'];
            }
        }
        else{
            
            $usuario=$this->usuarioModel->obtenerPerId($id);
        
            $datos=[
                 'Id' =>$usuario ['idUsuario'],
                 'Nombre'=> $usuario['Nombre'],
                 'Usuario'=> $usuario['Usuario'],
                 
                 'Mensaje'=> '',
                
            ];
            $this->view('paginas/Jefe/EliminarPersonal',$datos);
            
        }
    }
    
    
    
 
   
     public function Busqueda(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            
        $usuario=$this->usuarioModel->obtenerEsp($_POST['ID']);
        
        
        if(empty($usuario)){
            $usuario=null;
        }
        if($usuario!=null){
        $datos=[
            'Empleado'=>$usuario  
        ];
        
       $this->view('paginas/Jefe/Empleados',$datos);
        }else{
        $datos=[
            'Mensaje'=>'Empleado no encontrado'  
        ];
        
       $this->view('paginas/Jefe/Empleados',$datos);
            
        }
    }
    
     } 
    
    
         public function BusquedaPer(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuarios=$this->usuarioModel->obtenerPer($_POST['ID']);
        if(empty($usuario)){
            
            $usuario=null;
        }
        if($usuarios!=null){
        $datos=[
            'Usuario'=>$usuarios  
        ];
        
        $this->view('paginas/Jefe/GestionPersonal',$datos);
        }else{
        $datos=[
            'Mensaje'=>'Empleado no encontrado'  
        ];
  
       $this->view('paginas/Jefe/GestionPersonal',$datos);
        }
    }
}
   
   public function VerAsisStencia(){
     if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'Id'=> trim($_POST['IDEmp'] ),
              'Nombre'=> trim($_POST['Nombre']), 
              'Turno'=> (int)trim($_POST['Turno']),
             
                
            ];
    
   }
   }
   
   public function VerAsistenciaTod(){
     if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'Id'=> trim($_POST['IDEmp'] ),
              'Nombre'=> trim($_POST['Nombre']), 
              'Turno'=> (int)trim($_POST['Turno']),
             
                
            ];
   }
   }
   
   
   
   
   
   
   
   
   
   
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function Carga (){
        
            $usuario=$this->usuarioModel->obtenerUsuarioIdN($_POST['ID']);
                 if($usuario){
            $datos=[
                 'ID' =>$usuario ['idEmpleado'],
                 'Nombre'=> $usuario['Nombre'],
                 'Telefono'=> $usuario['Telefono'],
                 'Correo'=> $usuario['Correo'],
                 'RFC'=> $usuario['RFC'],
                 'Correo'=> $usuario['Correo'],
                 'Curp'=> $usuario['Curp'],
                 'N.S.S'=> $usuario['NSS'],
                 'Rol'=> $usuario['Puesto'],
                 'Turno'=> $usuario['Turno'],
                 'Salario'=> $usuario['Salario'],
                 'SalarioMes'=> $usuario['SalarioMes'],
                 'Fecha'=> $usuario['FechaIng'],
                 'Mensaje'=> '',

                
            ];
                 }else{
                    
                     $datos=[
                'ID'=>'',
                 'Nombre'=> '',
                 'Telefono'=>'',
                 'Correo'=> '',
                 'RFC'=> '',
                 'Correo'=> '',
                 'Curp'=> '',
                 'N.S.S'=> '',
                 'Rol'=> '',
                 'Turno'=> '',
                 'Salario'=> '',
                 'SalarioMes' =>'',
                 'Fecha'=> '',
                 'Mensaje'=> 'Empleado no encontrado', 
                 ]; }
                 
            $this->view('paginas/Contaduria/Nomina',$datos);
            
        
        
        
    }
    
    
    public function eliminarNom($id){
        
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'IDN'=> trim($_POST['IDN'] ),
              'IDE'=> trim($_POST['IDE']), 
              'Nombre'=> (int)trim($_POST['Nombre']),
              'Fecha'=> (int)trim($_POST['Fecha'])
             
                
            ];
            
            if($this->usuarioModel->EliminarNomina($datos)){
           $datos=[
              'IDN'=> '',
              'IDE'=> '', 
              'Nombre'=> '',
              'Fecha'=> '',
              'Mensaje'=> 'Se ha eliminado con exito',
             
                
            ];
            $this->view('paginas/General/VerNomina',$datos);
            
            
            }else{
                 $datos=['Mensaje'=> 'No se ha modificado correctamente'];
            }
        }
        else{
            
            $usuario=$this->usuarioModel->obtenerNominaId($id);
        
            $datos=[
                 'IDN' =>$usuario ['idNom'],
                 'IDE'=> $usuario['Empleado_idEmpleado'],
                 'Nombre'=> $usuario['Nombre'],
                 'Fecha'=> $usuario['Fecha'],
                 'Mensaje'=> '',
                
            ];
            $this->view('paginas/General/VerNomina',$datos);
            
        }
    }
    
    
    
    
    
    
    
    
    
    
      public function BusquedaNom(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuarios=$this->usuarioModel->obtenerNomId($_POST['ID']);
        if($usuarios){
        $datos=[
            
            'Nomina'=>$usuarios
            
        ];
        
       $this->view('paginas/General/Reporte',$datos);
        }else{
             $datos=[
            'Mensaje'=>'No se encontró el empleado'  
        ];
              $this->view('paginas/General/Reporte',$datos);
        }
        
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
   
   
    
    public function toPdf($id){
        
    $usuario=$this->usuarioModel->ONom($id);
        
       
            $registros=[
                         'idEmp'=> $usuario['idEmpleado'],
                         'Nombre'=> $usuario['Nombre'],
                         'Curp'=> $usuario['Curp'],
                         'RFC'=> $usuario['RFC'],
                         'Telefono'=> $usuario['Telefono'],
                         'Correo'=> $usuario['Correo'],
                         'Puesto'=> $usuario['Puesto'],
                         'Turno'=> $usuario['Turno'],
                         'Salario'=> $usuario['Salario'],
                         'FechaEntrada'=> $usuario['FechaIng'],
                         'NSS'=> $usuario['NSS'],
                         'SalarioMes'=> $usuario['SalarioMes'],
                         'idNomina'=> $usuario['idNom'],
                         'EmpleadoPuesto'=> $usuario['Empleado_Puesto'],
                         'EmpleadoSalario'=> $usuario['Empleado_Salario'],
                         'Turno_id'=> $usuario['Turno_idTurno'],
                         'Fecha'=> $usuario['Fecha'],
                         'BonoA'=> $usuario['BonoAsistencia'],
                         'BonoP'=> $usuario['BonoPuntualidad'],
                         'PrimVa'=> $usuario['PrimaVacacional'],
                         'ISR'=> $usuario['ISR'],
                         'IMSS'=> $usuario['IMSS'],
                         'FondoVivienda'=> $usuario['FondoVi'],
                         'EmpID'=> $usuario['Empleado_idEmpleado'],
                         'Vacaciones'=> $usuario['Vacaciones'],
                         'SueldoMES'=> $usuario['SueldoMensual'],
                         'SueldoTot'=> $usuario['SueldoTotal'],
                         'TPercepciones'=> $usuario['TotalPerc'],
                         'TDeducciones'=> $usuario['TotalDeduc'],
                         'SalBaseCoti'=> $usuario['SalBaCo']
                         ];
        
     
        $this->view('paginas/Imprimir/impresion', $registros);
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     public function Guardar (){
        if($_SERVER['REQUEST_METHOD']=='POST'){
          
           $T=$this->usuarioModel->obtenerIDP($_POST['Puesto']);
           $R=$this->usuarioModel->obtenerIDT($_POST['Turno']);
            $datos=[
                 'Empleado_Puesto'=> (int) $T['idPuesto'],
                 'Empleado_salario'=>(Double) trim($_POST['Salario']),
                 'Turno_idTurno'=> (int )$R['idTurno'],
                 'BonoAsistencia'=>(Double)trim($_POST['BonoAA']),
                 'BonoPuntualidad'=>(Double) trim($_POST['BonoPP']),
                 'PrimaVacacional'=> (Double)trim($_POST['VacacionesP']),
                 'ISR'=> (Double)trim($_POST['ISR']),
                 'IMSS'=>(Double)trim($_POST['IMSS']),
                 'FondoVi'=>(Double)trim($_POST['Fondo']),
                 'Empleado_idEmpleado'=>(int)trim($_POST['ID']),
                 'Vacaciones'=> (Double)trim($_POST['Vacaciones']),
                 'SueldoMensual'=> (Double)trim($_POST['SalarioMes']),
                 'SueldoTotal'=>(Double)trim($_POST['T']),
                 'TotalPerc'=> (Double)trim($_POST['Tp']),
                 'TotalDeduc'=> (Double)trim($_POST['Td']),
                 'SalBaCo'=>(Double)trim($_POST['SalarioBC']),
                 'Mensaje' => 'Se ha guardado con exito la nomina'
                 

                
            ];
            
            if($this->usuarioModel->GuardarNo($datos)){
                $F=$this->usuarioModel->obtenerTablaNo();
                $datos=['Nomina'=>$F];
                $this->view('paginas/General/Reporte', $datos);
                                    }
       
            
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

?>