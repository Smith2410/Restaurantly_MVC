<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
            if ($_SESSION['dni'] == $data['dni'])
            {   ?>
                                <div class="container">
                                    <h3>actualizar contraseña</h3>
                                    <div>
                                        <a class="btn btn-outline-warning" href="<?php echo base_url(); ?>Usuarios/editar?dni=<?php echo $_SESSION['dni']; ?>">
                                            <i class="icofont-plus"></i> Volver
                                        </a>
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url(); ?>Usuarios/actualizarContrasena" autocomplete="off" class="book-a-table">
                                        <div class="php-email-form">
                                            <input id="dni" class="form-control" type="hidden" name="dni" value="<?php echo $data['dni'] ?>" readonly>
                                            <div class="form-row">
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <input id="actual" class="form-control" type="password" name="actual" placeholder="Contraseña Actual">
                                                </div>
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <input id="nueva" class="form-control" type="password" name="nueva" placeholder="Contraseña Nueva">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button  type="submit">Modificar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                <?php 
            }else{  ?>
                <div class="container">
                    <h3>Solo el propietario de esta cuenta puede cambiar su contraseña.</h3>
                </div>
                <?php 
            }
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