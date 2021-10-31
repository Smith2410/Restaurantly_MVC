<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
                if ($_SESSION['rol'] == "Administrador")
                {   ?>
                                <h3>Platillos</h3>
                                <div>
                                    <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Platillos/listar">
                                        <i class="icofont-navigation-menu"></i> Lista de platillos
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
                                        <tbody>
                                            <?php foreach ($data as $cl) { ?>
                                                <tr>
                                                    <td><?php echo $cl['nombre']; ?></td>
                                                    <td><?php echo $cl['categoria']; ?></td>
                                                    <td><?php echo $cl['precio']; ?></td>
                                                    <td>
                                                        <form action="<?php echo base_url() ?>Platillos/restaurar?codigo=<?php echo $cl['codigo']; ?>" method="post" class="d-inline confirmar">
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="icofont-plus"></i>
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