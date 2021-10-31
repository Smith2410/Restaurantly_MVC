<?php
    class HomeModel extends Mysql{
        public $usuario, $clave;
        public function __construct()
        {
            parent::__construct();
        }

        public function selectPlatillos()
        {
            $sql = "SELECT * FROM platillos WHERE estado = 1 LIMIT 12";
            $res = $this->select_all($sql);
            return $res;
        }


        public function selectUsuario(string $dni, string $contrasena)
        {
            $this->dni = $dni;
            $this->contrasena = $contrasena;
            $sql = "SELECT * FROM usuarios WHERE dni = '{$this->dni}' AND contrasena = '{$this->contrasena}'";
            $res = $this->select($sql);
            return $res;
        }
        public function selectCliente(string $dni, string $contrasena)
        {
            $this->dni = $dni;
            $this->contrasena = $contrasena;
            $sql = "SELECT * FROM clientes WHERE dni = '{$this->dni}' AND contrasena = '{$this->contrasena}'";
            $res = $this->select($sql);
            return $res;
        }
    }
?>