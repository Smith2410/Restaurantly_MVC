<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
            if ($_SESSION['rol'] == "Administrador")
            {   ?>

                                <div class="container">
                                    <h3>Nuevo Platillo</h3>
                                    <div>
                                        <a class="btn btn-outline-warning" href="<?php echo base_url() ?>platillos/listar">
                                            <i class="icofont-plus"></i> platillos
                                        </a>
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url(); ?>Platillos/insertar" enctype="multipart/form-data" autocomplete="off" class="book-a-table">
                                        <div class="php-email-form">
                                            <div class="form-row">
                                                <?php
                                                    $codigoPlatillo = substr( md5(microtime()), 1, 7);
                                                ?>
                                                <input id="codigo" class="form-control" type="hidden" name="codigo" required="" value="<?php echo $codigoPlatillo; ?>" readonly>

                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del platillo" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <input id="Precio" class="form-control" type="text" name="precio" placeholder="precio" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="descripcion" id="descripcion" rows="5" placeholder="Descripcion del platillo"></textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <select id="categoria_id" class="form-control" name="categoria_id" required="">
                                                        <?php foreach ($categoria as $cl) { ?>
                                                            <option value="<?php echo $cl['id']; ?>">
                                                                <?php echo $cl['categoria']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <input class="form-control" name="imagen" type="file">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit">Guardar</button>
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

<?php footer(); ?>