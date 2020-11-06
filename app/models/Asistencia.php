<?php
class Asistencia{
    private $db;
    public function __construct(){
        $this->db=new Base;
        
    }
    
public function obtenerAsTa(){
        $resultados=$this->db->query("select * from Asistencia,Empleado where Empleado.idEmpleado=Asistencia.IdEmpleado");
      
        return $resultados;
        
    
}


public function obtenerAsTaTod($id){
    $bind =array($id );
        $resultados=$this->db->query("select * from Asistencia,Empleado where Empleado.idEmpleado=Asistencia.IdEmpleado and Asistencia.idEmpleado = ?", $bind);
        return $resultados;
        
    
}







public function obtenerDia(){
        $resultados=$this->db->query("select Asistencia.idAsistencia, Empleado.idEmpleado, Empleado.Nombre, Turno.Turno, Asistencia.Fecha from Asistencia, Empleado, Turno where Empleado.idEmpleado=Asistencia.IdEmpleado and Empleado.Turno_idTurno = Turno.idTurno and Asistencia.Fecha=current_date();");
      
        return $resultados;
        
    
}

public function RegistrarAsistencia($id){
 
 $bind=array($id);
 
 $sql="Call Checking (?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;


}
}

?>