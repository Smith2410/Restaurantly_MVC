<?php
    class ClientesModel extends Mysql{
        public $id, $nombre, $apellidos, $telefono, $direccion, $contrasena;
        public function __construct()
        {
            parent::__construct();
        }
        public function selectClientes()
        {
            $sql = "SELECT * FROM clientes WHERE estado = 1";
            $res = $this->select_all($sql);
            return $res;
        }
        public function selectInactivos()
        {
            $sql = "SELECT * FROM clientes WHERE estado = 0";
            $res = $this->select_all($sql);
            return $res;
        }
        public function insertarClientes(int $dni, string $nombre, string $apellidos, int $telefono, string $direccion, string $contrasena)
        {
            $return = "";
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
            $this->contrasena = $contrasena;
            $sql = "SELECT * FROM clientes WHERE dni = '{$this->dni}'";
            $result = $this->select_all($sql);
            if (empty($result)) 
            {
                $query = "INSERT INTO clientes(dni, nombre, apellidos, telefono, direccion, contrasena) VALUES (?,?,?,?,?,?)";
                $data = array($this->dni, $this->nombre, $this->apellidos, $this->telefono, $this->direccion, $this->contrasena);
                $resul = $this->insert($query, $data);
                $return = $resul;
            }else {
                $return = "existe";
            }
            return $return;
        }
        public function editarClientes(int $dni)
        {
            $this->dni = $dni;
            $sql = "SELECT * FROM clientes WHERE dni = '{$this->dni}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
        public function actualizarClientes(string $nombre, string $apellidos, int $telefono, string $direccion, int $dni)
        {
            $return = "";
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
            $this->dni = $dni;
            $query = "UPDATE clientes SET nombre=?, apellidos=?, telefono=?, direccion=? WHERE dni=?";
            $data = array($this->nombre, $this->apellidos, $this->telefono, $this->direccion, $this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
        public function eliminarClientes(int $dni)
        {
            $return = "";
            $this->dni = $dni;
            $query = "UPDATE clientes SET estado = 0 WHERE dni=?";
            $data = array($this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
        
        public function reingresarClientes(int $dni)
        {
            $return = "";
            $this->dni = $dni;
            $query = "UPDATE clientes SET estado = 1 WHERE dni=?";
            $data = array($this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function editarContrasena(int $dni)
        {
            $this->dni = $dni;
            $sql = "SELECT * FROM clientes WHERE dni = '{$this->dni}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
        public function actualizarContrasena(string $contrasena, int $dni)
        {
            $return = "";
            $this->contrasena = $contrasena;
            $this->dni = $dni;
            
            $query = "UPDATE clientes SET contrasena=? WHERE dni=?";
            $data = array($this->contrasena, $this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function recuperarContrasena(string $contrasena, int $telefono, int $dni)
        {
            $return = "";
            $this->contrasena = $contrasena;
            $this->telefono = $telefono;
            $this->dni = $dni;

            $sql = "SELECT * FROM clientes WHERE dni = '{$this->dni}' AND telefono = '{$this->telefono}'";
            $result = $this->select_all($sql);
            if (!empty($result)) 
            {

                $query = "UPDATE clientes SET contrasena=? WHERE dni=?";
                $data = array($this->contrasena, $this->dni);
                $resul = $this->update($query, $data);
                $return = $resul;
            }else {
                $return = "error";
            }
            return $return;
        }
    }
?>