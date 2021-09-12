<?php head();?>
<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Nuevo usuario</p>
        </div>

<!-- Formulario - insertar -->
<form method="post" action="<?php echo base_url(); ?>Usuarios/insertar" autocomplete="off">
    <div class="php-email-form">
        <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" required="">
            </div>
            <?php 
            if (!empty($_SESSION['activo']))
            {   ?>
                <div class="col-lg-4 col-md-6 form-group">
                    <select id="rol" class="form-control" name="rol" required="">
                        <option value="Administrador">Administrador</option>
                        <option value="Repartidor">Repartidor</option>
                        <option value="Cliente">Cliente</option>
                    </select>
                </div>
            <?php }else{
                ?>
                <input id="rol" class="form-control" type="hidden" name="rol" required="" value="Cliente">
            <?php } ?>

            <div class="col-lg-4 col-md-6 form-group">
                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario" required="">
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input id="correo" class="form-control" type="email" name="correo" placeholder="Correo" required="">
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña" required="">
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
  


<?php footer() ?>