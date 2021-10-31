<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
                if ($_SESSION['rol'] == "Administrador")
                {   ?>

                                <h3>Pedidos entregados</h3>
                                <div>
                                    <a class="btn btn-outline-danger" href="<?php echo base_url() ?>pedidos/pendientes">
                                        <i class="icofont-navigation-menu"></i> Pendientes
                                    </a>
                                    <a class="btn btn-outline-warning" href="<?php echo base_url() ?>pedidos/enviados">
                                        <i class="icofont-navigation-menu"></i> Enviados
                                    </a>
                                    <a class="btn btn-outline-info" href="<?php echo base_url() ?>pedidos/listar">
                                        <i class="icofont-navigation-menu"></i> Todos los pedidos
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Cliente</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Pago</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Envío</th>
                                                <th scope="col">Detalle</th>
                                                <th scope="col">Actualizar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $cl) { ?>
                                                <tr>
                                                    <td><?php echo $cl['numPedido']; ?></td>
                                                    <td><?php echo $cl['fecha']; ?></td>
                                                    <td><?php echo $cl['nombre']; ?></td>
                                                    <td><?php echo $cl['totalPagar']; ?></td>
                                                    <td><?php echo $cl['tipoPago']; ?></td>
                                                    <td><?php echo $cl['estado']; ?></td>
                                                    <td><?php echo $cl['tipoEnvio']; ?></td>
                                                    <td>
                                                        <a class="btn btn-success" href="#">
                                                            <i class="icofont-printer"></i>
                                                        </a>
                                                        <a class="btn btn-secondary" href="#">
                                                            <i class="icofont-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="#">
                                                            <i class="icofont-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                        <?php 
                }else{  ?>
                    <h3>Esta opcion solo es esta habilitado para administradores.</h3>
                    <?php 
                }
            }else{
                header("location: " . base_url());
            } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>