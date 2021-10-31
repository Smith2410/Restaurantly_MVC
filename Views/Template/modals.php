<!-- ========== Agregar Categoria ========== -->
<div class="modal fade" id="addCategoria" tabindex="-1" aria-labelledby="categoriaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark">
            <form method="post" action="<?php echo base_url(); ?>Categorias/insertar" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoriaLabel">
                        Agregar Categoria
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-lg-12 col-md-12 form-group">
                            <input type="text" name="categoria" class="form-control" id="categoria" placeholder="Categoria">
                        </div>
                    </div>               
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                    <button class="btn btn-warning" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ========== Agregar Usuario ========== -->
<div class="modal fade" id="addUsuario" tabindex="-1" aria-labelledby="usuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark">
            <form method="post" action="<?php echo base_url(); ?>Usuarios/insertar" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="usuarioLabel">
                        Agregar Usuario
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="dni" class="form-control" type="text" name="dni" placeholder="DNI" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellidos" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <select id="rol" class="form-control" name="rol" required="">
                                <option value="Administrador">Administrador</option>
                                <option value="Repartidor">Repartidor</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="contrasena" class="form-control" type="password" name="contrasena" placeholder="Contraseña" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar Contraseña" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                    <button class="btn btn-warning" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ========== Agregar Platillo ========== -->
<div class="modal fade" id="addPlatillo" tabindex="-1" aria-labelledby="platilloLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark">
            <form method="post" action="<?php echo base_url(); ?>Platillos/insertar" enctype="multipart/form-data" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="platilloLabel">
                        Agregar Platillo
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <?php
                            $codigoPlatillo = substr( md5(microtime()), 1, 7);
                        ?>
                        <input id="codigo" class="form-control" type="hidden" name="codigo" required="" value="<?php echo $codigoPlatillo; ?>">

                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del platillo" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
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
                        <div class="col-lg-6 col-md-6 form-row">
                            <div class="col-lg-6 col-md-6 form-group">
                                <input class="form-control" name="imagen" type="file">
                            </div>
                        </div>
                    </div>              
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                    <button class="btn btn-warning" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
                    
<!-- ========== Agregar Cliente ========== -->
<div class="modal fade" id="addCliente" tabindex="-1" aria-labelledby="clienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark">
            <form method="post" action="<?php echo base_url(); ?>Clientes/insertar" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="clienteLabel">
                        Agregar Cliente
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="dni" class="form-control" type="text" name="dni" placeholder="DNI" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellidos" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Telefono" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Direccion" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="contrasena" class="form-control" type="password" name="contrasena" placeholder="Contraseña" required="">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar Contraseña" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                    <button class="btn btn-warning" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ========== Cambiar contraseña  ========== -->
<div class="modal fade" id="cambiarPass" tabindex="-1" aria-labelledby="passwordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordLabel">
                    Cambiar contraseña
                </h5>
            </div>
            <form action="" method="post" id="cambiarContra">
                <div class="modal-body">
                    <div id="errorPass"></div>
                    <div class="form-group">
                        <label for="actual">Contraseña Actual</label>
                        <input id="actual" class="form-control" type="password" name="actual" placeholder="Contraseña Actual">
                    </div>
                    <div class="form-group">
                        <label for="nueva">Contraseña Nueva</label>
                        <input id="nueva" class="form-control" type="password" name="nueva" placeholder="Contraseña Nueva">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                    <button class="btn btn-warning" type="button" id="cambiar">Cambiar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ========== Cerrar sesion ========== -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">
                    Cerrar sesion
                </h5>
            </div>
            <div class="modal-body">
                <p>¿Esta seguro que desea salir?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" type="button">No</button>
                <a href="<?php echo base_url(); ?>Usuarios/salir" class="btn btn-warning">Si</a>
            </div>
        </div>
    </div>
</div>