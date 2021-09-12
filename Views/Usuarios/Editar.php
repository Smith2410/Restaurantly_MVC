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
                        <label for="nombre">Nombre</label>
                        <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $data['nombre']; ?>">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="rol">Rol</label>
                        <select id="rol" class="form-control" name="rol">
                            <option value="Administrador" <?php if ($data['rol'] == "Administrador")
                                                                {
                                                                    echo "selected";
                                                                } ?>>Administrador</option>

                            <option value="Vendedor" <?php if ($data['rol'] == "Repartidor")
                                                            {
                                                                echo "selected";
                                                            } ?>>Repartidor</option>
                        </select>
                                </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario" value="<?php echo $data['usuario']; ?>">
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="correo">Correo</label>
                        <input id="correo" class="form-control" type="text" name="correo" placeholder="Correo" value="<?php echo $data['correo']; ?>">
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