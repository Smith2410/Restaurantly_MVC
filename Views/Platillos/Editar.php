<?php head() ?>

<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>editar Platillo</p>
        </div>

        <!-- Formulario - actualizar -->
        <form method="post" action="<?php echo base_url(); ?>Platillos/actualizar" enctype="multipart/form-data" autocomplete="off">
            <div class="php-email-form">
                <div class="form-row">

                    <input id="codigo" class="form-control" type="text" name="codigo" value="<?php echo $data['codigo']; ?>" required="">

                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $data['nombre']; ?>" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="precio">Precio</label>
                        <input id="precio" class="form-control" type="text" name="precio" value="<?php echo $data['precio']; ?>" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="descuento">Descuento</label>
                        <input id="descuento" class="form-control" type="text" name="descuento" value="<?php echo $data['descuento']; ?>" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="5" required=""><?php echo $data['descripcion']; ?></textarea>
                </div>
                <div class="form-row">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="categoria_id">Categoria</label>
                        <select id="categoria_id" class="form-control" name="categoria_id" required="">
                            <?php foreach ($categoria as $cl) { ?>
                                <option value="<?php echo $cl['id']; ?>">
                                    <?php echo $cl['categoria']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 form-row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="imagen">Imagen</label>
                            <input class="form-control" name="imagen" type="file" value="<?php echo $data['imagen']; ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Modificar</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php footer() ?>