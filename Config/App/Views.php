<?php 
class Views{
      public function getView($ruta, $vista, $data="")
      {
        if ($ruta == "home") {
            $vista = "views/".$vista.".php";
        }else{
            $vista = "views/".$ruta."/".$vista.".php";
        }
        require_once $vista;
      }
}
?>