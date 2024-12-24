<?php
class AdminModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }


    public function getUsuario($correo)
    {
        $sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
        return $this->select($sql);
    }

}
 
?>