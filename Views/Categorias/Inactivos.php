<?php head() ?>

<section id="book-a-table" class="book-a-table book-a-table-padding">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Categorias</p>
            <div>
              	<a class="btn btn-outline-warning" href="<?php echo base_url() ?>Categorias/listar">
                    <i class="icofont-return"></i> volver
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
                    <?php foreach ($data as $cat) { ?>
                        <tr>
                            <td><?php echo $cat['id']; ?></td>
                            <td><?php echo $cat['categoria']; ?></td>
                            <td>
                                <form action="<?php echo base_url() ?>Categorias/restaurar?id=<?php echo $cat['id']; ?>" method="post" class="d-inline confirmar">
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