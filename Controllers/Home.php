<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
        //session_destroy();
    }

    public function index()
    {

        $data['perfil'] = 'no';
        $data['title'] = 'Mercado Express';
        $data['categorias'] = $this->model->getCategorias();
        $data['nuevoProductos'] = $this->model->getNuevosProductos();
        $this->views->getView('home', "index", $data);
    }



}