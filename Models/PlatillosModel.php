<?php
    class PlatillosModel extends Mysql{
        public $id, $CodigoProd, $NombreProd, $Categoria_id, $Precio, $Descuento, $Descripcion, $Imagen, $Imagen_FinalName;
        public function __construct()
        {
            parent::__construct();
        }
        public function selectPatillos()
        {
            # $sql = "SELECT * FROM platillos WHERE estado = 0";

            $sql = "SELECT *, categorias.id as categoriaId
                    FROM platillos
                    INNER JOIN categorias
                    ON platillos.categoria_id = categorias.id WHERE platillos.estado=1
            ";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectCategorias()
        {
            $sql = "SELECT * FROM categorias WHERE estado = 1
            ";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectPatillosInactivos()
        {
            # $sql = "SELECT * FROM platillos WHERE estado = 0";
            $sql = "SELECT *, categorias.id as categoriaId
                    FROM platillos
                    INNER JOIN categorias
                    ON platillos.categoria_id = categorias.id WHERE platillos.estado=0";

            $res = $this->select_all($sql);
            return $res;
        }

        public function selectAll()
        {
            $sql = "SELECT * FROM platillos WHERE estado = 1";
            $res = $this->select_all($sql);
            return $res;
        }

        public function insertarPlatillos(string $codigo, string $nombre, int $precio, int $descuento, string $descripcion, string $img_FinalName, int $categoria_id)
        {
            $return = "";
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->descuento = $descuento;
            $this->descripcion = $descripcion;
            $this->img_FinalName = $img_FinalName;
            $this->categoria_id = $categoria_id;

            $sql = "SELECT * FROM platillos WHERE codigo = '{$this->codigo}'";
            $result = $this->select_all($sql);
            if (empty($result)) 
            {
                $query = "INSERT INTO `platillos`(`codigo`, `nombre`, `precio`, `descuento`, `descripcion`, `imagen`, `categoria_id`) VALUES (?,?,?,?,?,?,?,?)";
                $data = array($this->codigo, $this->nombre, $this->precio, $this->descuento, $this->descripcion, $this->img_FinalName, $this->categoria_id);
                $resul = $this->insert($query, $data);
                $return = $resul;
            }else {
                $return = "existe";
            }
            return $return;
        }

        public function editarPatillos(string $codigo)
        {
            $this->codigo = $codigo;
            $sql = "SELECT * FROM platillos WHERE codigo = '{$this->codigo}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
        
        public function actualizarPlatillos(string $nombre, int $precio, int $descuento, string $descripcion, string $img_FinalName, int $categoria_id, string $codigo)
        {
            $return = "";
            
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->descuento = $descuento;
            $this->descripcion = $descripcion;
            $this->img_FinalName = $img_FinalName;
            $this->categoria_id = $categoria_id;
            $this->codigo = $codigo;

            $query = "UPDATE platillos SET nombre=?, precio=?, descuento=?, descripcion=?, imagen=?, categoria_id=? WHERE codigo=?";
            $data = array($this->nombre, $this->precio, $this->descuento, $this->descripcion, $this->img_FinalName, $this->categoria_id, $this->codigo);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function eliminarPlatillos(string $codigo)
        {
            $return = "";
            $this->codigo = $codigo;
            $query = "UPDATE platillos SET estado = 0 WHERE codigo=?";
            $data = array($this->codigo);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
        public function restaurarPlatillos(string $codigo)
        {
            $return = "";
            $this->codigo = $codigo;
            $query = "UPDATE platillos SET estado = 1 WHERE codigo=?";
            $data = array($this->codigo);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function verPlatillos(string $codigo)
        {
            $this->codigo = $codigo;
            $sql = "SELECT * FROM platillos WHERE codigo = '{$this->codigo}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
    }
?>