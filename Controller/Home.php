<?php
    class Home extends Controllers{
        public function __construct()
        {
            session_start();
            if (!empty($_SESSION['activo'])) 
            {
                header("location: " . base_url()."Admin/Listar");
            }
            parent::__construct();
        }
        
        public function Listar()
        {
            $data = $this->model->selectPlatillos();
            $this->views->getView($this, "home", $data, "");
        }

        public function platillos()
        {
            $data = $this->model->selectAllPlatillos();
            $categoria = $this->model->selectCategorias();
            $this->views->getView($this, "Platillos", $data, $categoria, "");
        }

        public function ver()
        {
            $codigo = $_GET['codigo'];
            $data = $this->model->verPlatillos($codigo);
            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Detalle", $data);
            }
        }

        public function verc()
        {
            $id = $_GET['id'];
            $data = $this->model->verCategorias($id);
            $categoria = $this->model->selectCategorias();
            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Verc", $data, $categoria);
            }
        }

        public function Nuevo()
        {
            $this->views->getView($this, "Nuevo");
        }

        public function login()
        {
            $this->views->getView($this, "Login");
        }
    }
?>