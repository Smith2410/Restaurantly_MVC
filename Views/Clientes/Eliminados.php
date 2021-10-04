<?php head() ?>

<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>usuarios eliminados</p>
            <div>
                <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Usuarios/listar">
                    <i class="icofont-plus"></i> lista de usuario
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>usuario</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>usuario</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data as $us) { ?>
                        <tr>
                            <td><?php echo $us['id']; ?></td>
                            <td><?php echo $us['nombre']; ?></td>
                            <td><?php echo $us['usuario']; ?></td>
                            <td><?php echo $us['correo']; ?></td>
                            <td><?php echo $us['rol']; ?></td>
                            <td>
                                <form action="<?php echo base_url() ?>Usuarios/reingresar?id=<?php echo $us['id']; ?>" method="post" class="d-inline confirmar">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-plus"></i>
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