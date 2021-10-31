<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
            if ($_SESSION['rol'] == "Administrador")
            {   ?>
                                <div class="container">
                                    <h3>Actualizar Cuenta bancaria</h3>
                                    <br>
                                    <form action="<?php echo base_url(); ?>Cuenta_banco/actualizar" method="post">
                                        <div class="book-a-table">
                                            <div class="php-email-form">
                                                <div class="form-row">
                                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    <div class="col-lg-4 col-md-6 form-group">
                                                        <label for="numero">Numero</label>
                                                        <input type="text" name="numero" class="form-control" id="numero" required="" value="<?php echo $data['numero']; ?>">
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" class="form-control" name="nombre" id="nombre" required="" value="<?php echo $data['nombre']; ?>">
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 form-group">
                                                        <label for="beneficiario">Beneficiario</label>
                                                        <input type="text" class="form-control" name="beneficiario" id="beneficiario" required="" value="<?php echo $data['beneficiario']; ?>">
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 form-group">
                                                        <label for="tipo">Tipo</label>
                                                        <input type="text" name="tipo" class="form-control" id="tipo" required="" value="<?php echo $data['tipo']; ?>">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-primary" type="submit">Actualizar</button>
                                                </div> 
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