<?php
    class CarritoModel extends Mysql{
        public $id, $codigo, $cantidad;
        public function __construct()
        {
            parent::__construct();
        }
        public function add(string $codigo, int $cantidad)
        {
            $return = "";
            $this->codigo = $codigo;
            $this->cantidad = $cantidad;

            $_SESSION['carro'][$codigo] = array('producto' => $codigo, 
                                                    'cantidad' => $cantidad
                                                    );
        }
    }
?>