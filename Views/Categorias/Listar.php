<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
                if ($_SESSION['rol'] == "Administrador")
                {   ?>

                                <h3>Categorias</h3>
                                <div>
                                    <a href="#" class="btn btn-outline-warning" data-toggle="modal" data-target="#addCategoria">
                                        <i class="icofont-plus"></i> Nueva categoria
                                    </a>
                                    <a class="btn btn-outline-danger" href="<?php echo base_url() ?>Categorias/inactivos">
                                        <i class="icofont-ban"></i> Categorias inactivos
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Table" width="100%" cellspacing="0" style="background-color: #cda45e; border-radius: 10px;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Categoria</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Categoria</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($data as $cl) { ?>
                                                <tr>
                                                    <td><?php echo $cl['id']; ?></td>
                                                    <td><?php echo $cl['categoria']; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>Categorias/editar?id=<?php echo $cl['id']; ?>" class="btn btn-primary">
                                                            <i class="icofont-edit"></i>
                                                        </a>
                                                        <form action="<?php echo base_url() ?>Categorias/eliminar?id=<?php echo $cl['id']; ?>" method="post" class="d-inline elim">
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