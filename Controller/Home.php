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

        public function buscar()
        {
            $search = $_GET['search'];
            $data = $this->model->buscarPlatillo($search);

        }

        public function log_in()
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

    }
?>