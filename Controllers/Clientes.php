<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Clientes extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        //session_destroy();
    }
    
    public function index()
    {
        
        $data['perfil'] = 'si';
        $data['title'] = 'Tu Perfil';
        $this->views->getView('principal/perfil', "ordenes", $data);
    }

    public function salir()
    {
        session_destroy();
        header('Location: ' . BASE_URL);
    }
}