<?php
    class AdminModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }
    
        public function selectPlatillos()
        {
            $sql = "SELECT * FROM platillos WHERE estado = 1 LIMIT 8";
            $res = $this->select_all($sql);
            return $res;
        }
        public function selectAllPlatillos()
        {
            $sql = "SELECT * FROM platillos WHERE estado = 1";
            $res = $this->select_all($sql);
            return $res;
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