<?php
    head();
        if ($_SESSION['type'] == "cliente") 
        {   
            if ($_SESSION['dni'] == $data['dni'])
            {   ?>
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <p>actualizar contraseña</p>
                            <a class="btn btn-outline-warning" href="<?php echo base_url(); ?>Clientes/editar?dni=<?php echo $_SESSION['dni']; ?>">
                                <i class="icofont-plus"></i> Volver
                            </a>
                        </div>
                        <form method="post" action="<?php echo base_url(); ?>Clientes/actualizarContrasena" autocomplete="off">
                            <div class="php-email-form">
                                <input id="dni" class="form-control" type="hidden" name="dni" value="<?php echo $data['dni'] ?>" readonly>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-6 form-group">
                                        <input id="actual" class="form-control" type="password" name="actual" placeholder="Contraseña Actual">
                                    </div>
                                    <div class="col-lg-4 col-md-6 form-group">
                                        <input id="nueva" class="form-control" type="password" name="nueva" placeholder="Contraseña Nueva">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button  type="submit">Modificar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <?php 
            }else{  ?>
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <p>Solo el propietario de esta cuenta puede cambiar su contraseña.</p>
                        </div>
                    </div>
                </section>
                <?php 
            }
        }else{
            header("location: " . base_url());
        } ?>

<?php footer() ?>