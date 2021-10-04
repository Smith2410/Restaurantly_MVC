<?php
    class Clientes extends Controllers
    {
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['activo'])) 
            {
                header("location: ".base_url());
            }
            parent::__construct();
        }
        public function Listar()
        {
            $data = $this->model->selectClientes();
            $this->views->getView($this, "Listar", $data, "");
        }
        public function nuevo()
        {
            $data = $this->model->selectClientes();         
            $this->views->getView($this, "Nuevo", $data, "");
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
                $insert = $this->model->insertarUsuarios($dni, $nombre, $apellidos, $telefono, $direccion, $hash, $rol);
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
            $id = $_GET['id'];
            $eliminar = $this->model->eliminarUsuarios($id);
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
            $id = $_GET['id'];
            $this->model->reingresarUsuarios($id);
            $this->model->selectUsuarios();
            header('location: ' . base_url() . 'Usuarios/Listar');
            //$this->views->getView($this, "Listar", $data);
            die();
        }
        public function login()
        {
            if (!empty($_POST['dni']) || !empty($_POST['contrasena'])) 
            {
                $dni = $_POST['dni'];
                $opcion = $_POST['optionsRadios'];
                $contrasena = $_POST['contrasena'];
                $hash = hash("SHA256", $contrasena);

                if ($opcion == "option2") {
                    $data = $this->model->selectUsuario($dni, $hash);
                    if (!empty($data)) {
                        $_SESSION['dni'] = $data['dni'];
                        $_SESSION['nombre'] = $data['nombre'];
                        $_SESSION['apellidos'] = $data['apellidos'];
                        $_SESSION['rol'] = $data['rol'];
                        $_SESSION['type'] = "usuario";
                        $_SESSION['activo'] = true;
                        header('location: '.base_url(). 'Admin/Listar');
                    } else {
                        $error = 0;
                        header("location: ".base_url().'Home/login'."?msg=$error");
                    }
                }
                if ($opcion == "option1") {
                    $data = $this->model->selectCliente($dni, $hash);
                    if (!empty($data)) {
                        $_SESSION['dni'] = $data['dni'];
                        $_SESSION['nombre'] = $data['nombre'];
                        $_SESSION['apellidos'] = $data['apellidos'];
                        $_SESSION['type'] = "cliente";
                        $_SESSION['activo'] = true;
                        header('location: '.base_url(). 'Admin/Listar');
                    } else {
                        $error = 0;
                        header("location: ".base_url().'Home/login'."?msg=$error");
                    }
                }
            }
        }
        public function cambiar()
        {
            $actual = $_POST['claves'];
            $hash = hash("SHA256", $actual['actual']);
            $nueva = hash("SHA256", $actual['nueva']);
            $data = $this->model->cambiarPass($hash);
            if ($data != null) 
            {
                echo 1;
                $this->model->cambiarContra($nueva, $data['id']);
            }  
        }
        public function salir()
        {
            session_destroy();
            header("Location: ".base_url());
        }
    }
?>