<?php
    class Carrito extends Controllers
    {
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['activo'])) 
            {
                header("location: " . base_url());
            }
            parent::__construct();
        }

        public function add()
        {
            $codigo = $_POST['codigo'];
            $cantidad = $_POST['cantidad'];
            $data = $this->model->add($codigo, $cantidad);


            if(empty($_SESSION['carro'][$codigo]))
            {
                
$this->views->getView($this, "carrito", $data, "");
            }else{
echo "error";
            }
        }

    }
?>