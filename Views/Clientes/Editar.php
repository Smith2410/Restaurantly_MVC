<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
            if ($_SESSION['rol'] == "Administrador")
            {   ?>
                                <div class="container">
                                    <h3>actualizar Cliente</h3>
                                    <div>
                                         <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Clientes/listar">
                                        <i class="icofont-navigation-menu"></i> lista de clientes
                                    </a>
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url(); ?>Clientes/actualizar" autocomplete="off" class="book-a-table">
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
                                                <div class="col-lg-4 col-md-6 form-group">
                                                    <label for="telefono">Telefono</label>
                                                    <input id="telefono" class="form-control" type="text" name="telefono" value="<?php echo $data['telefono']; ?>">
                                                </div>
                                                <div class="col-lg-4 col-md-6 form-group">
                                                    <label for="direccion">Direccion</label>
                                                    <input id="direccion" class="form-control" type="text" name="direccion" value="<?php echo $data['direccion']; ?>">
                                                </div>
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
            }else{  ?>
                <div class="container">
                    <h3>Esta opcion solo es esta habilitado para administradores.</h3>
                </div>
                <?php 
            }
        }else{
            ?>
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>actualizar cuenta</p>
        </div>

        <form method="post" action="<?php echo base_url(); ?>Clientes/actualizar" autocomplete="off" class="php-email-form">
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
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" class="form-control" type="text" name="telefono" value="<?php echo $data['telefono']; ?>">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" class="form-control" type="text" name="direccion" value="<?php echo $data['direccion']; ?>">
                </div>
            </div>
            <div class="text-center">
                <button  type="submit">Modificar</button>
                <?php if ($_SESSION['dni'] == $data['dni']) {
                    ?>
                    <a class="btn btn-outline-warning" href="cambiar?dni=<?php echo $_SESSION['dni']; ?>">Cambiar contraseña</a>
                    <?php
                } ?>
            </div>
        </form>

    </div>
</section>
            <?php 
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