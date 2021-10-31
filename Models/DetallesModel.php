<?php
    class DetallesModel extends Mysql{
        public $numPedido, $codigoProd, $cantidadProductos, $precioProd, $pedido, $contrasena;
        public function __construct()
        {
            parent::__construct();
        }

        public function verDetalles(string $numPedido)
        {
            $this->numPedido = $numPedido;
            $sql = "SELECT * FROM detalles WHERE numPedido = '{$this->numPedido}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }

        public function selectDetalles()
        {
            $sql = "SELECT * FROM detalles";
            $res = $this->select($sql);
            return $res;
        }

        public function selectPlatillos()
        {
            $sql = "SELECT * FROM platillos";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectPedidoss()
        {
            $sql = "SELECT * FROM ventas";
            $res = $this->select_all($sql);
            return $res;
        }
        public function selectPedidos()
        {
            # $sql = "SELECT * FROM platillos WHERE estado = 0";

            
            $sql = "SELECT *,
                        c.nombre as cliente,
                        u.nombre as usuario,
                        v.numPedido,
                        v.fecha,
                        v.cliente_dni,
                        v.totalPagar,
                        v.tipoPago,
                        v.tipoEnvio,
                        v.estado,
                        v.usuario_dni,
                        v.adjunto
                    FROM ventas v INNER JOIN clientes c ON v.cliente_dni=c.dni INNER JOIN usuarios u ON v.usuario_dni=u.dni";  
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectClientes()
        {
            $sql = "SELECT * FROM clientes";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectUsuarios()
        {
            $sql = "SELECT * FROM usuarios";
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