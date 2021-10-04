<?php head();?>
<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Nuevo usuario</p>
        </div>

        <!-- Formulario - insertar -->
        <form method="post" action="<?php echo base_url(); ?>Clientes/insertar" autocomplete="off">
            <div class="php-email-form">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="dni" class="form-control" type="text" name="dni" placeholder="DNI" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellidos" required="">
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Telefono" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Direccion" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="contrasena" class="form-control" type="password" name="contrasena" placeholder="Contraseña" required="">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar Contraseña" required="">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"> Registrar</button>
                </div>
            </div>
        </form>
    </div>
</section>


<?php footer() ?>