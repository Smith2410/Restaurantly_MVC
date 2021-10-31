<?php
    class Usuarios extends Controllers
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
            $data = $this->model->selectUsuarios();
            $this->views->getView($this, "Listar", $data, "");
        }
        public function nuevo()
        {
            $data = $this->model->selectUsuarios();         
            $this->views->getView($this, "Nuevo", $data, "");
        }
        public function insertar()
        {
            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $contrasena = $_POST['contrasena'];
            $rol = $_POST['rol'];
            $confirmar = $_POST['confirmar'];
            $hash = hash("SHA256", $contrasena);
            if ($contrasena != $confirmar) 
            {
                $alert = array('mensaje' => 'no');
            } else {
                $insert = $this->model->insertarUsuarios($dni, $nombre, $apellidos, $hash, $rol);
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

            $data = $this->model->selectUsuarios();
            header("location: " . base_url() . "Usuarios/Listar?msg=$alert");
            die();
        }
        public function editar()
        {
            $dni = $_GET['dni'];
            $data = $this->model->editarUsuarios($dni);
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
            $rol = $_POST['rol'];

            $actualizar = $this->model->actualizarUsuarios($nombre, $apellidos, $rol, $dni);
            if ($actualizar == 1) 
            {
                $alert = 'modificado';
            } else {
                $alert =  'error';
            }
            $data = $this->model->selectUsuarios();
            header("location: " . base_url() . "Usuarios/Listar?msg=$alert");
            die();
        }
        public function eliminar()
        {
            $dni = $_GET['dni'];
            $eliminar = $this->model->eliminarUsuarios($dni);
            $data = $this->model->selectUsuarios();
            header("location: " . base_url() . "Usuarios/Listar");
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
            $this->model->reingresarUsuarios($dni);
            $this->model->selectUsuarios();
            header('location: ' . base_url() . 'Usuarios/Listar');
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
            $data = $this->model->selectUsuarios();
            header("location: " . base_url() . "Usuarios/Listar?msg=$alert");
            die();
        }

        public function salir()
        {
            session_destroy();
            header("Location: ".base_url());
        }
    }
?>