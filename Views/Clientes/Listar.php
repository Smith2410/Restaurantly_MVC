<?php head() ?>
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Clientes</p>
            <div>
                <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Clientes/nuevo">
                    <i class="icofont-plus"></i> Nuevo cliente
                </a>
                <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Clientes/eliminados">
                    <i class="icofont-plus"></i>Usuario inactivos
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $us) { ?>
                        <tr>
                            <td><?php echo $us['dni']; ?></td>
                            <td><?php echo $us['nombre']; ?></td>
                            <td><?php echo $us['apellidos']; ?></td>
                            <td><?php echo $us['telefono']; ?></td>
                            <td><?php echo $us['direccion']; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>Clientes/editar?dni=<?php echo $us['dni']; ?>" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="<?php echo base_url() ?>Clientes/eliminar?dni=<?php echo $us['dni']; ?>" method="post" class="d-inline elim">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<?php footer() ?>