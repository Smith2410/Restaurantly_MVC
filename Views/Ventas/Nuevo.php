<?php head() ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card mt-3">
            <div class="card-header">
                Nueva Venta
            </div>
            <div class="card-body">

                <!-- Obtener datos de producto -->
                <form action="" method="post" id="frmCompras" class="row" autocomplete="off">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="buscar_codigo">Cógigo de barras</label>
                            <input type="hidden" id="id" name="id">
                            <input id="buscar_codigo" onkeyup="BuscarCodigo(event);" class="form-control" type="text" name="codigo" placeholder="Código de barras">
                            <span class="text-danger d-none" id="error">No hay producto</span>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="nombre">Producto</label>
                            <input id="nombre" class="form-control" type="hidden" name="nombre">
                            <br />
                            <strong id="nombreP"></strong>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input id="stockD" type="hidden">
                            <input id="cantidad" class="form-control" type="text" name="cantidad" onkeyup="IngresarCantidad(event);">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input id="precio" class="form-control" type="hidden" name="precio">
                            <br />
                            <strong id="precioP"></strong>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="table-responsive">

                    <!-- Tabla listado con datos obtenidos de productos-->
                    <table class="table table-bordered" id="tablaCompras" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody id="ListaCompras">
                            <!-- contenido de datos obtenidos -->    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">

        <!-- Informacion de cliente -->
        <div class="card mt-3">
            <div class="card-header">
                Datos del Cliente
            </div>
            <div class="card-body">
                <input type="hidden" id="id_cliente" name="id_cliente">
                <input type="text" id="ruc_cliente" onkeyup="BuscarCliente(event);" name="ruc_cliente" class="form-control" placeholder="Ruc/Dni del cliente">
                <strong id="nom_cli" class="form-control border-0 font-weight-bold text-primary"></strong>
                <strong id="dir_cli" class="form-control border-0 font-weight-bold text-primary"></strong>
                <strong id="tel_cli" class="form-control border-0 font-weight-bold text-primary"></strong>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        
        <!-- Informacion de pago -->
        <div class="card mt-3">
            <div class="card-header">
                Total a pagar
            </div>
            <div class="card-body">
                <input type="hidden" id="total" name="total" class="form-control  mb-2">
                <strong id="tVenta" class="form-control border-0 font-weight-bold text-success"></strong>
            </div>
            <div class="card-footer">
                <button class="btn btn-danger" type="button" id="AnularCompra">
                    <i class="fas fa-window-close"></i> Anular Venta
                </button>
                <button class="btn btn-success" type="button" id="procesarVenta">
                    <i class="fas fa-chart-bar"></i> Procesar Venta
                </button>
            </div>
        </div>
    </div>
</div>
<?php footer() ?>