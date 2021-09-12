<?php head() ?>

<section id="book-a-table" class="book-a-table book-a-table-padding">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Categorias</p>
            <div>
                <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Categorias/nuevo">
                    <i class="icofont-plus"></i> Nueva categoria
                </a>
                <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Categorias/inactivos">
                    <i class="icofont-plus"></i> Inactivos
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data as $cl) { ?>
                        <tr>
                            <td><?php echo $cl['id']; ?></td>
                            <td><?php echo $cl['categoria']; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>Categorias/editar?id=<?php echo $cl['id']; ?>" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="<?php echo base_url() ?>Categorias/eliminar?id=<?php echo $cl['id']; ?>" method="post" class="d-inline elim">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                <a href="<?php echo base_url() ?>Categorias/ver?id=<?php echo $cl['id']; ?>" class="btn btn-secondary">
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