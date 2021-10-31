<?php
    class Clientes extends Controllers
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
            $data = $this->model->selectClientes();
            $this->views->getView($this, "Listar", $data, "");
        }

        public function insertar()
        {
            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $contrasena = $_POST['contrasena'];
            $confirmar = $_POST['confirmar'];
            $hash = hash("SHA256", $contrasena);
            if ($contrasena != $confirmar) 
            {
                $alert = array('mensaje' => 'no');
            } else {
                $insert = $this->model->insertarClientes($dni, $nombre, $apellidos, $telefono, $direccion, $hash);
                if ($insert > 0) 
                {
                    $alert = 'registrado';
                } else if ($insert == 'existe') 
                {
                    $alert = 'existe';
                } else {
                    $alert = 'error';
                }
            }
            $data = $this->model->selectClientes();
            header("location: " . base_url() . "Clientes/Listar?msg=$alert");
            die();
        }

        public function editar()
        {
            $dni = $_GET['dni'];
            $data = $this->model->editarClientes($dni);
            if ($data == 0) 
            {
                $this->Listar();
            } else {
                $this->views->getView($this, "Editar", $data);
            }
        }
        public function actualizar()
        {
            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            
            $actualizar = $this->model->actualizarClientes($nombre, $apellidos, $telefono, $direccion, $dni);
            if ($actualizar == 1) 
            {
                $alert = 'modificado';
            } else {
                $alert =  'error';
            }
            $data = $this->model->selectClientes();
            header("location: " . base_url() . "Clientes/Listar?msg=$alert");
            die();
        }
        public function eliminar()
        {
            $dni = $_GET['dni'];
            $eliminar = $this->model->eliminarClientes($dni);
            $data = $this->model->selectClientes();
            header("location: " . base_url() . "Clientes/Listar");
            die();
        }
        public function eliminados()
        {
            $data = $this->model->selectInactivos();
            $this->views->getView($this, "Eliminados", $data, "");
            
        }
        public function reingresar()
        {
            $dni = $_GET['dni'];
            $this->model->reingresarClientes($dni);
            $this->model->selectClientes();
            header('location: ' . base_url() . 'Clientes/Listar');
            //$this->views->getView($this, "Listar", $data);
            die();
        }

        public function cambiar()
        {
            $dni = $_GET['dni'];
            $data = $this->model->editarContrasena($dni);
            if ($data == 0) 
            {
                $this->Listar();
            } else {
                $this->views->getView($this, "Password", $data);
            }
        }
        public function actualizarContrasena()
        {
            $dni = $_POST['dni'];

            $actual = $_POST['actual'];
            $nueva = $_POST['nueva'];

            $hash = hash("SHA256", $actual);
            $contrasena = hash("SHA256", $nueva);

            $actualizar = $this->model->actualizarContrasena($contrasena, $dni);
            if ($actualizar == 1) 
            {
                $alert = 'modificado';
            } else {
                $alert =  'error';
            }
            $data = $this->model->selectClientes();
            header("location: " . base_url() . "Clientes/Listar?msg=$alert");
            die();
        }

        public function recovery()
        {
            $dni = $_POST['dni'];
            $telefono = $_POST['telefono'];

            $newPass = $_POST['newPass'];
            $newPass2 = $_POST['newPass2'];

            $contrasena = hash("SHA256", $newPass);
            if ($newPass != $newPass2) 
            {
                $alert = array('mensaje' => 'no');
            } else {
                $actualizar = $this->model->recuperarContrasena($contrasena, $telefono, $dni);
                if ($actualizar == 1) 
                {
                    $alert = 'modificado';
                } else {
                    $alert =  'error';
                }
            }
            $data = $this->model->selectUsuarios();
            header("location: " . base_url() . "Clientes/Listar?msg=$alert");
            die();
        }

        public function salir()
        {
            session_destroy();
            header("Location: ".base_url());
        }
    }
?>