<?php
    class ClientesModel extends Mysql{
        public $id, $clave, $nombre, $usuario, $correo, $rol;
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
        public function insertarUsuarios(int $dni, string $nombre, string $apellidos, int $telefono, string $direccion, string $contrasena)
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
        public function editarUsuarios(int $dni)
        {
            $this->dni = $dni;
            $sql = "SELECT * FROM usuarios WHERE dni = '{$this->dni}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
        public function actualizarUsuarios(string $nombre, string $apellidos, string $rol, int $dni)
        {
            $return = "";
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->rol = $rol;
            $this->dni = $dni;
            $query = "UPDATE usuarios SET nombre=?, apellidos=?, rol=? WHERE dni=?";
            $data = array($this->nombre, $this->apellidos, $this->rol, $this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
        public function eliminarUsuarios(int $id)
        {
            $return = "";
            $this->id = $id;
            $query = "UPDATE usuarios SET estado = 0 WHERE id=?";
            $data = array($this->id);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
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
        
        public function reingresarUsuarios(int $id)
        {
            $return = "";
            $this->id = $id;
            $query = "UPDATE usuarios SET estado = 1 WHERE id=?";
            $data = array($this->id);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
        public function cambiarPass(string $clave)
        {
            $this->clave = $clave;
            $query = "SELECT * FROM usuarios WHERE clave = '$clave'";
            $resul = $this->select($query);
            return $resul;
        }
        public function cambiarContra(string $clave, int $id)
        {
            $this->clave = $clave;
            $this->id = $id;
            $query = "UPDATE usuarios SET clave = ? WHERE id = ?";
            $data = array($this->clave, $this->id);
            $resul = $this->update($query, $data);
            return $resul;
        }
    }
?>