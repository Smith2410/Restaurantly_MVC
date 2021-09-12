<?php
    class Cuenta_banco extends Controllers
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
            $data = $this->model->selectCuenta();
            $this->views->getView($this, "Listar", $data, "");
        }

        public function actualizar()
        {
            $id = $_POST['id'];
            $numero = $_POST['numero'];
            $nombre = $_POST['nombre'];
            $beneficiario = $_POST['beneficiario'];
            $tipo = $_POST['tipo'];
            $actualizar = $this->model->actualizarCuenta($numero, $nombre, $beneficiario, $tipo, $id);
            if ($actualizar == 1) 
            {
                $alert =  'modificado';
            } else {
                $alert = 'error';
            }
            $data = $this->model->selectCuenta();
            $this->views->getView($this, "Listar", $data, $alert);
            die();
        }
    }
?>