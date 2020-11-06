<?php
class Usuario{
    private $db;
    public function __construct(){
        $this->db=new Base;
        
    }
    
    public function obtenerUsuario(){
    $resultados=$this->db->queryOne("select max(idEmpleado) as 'idE' from Empleado");
        return $resultados;
        
    }
    
  public function agregarUsuario($datos){
        $bind=array(
              $datos['Id'],
              $datos['Nombre'],
              $datos['Curp'],
              $datos['Rfc'],
              $datos['Telefono'],
              $datos['Correo'],
              $datos['Rol'],
              $datos['Turno'],
              $datos['Salario'],
              $datos['Fecha'],
              $datos['NSS'],
              $datos['SalMen']

                    );
        $sql="INSERT INTO Empleado (idEmpleado, Nombre, Curp, RFC, Telefono, Correo, Puesto_idPuesto, Turno_idTurno, Salario, FechaIng, NSS, SalarioMes) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
      
      
      
  }
      public function agregarPer($datos){
        $bind=array(
              $datos['Nombre'],
              $datos['Userr'],
              $datos['Contraseña'],
              $datos['Tipo'],
             

                    );
        $sql="INSERT INTO Usuario (Nombre, Usuario, Contraseña, Tipo) VALUES (?,?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
 
 
    }
    public function ModificarUsuario($datos){
        $bind=array(
              
              $datos['Nombre'],
              $datos['Curp'],
              $datos['Rfc'],
              $datos['Telefono'],
              $datos['Correo'],
              $datos['Rol'],
              $datos['Turno'],
              $datos['Salario'],
              $datos['Fecha'],
              $datos['NSS'],
              $datos['SalMen'],
            $datos['Id']
                    );
       
       $sql="UPDATE Empleado SET Nombre = ?, Curp = ?, RFC = ?, Telefono = ?, Correo = ?, Puesto_idPuesto = ?, Turno_idTurno = ?, Salario = ?, FechaIng = ?, NSS = ?, SalarioMes = ? WHERE idEmpleado = ? " ;
        $resultado =$this->db->queryOne($sql,$bind);
        return (is_array($resultado))?true:false;
 
    }
    
    
    
    
     public function ModificarPer($datos){
        $bind=array(
              
              $datos['Nombre'],
              $datos['Usuario'],
              $datos['Contraseña'],
              $datos['Tipo'],
              $datos['Id']
                    );
       $sql="UPDATE Usuario SET Nombre = ?, Usuario = ?, Contraseña = ?, Tipo = ? WHERE idUsuario = ? " ;
        $resultado =$this->db->queryOne($sql,$bind);
        return (is_array($resultado))?true:false;
 
    }

public function obtenerUsuarioId($id){
        $bind=array($id);
        $sql="SELECT * FROM Empleado WHERE idEmpleado = ?";
        $renglon =$this->db->queryOne($sql,$bind);
        

        return $renglon;

    }

    public function obtenerUsuarioIdN($id){
        $bind=array($id);
        $sql="SELECT * FROM Empleado, Turno, Puesto  WHERE idEmpleado = ? and Turno.idTurno = Empleado.Turno_idTurno and Puesto.idPuesto = Empleado.Puesto_idPuesto";
        $renglon =$this->db->queryOne($sql,$bind);
       

        return $renglon;

    }
    
    
    
    
    public function obtenerPerId($id){
        $bind=array($id);
        $sql="SELECT * FROM Usuario WHERE idUsuario = ?";
        $renglon =$this->db->queryOne($sql,$bind);
        

        return $renglon;

    }
    
