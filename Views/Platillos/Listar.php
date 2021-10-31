<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
                if ($_SESSION['rol'] == "Administrador")
                {   ?>
                                <p>Platillos</p>
                                <div>
                                    <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Platillos/nuevo">
                                        <i class="icofont-plus"></i> Nuevo platillo
                                    </a>
                                    <a class="btn btn-outline-danger" href="<?php echo base_url() ?>Platillos/inactivos">
                                        <i class="icofont-ban"></i> Platillos inactivos
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Categoria</th>
                                                <th>Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($data as $cl) { ?>
                                                <tr>
                                                    <td><?php echo $cl['nombre']; ?></td>
                                                    <td><?php echo $cl['categoria']; ?></td>
                                                    <td><?php echo $cl['precio']; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>Platillos/editar?codigo=<?php echo $cl['codigo']; ?>" class="btn btn-primary">
                                                            <i class="icofont-edit"></i>
                                                        </a>
                                                        <form action="<?php echo base_url() ?>Platillos/eliminar?codigo=<?php echo $cl['codigo']; ?>" method="post" class="d-inline elim">
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

<?php footer(); ?>