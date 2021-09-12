<?php
    class Cuenta_bancoModel extends Mysql{
        public $id, $numero, $nombre, $beneficiario, $tipo;
        public function __construct()
        {
            parent::__construct();
        }
        public function selectCuenta()
        {
            $sql = "SELECT * FROM cuentabanco";
            $res = $this->select($sql);
            return $res;
        }
        public function actualizarCuenta(int $numero, string $nombre, string $beneficiario, string $tipo, int $id)
        {
            $return = "";
            $this->numero = $numero;
            $this->nombre = $nombre;
            $this->beneficiario = $beneficiario;
            $this->tipo = $tipo;
            $this->id = $id;
            $query = "UPDATE cuentabanco SET numero=?, nombre=?, beneficiario=?, tipo=? WHERE id=?";
            $data = array($this->numero, $this->nombre, $this->beneficiario, $this->tipo, $this->id);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
    }
?>