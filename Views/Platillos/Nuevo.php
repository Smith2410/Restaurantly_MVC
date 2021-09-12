<?php head() ?>
<section id="book-a-table" class="book-a-table book-a-table-padding">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Nuevo Platillo</p>
        </div>

        <!-- Formulario - insertar -->
        <form method="post" action="<?php echo base_url(); ?>Platillos/insertar" enctype="multipart/form-data" autocomplete="off">
            <div class="php-email-form">
                <div class="form-row">
                    <?php
                        $codigoPlatillo = substr( md5(microtime()), 1, 7);
                    ?>
                    <input id="codigo" class="form-control" type="hidden" name="codigo" required="" value="<?php echo $codigoPlatillo; ?>">

                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del platillo" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="Precio" class="form-control" type="text" name="precio" placeholder="precio" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="descuento" class="form-control" type="text" name="descuento" placeholder="Descuento" required="">
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="5" placeholder="Descripcion del platillo"></textarea>
                </div>

                <div class="form-row">
                    <div class="col-lg-6 col-md-6 form-group">
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
                            <input class="form-control" name="imagen" type="file">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit">Registrar</button>
                </div>
            </div>
        </form>

    </div>
</section>


<?php footer() ?>