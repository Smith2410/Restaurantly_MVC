<?php
    class Detalles extends Controllers
    {
        public function __construct()
        {
            session_start();
            parent::__construct();
        }
        public function listar()
        {
            $data = $this->model->selectCategorias();
            $this->views->getView($this, "Listar", $data, "");
        }

        public function inactivos()
        {
            $data = $this->model->selectCategoriasInactivos();
            $this->views->getView($this, "Inactivos", $data, "");
        }

        public function insertar()
        {
            $categoria = $_POST['categoria'];
            $insert = $this->model->insertarCategorias($categoria);
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
            $categoria = $_POST['categoria'];
            $actualizar = $this->model->actualizarCategorias($categoria, $id);
            if ($actualizar == 1) 
            {
                $alert =  'modificado';
            } else {
                $alert = 'error';
            }
            header("location: " . base_url() . "Categorias/Listar?msg=$alert");
            die();
        }

        public function eliminar()
        {
            $id = $_GET['id'];
            $eliminar = $this->model->eliminarCategorias($id);
            $data = $this->model->selectCategorias();
            header('location: ' . base_url() . 'Categorias/Listar');
            die();
        }
        public function restaurar()
        {
            $id = $_GET['id'];
            $this->model->restaurarCategorias($id);
            $data = $this->model->selectCategorias();
            header('location: ' . base_url() . 'Categorias/Listar');
            die();
        }

        public function ver()
        {
            $numPedido = $_GET['numPedido'];
            $data = $this->model->verDetalles($numPedido);
            $detalle = $this->model->selectDetalles();
            $platillo = $this->model->selectPlatillos();
            $pedido = $this->model->selectPedidos();

            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Ver", $data, $detalle, $platillo, $pedido);
            }
        }


    }
?>