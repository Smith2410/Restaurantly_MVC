<?php
    class Home extends Controllers{
        public function __construct()
        {
            session_start();
            parent::__construct();
        }
        
        public function Listar()
        {
            $data = $this->model->selectPlatillos();
            $this->views->getView($this, "home", $data, "");
        }

        public function registro()
        {
            $this->views->getView($this, "Registro");
        }

        public function login()
        {
            $this->views->getView($this, "Login");
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
                        header('location: '.base_url());
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
                        header('location: '.base_url());
                    } else {
                        $error = 0;
                        header("location: ".base_url().'Home/login'."?msg=$error");
                    }
                }
            }
        }

        public function forgot()
        {
            $this->views->getView($this, "Recuperar");
        }

    }
?>