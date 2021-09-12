<?php
    class Admin extends Controllers{
        protected $totalPagar, $tot = 0;
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['activo'])) 
            {
                header("location: " . base_url());
            }
            parent::__construct();
        }

        public function Listar()
        {
            $data = $this->model->selectPlatillos();
            $this->views->getView($this, "Listar", $data, "");
        }
        public function administracion()
        {
            $data = $this->model->selectPlatillos();
            $this->views->getView($this, "Administracion", $data, "");
        }

        public function platillos()
        {
            $data = $this->model->selectAllPlatillos();
            $this->views->getView($this, "Platillos/Listar", $data, "");
        }

        public function ver()
        {
            $codigo = $_GET['codigo'];
            $data = $this->model->verPlatillos($codigo);
            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Platillos/Ver", $data);
            }
        }
    }
?>