<?php 
    
    head();
?>

<section id="about" class="about about-padding">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content">
                <h3>Pedido #<?php echo $data['numPedido']; ?></h3>

                <h2>Platillos</h2>
                <div class="table-responsive">
                    <table class="table table-bordered" style="background-color: #cda45e; border-radius: 10px;">
                        <thead>
                            <tr>
                                <th>Platillo</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($platillo as $pl)
                                {
                                    if ($data['codigoProd'] == $pl['codigo']) {
                                    ?>
                                        <tr>
                                            <td><?php echo $pl['nombre']; ?></td>
                                            <td><?php echo $pl['precio']; ?></td>
                                            <td><?php echo $data['cantidadProductos']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                } ?>
                        </tbody>
                    </table>
                </div>

                <h2>Pedido</h2>
                
                <?php foreach ($pedido as $p)
                    { 
                        if ($data['numPedido'] == $p['numPedido']) {
                        ?>
                            <div class="container row">
                                <div class="col-lg-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="background-color: #cda45e; border-radius: 10px;">
                                            <tbody>
                                                <?php if ($_SESSION['type'] == "usuario") {
                                                    ?>
                                                        <tr>
                                                            <td>Cliente</td>
                                                            <td><?php echo $p['nombre'].' '.$p['apellidos']; ?></td>
                                                        </tr>
                                                    <?php
                                                } ?>
                                                <tr>
                                                    <td>Fecha</td>
                                                    <td><?php echo $p['fecha']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Total a pagar</td>
                                                    <td><?php echo $p['totalPagar']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tipo de pago</td>
                                                    <td><?php echo $p['tipoPago']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tipo de envio</td>
                                                    <td><?php echo $p['tipoEnvio']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Direccion de envio</td>
                                                    <td><?php echo $p['referencia']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Estado del pedido</td>
                                                    <td><?php echo $p['estado']; ?></td>
                                                </tr>
                                                <?php if ($_SESSION['rol'] == "Administrador") {
                                                    ?>
                                                        <tr>
                                                            <td>Repartidor</td>
                                                            <td><?php echo $p['nombre'].' '.$p['apellidos']; ?></td>
                                                        </tr>
                                                    <?php
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <?php 
                                        if(is_file("assets/img/comprobantes/".$p['adjunto']))
                                        {
                                            ?>
                                            <label>Adjunto</label><br>
                                            <a href="<?php echo base_url(); ?>assets/img/comprobantes/<?php echo $p['adjunto']; ?>" target="_blank" class="btn btn-outline-warning">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/comprobantes/<?php echo $p['adjunto']; ?>">
                                            </a>
                                            <?php
                                        }else{
                                            ?>
                                            <label>Adjunto</label>
                                            <p>No hay comprobante de pago</p>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    } ?>                
            </div>
        </div>
    </div>
</section>

<?php footer() ?>