<?php
    class Platillos extends Controllers
    {
        public function __construct()
        {
            session_start();
            parent::__construct();
        }

        public function listar()
        {
            $data = $this->model->selectPatillos();
            $this->views->getView($this, "Listar", $data, "");
        }

        public function inactivos()
        {
            $data = $this->model->selectPatillosInactivos();
            $this->views->getView($this, "Inactivos", $data, "");
        }

        public function all()
        {
            $data = $this->model->selectAll();
            $categoria = $this->model->selectCategorias();
            $this->views->getView($this, "All", $data, $categoria, "");
        }

        public function nuevo()
        {
            $data = $this->model->selectPatillos();
            $categoria = $this->model->selectCategorias();     
            $this->views->getView($this, "Nuevo", $data, $categoria, "");
        }

        public function insertar()
        {
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];
            $categoria_id = $_POST['categoria_id'];

            $img_name = $_FILES['imagen']['name'];
            $img_type = $_FILES['imagen']['type'];
            $img_size = $_FILES['imagen']['size'];
            $img_MaxSize = 5120000;
            $img_dir = "assets/img/platillos/";

            if (strpos($img_type, "jpeg") || strpos($img_type, "jpg") || strpos($img_type, "png"))
            {
                if ($img_size < $img_MaxSize) {
                    chmod($img_dir, 0777);
                    
                    switch ($img_type) {
                        case 'jpeg':
                            $img_Ex=".jpeg";
                            break;
                        case 'jpg':
                            $img_Ex=".jpg";
                            break;
                        case 'png':
                            $img_Ex=".png";
                            break;
                        default:
                            $img_Ex=".jpg";
                            break;
                    }
                    $img_FinalName=$codigo.$img_Ex;

                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $img_dir.$img_FinalName))
                    {
                        $insert = $this->model->insertarPlatillos($codigo, $nombre, $precio, $descripcion, $img_FinalName, $categoria_id);
                    }else{
                        $alert = 'error';
                    }
                }else{
                    $alert = 'error';
                }

            }else{
                echo "error";
            }

            
            if ($insert > 0) 
            {
                $alert = 'registrado';
            } else if ($insert == 'existe') 
            {
                $alert = 'existe';
            } else {
                $alert = 'error';
            }
            $this->model->selectPatillos();
            header("location: " . base_url() . "Platillos/Listar?msg=$alert");
            die();
        }

        public function editar()
        {
            $codigo = $_GET['codigo'];
            $data = $this->model->editarPatillos($codigo);
            $categoria = $this->model->selectCategorias();

            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Editar", $data, $categoria);
            }
        }

        public function actualizar()
        {
            
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];
            $categoria_id = $_POST['categoria_id'];

            $img_name = $_FILES['imagen']['name'];
            $img_type = $_FILES['imagen']['type'];
            $img_size = $_FILES['imagen']['size'];
            $img_MaxSize = 5120000;
            $img_dir = "assets/img/platillos/";

            $codigo = $_POST['codigo'];

            if (strpos($img_type, "jpeg") || strpos($img_type, "jpg") || strpos($img_type, "png"))
            {
                if ($img_size < $img_MaxSize) {
                    chmod($img_dir, 0777);
                    switch ($img_type) {
                        case 'jpeg':
                            $img_Ex=".jpeg";
                            break;
                        case 'jpg':
                            $img_Ex=".jpg";
                            break;
                        case 'png':
                            $img_Ex=".png";
                            break;
                        default:
                            $img_Ex=".jpg";
                            break;
                    }
                    $img_FinalName=$codigo.$img_Ex;

                    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $img_dir.$img_FinalName))
                    {

                       $alert ='error';
                    }else{
                        $alert = 'error';
                    }
                }else{
                    $alert = 'error';
                }

            }else{
                echo "error";
            }
            $actualizar = $this->model->actualizarPlatillos($nombre, $precio, $descripcion, $img_FinalName, $categoria_id, $codigo);
            
            if ($actualizar == 1) 
            {
                $alert =  'modificado';
            } else {
                $alert = 'error';
            }
            header("location: " . base_url() . "Platillos/Listar?msg=$alert");
            die();
        }

        public function eliminar()
        {
            $codigo = $_GET['codigo'];
            $eliminar = $this->model->eliminarPlatillos($codigo);
            $data = $this->model->selectPatillos();
            header('location: ' . base_url() . 'Platillos/Listar');
            die();
        }

        public function restaurar()
        {
            $codigo = $_GET['codigo'];
            $this->model->restaurarPlatillos($codigo);
            $data = $this->model->selectPatillos();
            header('location: ' . base_url() . 'Platillos/Listar');
            die();
        }

        public function ver()
        {
            $codigo = $_GET['codigo'];
            $data = $this->model->verPlatillos($codigo);
            if ($data == 0) {
                $this->Listar();
            } else {
                $this->views->getView($this, "Ver", $data);
            }
        }
    }
?>