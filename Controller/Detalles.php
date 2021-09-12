<?php
    class Detalles extends Controllers
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
        public function Listar()
        {
            $data = $this->model->selectCategorias();
            $this->views->getView($this, "Listar", $data, "");
        }
        public function nuevo()
        {
            $data = $this->model->selectCategorias();         
            $this->views->getView($this, "Nuevo", $data, "");
        }
        public function insertar()
        {
            $Categoria = $_POST['Categoria'];
            $insert = $this->model->insertarCategorias($Categoria);
            if ($insert > 0) 
            {
                $alert = 'registrado';
            } else if ($insert == 'existe') 
            {
                $alert = 'existe';
            } else {
                $alert = 'error';
            }
            $this->model->selectCategorias();
            header("location: " . base_url() . "Categorias/Listar?msg=$alert");
            die();
        }
        public function editar()
        {
            $id = $_GET['id'];
            $data = $this->model->editarCategorias($id);
            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Editar", $data);
            }
        }
        public function actualizar()
        {
            $id = $_POST['id'];
            $Categoria = $_POST['Categoria'];
            $actualizar = $this->model->actualizarCategorias($Categoria, $id);
            if ($actualizar == 1) 
            {
                $alert =  'modificado';
            } else {
                $alert = 'error';
            }
            header("location: " . base_url() . "Categorias/Listar?msg=$alert");
            die();
        }

        public function ver()
        {
            $id = $_GET['id'];
            $data = $this->model->verDetalles($id);
            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Ver", $data);
            }
        }
    }
?>