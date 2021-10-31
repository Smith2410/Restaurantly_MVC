<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar(); ?>
                                <div class="container">
                                    <h3>actualizar usuario</h3>
                                    <div>
                                        <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Usuarios/listar">
                                            <i class="icofont-navigation-menu"></i> Usuarios
                                        </a>
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url(); ?>Usuarios/actualizar" autocomplete="off" class="book-a-table">
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
                                                    <label for="apellidos">Apellidos</label>
                                                    <input id="apellidos" class="form-control" type="text" name="apellidos" value="<?php echo $data['apellidos']; ?>">
                                                </div>
                                                <input id="rol" class="form-control" type="hidden" name="rol" value="<?php echo $data['rol']; ?>">
                                                <?php  if ($_SESSION['rol']=="Administrador")
                                                { ?>
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
                                                <?php } ?>
                                            </div>
                                            <div class="text-center">
                                                <button  type="submit">Modificar</button>
                                                <?php if ($_SESSION['dni'] == $data['dni']) {
                                                    ?>
                                                    <a class="btn btn-outline-warning" href="cambiar?dni=<?php echo $_SESSION['dni']; ?>">Cambiar contraseña</a>
                                                    <?php
                                                } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
            <?php
        }else{
            header("location: " . base_url());
        } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>