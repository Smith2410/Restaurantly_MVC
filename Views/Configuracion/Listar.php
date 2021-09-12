<?php head() ?>

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table book-a-table-padding">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Empresa</p>
        </div>

        <form action="<?php echo base_url(); ?>Configuracion/actualizar" method="post">
            <div class="php-email-form">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="ruc">Ruc</label>
                        <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <input id="ruc" class="form-control" type="text" name="ruc" value="<?php echo $data['ruc']; ?>" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $data['nombre']; ?>" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="telefono">Teléfono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono" value="<?php echo $data['telefono']; ?>" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="direccion">Dirección</label>
                        <input id="direccion" class="form-control" type="text" name="direccion" value="<?php echo $data['direccion']; ?>" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="razon">Razon Social</label>
                        <input id="razon" class="form-control" type="text" name="razon" value="<?php echo $data['razon']; ?>" required="">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</section>
                
<?php footer() ?>