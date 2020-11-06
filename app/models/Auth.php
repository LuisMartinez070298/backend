<?php
class Auth{
    private $db;
    public function __construct(){
        $this->db=new Base;
        
    }
    
    public function buscarUsuario($datos){

            $bind=array($datos['Usuario'],$datos['Contraseña']);
            $sql="select * from Usuario where Usuario=? and Contraseña=? ";
            $renglon=$this->db->queryOne($sql,$bind);

            return $renglon;
        
        
        
    }
}

?>