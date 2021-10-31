<?php head() ?>

<section id="book-a-table" class="book-a-table book-a-table-padding">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Recuperar contraseña</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo base_url(); ?>Clientes/recovery" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input id="dni" class="form-control" type="text" name="dni" placeholder="dni" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input id="telefono" class="form-control" type="text" name="telefono" placeholder="telefono" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 form-group">
                            <input id="newPass" class="form-control" type="password" name="newPass" placeholder="Nueva contraseña" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input id="newPass2" class="form-control" type="password" name="newPass2" placeholder="Repita nueva contraseña" required="">
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit">Cambiar contraseña</button>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>home/login">Iniciar sesion</a>
                </div>
                <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>home/registro">Crear cuenta</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>