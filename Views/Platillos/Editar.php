<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
            if ($_SESSION['rol'] == "Administrador")
            {   ?>
                                <div class="container">
                                    <h3>editar Platillo</h3>
                                    <div>
                                        <a class="btn btn-outline-warning" href="<?php echo base_url() ?>platillos/listar">
                                            <i class="icofont-navigation-menu"></i> Lista de platillos
                                        </a>
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url(); ?>Platillos/actualizar" enctype="multipart/form-data" autocomplete="off" class="book-a-table">
                                        <div class="php-email-form">
                                            <div class="form-row">
                                                <input id="codigo" class="form-control" type="hidden" name="codigo" value="<?php echo $data['codigo']; ?>" required="" readonly>
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <label for="nombre">Nombre</label>
                                                    <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $data['nombre']; ?>" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <label for="precio">Precio</label>
                                                    <input id="precio" class="form-control" type="text" name="precio" value="<?php echo $data['precio']; ?>" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="descripcion">Descripcion</label>
                                                <textarea class="form-control" name="descripcion" id="descripcion" rows="5" required=""><?php echo $data['descripcion']; ?></textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <label for="categoria_id">Categoria</label>
                                                    <select id="categoria_id" class="form-control" name="categoria_id" required="">
                                                        <?php foreach ($categoria as $cl)
                                                        {
                                                            if ($data['categoria_id'] == $cl['id'])
                                                            {   ?>
                                                                <option selected="" value="<?php echo $cl['id']; ?>">
                                                                    <?php echo $cl['categoria']; ?>   (actual)
                                                                </option>
                                                                <?php
                                                            } else{ ?>
                                                                <option value="<?php echo $cl['id']; ?>">
                                                                    <?php echo $cl['categoria']; ?>
                                                                </option>
                                                                <?php 
                                                            } 
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 form-group">
                                                    <label for="imagen">Imagen</label>
                                                    <input class="form-control" name="imagen" type="file" value="<?php echo $data['imagen']; ?>">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary" type="submit">Modificar</button>
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