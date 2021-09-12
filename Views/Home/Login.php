<?php head() ?>

<section id="book-a-table" class="book-a-table book-a-table-padding">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Bienvenido!</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo base_url(); ?>assets/img/about.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <?php 
                    if (isset($_GET['msg'])) 
                    { ?>
                        <div class="alert alert-warning" role="alert">
                            <strong>Usuario y/o contraseña Incorrecta</strong>
                        </div>
                        <?php
                    } 
                ?>
                <form action="<?php echo base_url(); ?>Usuarios/login" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input id="dni" class="form-control" type="text" name="dni" placeholder="dni" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <input id="contrasena" class="form-control" type="password" name="contrasena" placeholder="Contraseña" required="">
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit">Iniciar sesion</button>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="#">Olvidaste tu contraseña?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>Home/nuevo">Crear cuenta</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>