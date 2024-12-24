<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
        
    }

    /*====================================================
   AQUI LO QUE ESTAMOS HACIENDO ES ENVIAR O PASAR EL TITULO
   A LA PAGINA DE LOS PRODUCTOS
   ======================================================= */
   public function shop($page)
   {
  
       $data['perfil'] = 'no';
       $pagina = (empty($page)) ? 1 : $page ;
       $porPagina = 20;
       $desde = ($pagina - 1) * $porPagina;
       $data['title'] = 'Nuestro Productos';
       $data['productos'] = $this->model->getProductos($desde, $porPagina);
       $data['pagina'] = $pagina;
       $total = $this->model->getTotalProductos();
       $data['total'] = ceil($total['total'] / $porPagina);
       $this->views->getView('principal', "shop", $data);
   }
   
    /*====================================================
   AQUI LO QUE ESTAMOS HACIENDO ES ENVIAR O PASAR EL TITULO
   A LA PAGINA DE LOS NUEVOS PRODUCTOS
   ======================================================= */
   public function detail($id_producto)
   {
      
       $data['perfil'] = 'no';
       $data['producto'] = $this->model->getProducto($id_producto);
       if (empty($data['producto'])) {
           echo 'Pagina no encontrada';
           exit;
       }
       $id_categoria = $data['producto']['id_categoria'];
       $data['relacionados'] = $this->model->getAleatorios($id_categoria, $data['producto']['id']);

       //SCANNER DE GALERIA 
       $result = array();
       $directorio = 'assets/img/productos/' . $id_producto;
       if (file_exists($directorio)) {
           $imagenes = scandir($directorio);
           if (false !== $imagenes) {
               foreach ($imagenes as $file) {
                   if ('.' != $file && '..' != $file) {
                       array_push($result, $file);
                   }
               }
           }
       }
       $data['imagenes'] = $result;

       $data['title'] = $data['producto']['nombre'];
       $this->views->getView('principal', "detail", $data);
   }

  /*====================================================
                      VISTA CATEGORIAS
   ======================================================= */
   public function categorias($datos)
   {
       
       $data['perfil'] = 'no';
       $id_categoria = 1;
       $page = 1;
       $array = explode(',', $datos);
       if (isset($array[0])) {
           if (!empty($array[0])) {
               $id_categoria = $array[0];
           }
       }
       if (isset($array[1])) {
           if (!empty($array[1])) {
               $page = $array[1];
           }
       }
       $pagina = (empty($page)) ? 1 : $page ;
       $porPagina = 16;
       $desde = ($pagina - 1) * $porPagina;

       $data['pagina'] = $pagina;
       $total = $this->model->getTotalProductosCat($id_categoria);
       $data['total'] = ceil($total['total'] / $porPagina);

       $data['productos'] = $this->model->getProductosCat($id_categoria, $desde, $porPagina);
       $data['title'] = 'Categorias';
       $data['id_categoria'] = $id_categoria;
       $this->views->getView('principal', "categorias", $data);
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
        OBTENER PRODUCTO  PARTIR DEl CARRITO COMPRAS
   ======================================================= */
   public function listaProductos()
   {
       $datos = file_get_contents('php://input');
       $json = json_decode($datos, true);
       $array['productos'] = array();
       $total = 0.00;
       if (!empty($json)) {
           foreach ($json as $producto) {
               $result = $this->model->getProducto($producto['idProducto']);
               $data['id'] = $result['id'];
               $data['nombre'] = $result['nombre'];
               $data['precio'] = $result['precio'];
               $data['cantidad'] = $producto['cantidad'];
               $data['imagen'] = $result['imagen'];
               $subTotal = $result['precio'] * $producto['cantidad'];
               $data['subTotal'] = number_format($subTotal, 2);
               array_push($array['productos'], $data);
               $total += $subTotal;
           }
       }        
       $array['total'] = number_format($total, 2);
       $array['totalPaypal'] = number_format($total, 2, '.', '');
       $array['moneda'] = MONEDA;
       echo json_encode($array, JSON_UNESCAPED_UNICODE);
       die();
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