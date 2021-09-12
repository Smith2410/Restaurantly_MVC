<?php head() ?>

<section id="book-a-table" class="book-a-table book-a-table-padding">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Categorias</p>
          <div>
            <a class="btn btn-outline-success" href="<?php echo base_url(); ?>Ventas/Nueva">
            <i class="fas fa-plus"></i> Nueva venta
        </a>
          </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Tipo pago</th>
                        <th>Envio</th>
                        <th>Adjunto</th>
                        <th>Direccion</th>
                        <th>Repartidor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numero</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Tipo pago</th>
                        <th>Envio</th>
                        <th>Adjunto</th>
                        <th>Direccion</th>
                        <th>Repartidor</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data as $cl) { ?>
                        <tr>
                            <td><?php echo $cl['numPedido']; ?></td>
                            <td><?php echo $cl['fecha']; ?></td>
                            <td><?php echo $cl['totalPagar']; ?></td>
                            <td><?php echo $cl['estado']; ?></td>
                            <td><?php echo $cl['tipoPago']; ?></td>
                            <td><?php echo $cl['tipoEnvio']; ?></td>
                            <td><?php echo $cl['adjunto']; ?></td>
                            <td><?php echo $cl['usuario_dni']; ?></td>
                            <td><?php echo $cl['referencia']; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>Ventas/editar?id=<?php echo $cl['NumPedido']; ?>" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="<?php echo base_url() ?>Ventas/eliminar?id=<?php echo $cl['NumPedido']; ?>" method="post" class="d-inline elim">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                <a href="<?php echo base_url() ?>Detalles/ver?id=<?php echo $cl['NumPedido']; ?>" class="btn btn-secondary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

      </div>
    </section>

<?php footer() ?>