    public function EliminarUsuario($datos){
        $bind=array($datos['Id']);
        $sql="DELETE FROM Empleado WHERE idEmpleado = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    
    public function EliminarPer($datos){
        $bind=array($datos['Id']);
        $sql="DELETE FROM Usuario WHERE idUsuario = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    
    
    
  public function ObtenerTabla(){
    $resultados=$this->db->query("select Empleado.idEmpleado, Empleado.Nombre, Puesto.Puesto, Turno.Turno from Empleado, Puesto, Turno where Puesto.idPuesto = Empleado.Puesto_idPuesto and Turno.idTurno = Empleado.Turno_idTurno  ");
        return $resultados;
        
    }
    
    
    
    
    public function ObtenerTablaPer(){
    $resultados=$this->db->query("select * from Usuario");
        return $resultados;
        
    }

 
 
  public function obtenerEsp($datos){
    $bind=array($datos);
    $resultados=$this->db->query("select Empleado.idEmpleado, Empleado.Nombre, Puesto.Puesto, Turno.Turno from Empleado, Puesto, Turno where Puesto.idPuesto = Empleado.Puesto_idPuesto and Turno.idTurno = Empleado.Turno_idTurno and Empleado.idEmpleado = ?", $bind);
        return $resultados;
    
        
    }
 public function obtenerPer($id){
      $bind=array($id);
        $sql="SELECT * FROM Usuario WHERE idUsuario = ?";
        $renglon =$this->db->query($sql,$bind);
        

        return $renglon;
    
        
    }


public function VasisD(){
    $bind=array($datos['Id']);
        $sql="select FROM Empleado.idEmpleado, Empleado.Nombre, Empleado.Turno_idTurno Where Asistencia.idEmpleado = Empleado.idEmpleado and ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
}

public function VasisT(){
    $bind=array($datos['Id']);
        $sql="select FROM Empleado.idEmpleado, Empleado.Nombre, Empleado.Turno_idTurno Where Asistencia.idEmpleado = Empleado.idEmpleado and ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
}



















public function Horario(){
   
    $resultados=$this->db->queryOne("select * from Turno where idTurno = 1");
        return $resultados;
    
        
    }

public function Horario2(){
   
    $resultados=$this->db->queryOne("select * from Turno where idTurno = 2");
        return $resultados;
    
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     public function GuardarNo($datos){
        $bind=array(
              $datos['Empleado_Puesto'],
              $datos['Empleado_salario'],
              $datos['Turno_idTurno'],
              $datos['BonoAsistencia'],
              $datos['BonoPuntualidad'],
              $datos['PrimaVacacional'],
              $datos['ISR'],
              $datos['IMSS'],
              $datos['FondoVi'],
              $datos['Empleado_idEmpleado'],
              $datos['Vacaciones'],
              $datos['SueldoMensual'],
              $datos['SueldoTotal'],
              $datos['TotalPerc'],
              $datos['TotalDeduc'],
              $datos['SalBaCo']

                    );
        $sql="INSERT INTO Nomina (Empleado_Puesto, Empleado_Salario, Turno_idTurno, BonoAsistencia, BonoPuntualidad, PrimaVacacional, ISR, IMSS, FondoVi, Empleado_idEmpleado, Vacaciones, SueldoMensual, SueldoTotal, TotalPerc, TotalDeduc, SalBaCo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

      
        
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
      
      
      
  }
    
    
    
    
    
    
    
    
    
      public function obtenerTablaNo(){
    $resultados=$this->db->query("select * from Nomina, Empleado Where Nomina.Empleado_idEmpleado=Empleado.idEmpleado order by Fecha DESC");
        return $resultados;
        
    }

    
       public function obtenerIDT($Tur){
    $bind=array($Tur);
 
    $sql="select * from Turno where Turno = ? ";
       $renglon =$this->db->queryOne($sql,$bind);

        return $renglon;
        
    }
       public function obtenerIDP($Pue){
        $bind=array($Pue);
   
    $sql="select * from Puesto where Puesto = ? ";
        $renglon =$this->db->queryOne($sql,$bind);

        return $renglon;
        
    }
    
    
    
    
    public function obtenerNominaId($id){
        $bind=array($id);
        $sql="select * from Nomina, Empleado Where Nomina.Empleado_idEmpleado=Empleado.idEmpleado and Nomina.idNom = ? ";
        $renglon =$this->db->queryOne($sql,$bind);
        

        return $renglon;

    }
    
    
      public function obtenerNomId($id){
        $bind=array($id);
        $sql="select * from Nomina, Empleado Where Nomina.Empleado_idEmpleado=Empleado.idEmpleado and Empleado.idEmpleado = ? order by Nomina.Fecha DESC";
        $renglon =$this->db->query($sql,$bind);
       

        return $renglon;

    }
    
    
    
     public function EliminarNomina($datos){
        $bind=array($datos['IDN']);
        $sql="DELETE FROM Nomina WHERE idNom = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       public function ONom($Pue){
        $bind=array($Pue);
   
    $sql="select * from Empleado, Nomina, Puesto, Turno where Empleado.idEmpleado = Nomina.Empleado_idEmpleado and Nomina.idNom = ? and Empleado.Puesto_idPuesto = Puesto.idPuesto and Empleado.Turno_idTurno = Turno.idTurno; ";
        $renglon =$this->db->queryOne($sql,$bind);

        return $renglon;
        
    }
    
    


}

?>