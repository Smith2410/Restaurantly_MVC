<?php
    class DetallesModel extends Mysql{
        public $Numpedido, $CodigoProd, $CantidadProductos, $PrecioProd;
        public function __construct()
        {
            parent::__construct();
        }
        public function selectCategorias()
        {
            $sql = "SELECT * FROM categoria";
            $res = $this->select_all($sql);
            return $res;
        }
        public function insertarCategorias(string $Categoria)
        {
            $return = "";
            $this->Categoria = $Categoria;
            $sql = "SELECT * FROM categoria WHERE id = '{$this->id}'";
            $result = $this->select_all($sql);
            if (empty($result)) 
            {
                $query = "INSERT INTO categoria(Categoria) VALUES (?)";
                $data = array($this->Categoria);
                $resul = $this->insert($query, $data);
                $return = $resul;
            }else {
                $return = "existe";
            }
            return $return;
        }
        public function editarCategorias(int $id)
        {
            $this->id = $id;
            $sql = "SELECT * FROM categoria WHERE id = '{$this->id}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
        public function actualizarCategorias(String $Categoria, int $id)
        {
            $return = "";
            $this->Categoria = $Categoria;
            $this->id = $id;
            $query = "UPDATE categoria SET Categoria=? WHERE id=?";
            $data = array($this->Categoria, $this->id);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function verDetalles(int $id)
        {
            $this->id = $id;
            $sql = "SELECT * FROM detalle WHERE NumPedido = '{$this->id}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
    }
?>