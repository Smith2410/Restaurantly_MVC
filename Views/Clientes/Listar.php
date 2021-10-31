<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
                if ($_SESSION['rol'] == "Administrador")
                {   ?>
                                <h3>Clientes</h3>
                                <div>
                                    <a href="#" class="btn btn-outline-warning" data-toggle="modal" data-target="#addCliente">
                                        <i class="icofont-plus"></i> Nueva cliente
                                    </a>
                                    <a class="btn btn-outline-danger" href="<?php echo base_url() ?>Clientes/eliminados">
                                        <i class="icofont-ban"></i> Clientes inactivos
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Telefono</th>
                                                <th>Direccion</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $us) { ?>
                                                <tr>
                                                    <td><?php echo $us['dni']; ?></td>
                                                    <td><?php echo $us['nombre']; ?></td>
                                                    <td><?php echo $us['apellidos']; ?></td>
                                                    <td><?php echo $us['telefono']; ?></td>
                                                    <td><?php echo $us['direccion']; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>Clientes/editar?dni=<?php echo $us['dni']; ?>" class="btn btn-primary">
                                                            <i class="icofont-edit"></i>
                                                        </a>
                                                        <form action="<?php echo base_url() ?>Clientes/eliminar?dni=<?php echo $us['dni']; ?>" method="post" class="d-inline elim">
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="icofont-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                    <?php 
                }else{  ?>
                    <h3>Esta opcion solo es esta habilitado para administradores.</h3>
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