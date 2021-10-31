<?php
    class Pedidos extends Controllers
    {
        public function __construct()
        {
            session_start();
            parent::__construct();
        }
        public function listar()
        {
            $data = $this->model->selectPedidos();
            $this->views->getView($this, "Listar", $data, "");
        }

        public function pendientes()
        {
            $data = $this->model->selectPendientes();
            $this->views->getView($this, "Pendientes", $data, "");
        }

        public function enviados()
        {
            $data = $this->model->selectEnviados();
            $this->views->getView($this, "Enviados", $data, "");
        }

        public function entregados()
        {
            $data = $this->model->selectEntregados();
            $this->views->getView($this, "Entregados", $data, "");
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
            $id = $_GET['id'];
            $data = $this->model->verCategorias($id);
            $categoria = $this->model->selectCategorias();
            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Ver", $data, $categoria);
            }
        }


    }
?>