<?php head() ?>

<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>actualizar usuario</p>
        </div>
        <form method="post" action="<?php echo base_url(); ?>Usuarios/actualizar" autocomplete="off">
            <div class="php-email-form">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="dni">DNI</label>
                        <input id="dni" class="form-control" type="text" name="dni" readonly="" value="<?php echo $data['dni']; ?>">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $data['nombre']; ?>">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="apellidos">Usuario</label>
                        <input id="apellidos" class="form-control" type="text" name="apellidos" value="<?php echo $data['apellidos']; ?>">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="rol">Rol</label>
                        <select id="rol" class="form-control" name="rol">
                            <option value="Administrador" <?php if ($data['rol'] == "Administrador")
                                                                {
                                                                    echo "selected";
                                                                } ?>>Administrador</option>

                            <option value="Repartidor" <?php if ($data['rol'] == "Repartidor")
                                                            {
                                                                echo "selected";
                                                            } ?>>Repartidor</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button  type="submit">Modificar</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php footer() ?>