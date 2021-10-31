<?php
    class UsuariosModel extends Mysql{
        public $id, $clave, $nombre, $usuario, $correo, $rol;
        public function __construct()
        {
            parent::__construct();
        }
        public function selectUsuarios()
        {
            $sql = "SELECT * FROM usuarios WHERE estado = 1";
            $res = $this->select_all($sql);
            return $res;
        }
        public function selectInactivos()
        {
            $sql = "SELECT * FROM usuarios WHERE estado = 0";
            $res = $this->select_all($sql);
            return $res;
        }
        public function insertarUsuarios(int $dni, string $nombre, string $apellidos, string $contrasena, string $rol)
        {
            $return = "";
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->contrasena = $contrasena;
            $this->rol = $rol;
            $sql = "SELECT * FROM usuarios WHERE dni = '{$this->dni}'";
            $result = $this->select_all($sql);
            if (empty($result)) 
            {
                $query = "INSERT INTO usuarios(dni, nombre, apellidos, contrasena, rol) VALUES (?,?,?,?,?)";
                $data = array($this->dni, $this->nombre, $this->apellidos, $this->contrasena, $this->rol);
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
        public function eliminarUsuarios(int $dni)
        {
            $return = "";
            $this->dni = $dni;
            $query = "UPDATE usuarios SET estado = 0 WHERE dni=?";
            $data = array($this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
                
        public function reingresarUsuarios(int $dni)
        {
            $return = "";
            $this->dni = $dni;
            $query = "UPDATE usuarios SET estado = 1 WHERE dni=?";
            $data = array($this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function editarContrasena(int $dni)
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
        public function actualizarContrasena(string $contrasena, int $dni)
        {
            $return = "";
            $this->contrasena = $contrasena;
            $this->dni = $dni;

            $query = "UPDATE usuarios SET contrasena=? WHERE dni=?";
            $data = array($this->contrasena, $this->dni);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
    }
?>