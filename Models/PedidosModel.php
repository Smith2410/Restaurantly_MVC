<?php
    class PedidosModel extends Mysql{
        public $id;
        public function __construct()
        {
            parent::__construct();
        }

        public function selectPedidos()
        {
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
                        v.usuario_dni
                    FROM ventas v INNER JOIN clientes c ON v.cliente_dni=c.dni INNER JOIN usuarios u ON v.usuario_dni=u.dni";  
            $res = $this->select_all($sql);
            return $res;
        }
        public function selectPendientes()
        {
            $sql = "SELECT *, clientes.dni as clienteDNI
                    FROM ventas
                    INNER JOIN clientes
                    ON ventas.cliente_dni = clientes.dni WHERE ventas.estado='Pendiente'
            ";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectEnviados()
        {
            $sql = "SELECT *, clientes.dni as clienteDNI
                    FROM ventas
                    INNER JOIN clientes
                    ON ventas.cliente_dni = clientes.dni WHERE ventas.estado='Enviado'
            ";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectEntregados()
        {
            $sql = "SELECT *, clientes.dni as clienteDNI
                    FROM ventas
                    INNER JOIN clientes
                    ON ventas.cliente_dni = clientes.dni WHERE ventas.estado='Entregado'
            ";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectPedidoss()
        {
            $sql = "SELECT * FROM ventas";
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
            $sql = "SELECT * FROM usuarios WHERE rol = 'repartidor'";
            $res = $this->select_all($sql);
            return $res;
        }

        public function selectCategoriasInactivos()
        {
            $sql = "SELECT * FROM categorias WHERE estado = 0";
            $res = $this->select_all($sql);
            return $res;
        }

        public function insertarCategorias(string $categoria)
        {
            $return = "";
            $this->categoria = $categoria;
            $sql = "SELECT * FROM categorias WHERE id = '{$this->id}'";
            $result = $this->select_all($sql);
            if (empty($result)) 
            {
                $query = "INSERT INTO categorias(categoria) VALUES (?)";
                $data = array($this->categoria);
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
            $sql = "SELECT * FROM categorias WHERE id = '{$this->id}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }
        public function actualizarCategorias(String $categoria, int $id)
        {
            $return = "";
            $this->categoria = $categoria;
            $this->id = $id;
            $query = "UPDATE categorias SET categoria=? WHERE id=?";
            $data = array($this->categoria, $this->id);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function eliminarCategorias(int $id)
        {
            $return = "";
            $this->id = $id;
            $query = "UPDATE categorias SET estado = 0 WHERE id=?";
            $data = array($this->id);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }
        public function restaurarCategorias(int $id)
        {
            $return = "";
            $this->id = $id;
            $query = "UPDATE categorias SET estado = 1 WHERE id=?";
            $data = array($this->id);
            $resul = $this->update($query, $data);
            $return = $resul;
            return $return;
        }

        public function verCategorias(int $id)
        {
            $this->id = $id;
            $sql = "SELECT * from platillos inner join categorias on platillos.categoria_id = categorias.id WHERE platillos.estado=1 AND platillos.categoria_id = '{$this->id}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }

        public function verPlatillosCategoria(int $id)
        {
            $this->id = $id;
            $sql = "SELECT * FROM platillos WHERE categoria_id = '{$this->id}'";
            $res = $this->select($sql);
            if (empty($res)) 
            {
                $res = 0;
            }
            return $res;
        }

    }
?>