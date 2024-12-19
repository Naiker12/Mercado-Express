<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
        
    }

    public function shop()
    {
       
        $data['perfil'] = 'no';
        $data['title'] = 'Productos';
        $this->views->getView('principal', "shop", $data);
    }



  /*====================================================
   AQUI LO QUE ESTAMOS HACIENDO ES ENVIAR O PASAR EL TITULO
   A LA PAGINA DE LOS CONTACTO
   ======================================================= */
    public function contact()
    {
       
        $data['perfil'] = 'no';
        $data['title'] = 'Contactos';
        $this->views->getView('principal', "contact", $data);
    }

  /*====================================================
                  VISTA DE BLOG
   =======================================================*/
   public function blog()
   {
      
       $data['perfil'] = 'no';
       $data['title'] = 'Blog';
       $this->views->getView('principal', "blog", $data);
   }

    /*====================================================
                 VISTA LISTA DE DESEO 
   ======================================================= */
    public function deseo()
    {
       
        $data['perfil'] = 'no';
        $data['title'] = 'Tu lista de deseo';
        $this->views->getView('principal', "deseo", $data);
    }

    public function tiendas()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'Tiendas';
        $this->views->getView('principal', "tiendas", $data);
    }


    public function ordenes()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'perfil de usuario';
        $this->views->getView('principal/perfil', "ordenes", $data);
    }

    public function completado()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'perfil de usuario';
        $this->views->getView('principal/perfil', "completado", $data);
    }

    public function pendiente()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'perfil de usuario';
        $this->views->getView('principal/perfil', "pendiente", $data);
    }

    public function localizacion()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'perfil de usuario';
        $this->views->getView('principal/perfil', "localizacion", $data);
    }

    public function notificaciones()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'perfil de usuario';
        $this->views->getView('principal/perfil', "notificaciones", $data);
    }

    public function pagos()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'perfil de usuario';
        $this->views->getView('principal/perfil', "pagos", $data);
    }

    public function configuracion()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'perfil de usuario';
        $this->views->getView('principal/perfil', "configuracion", $data);
    }
}