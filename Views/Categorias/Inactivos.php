<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
                if ($_SESSION['rol'] == "Administrador")
                {   ?>
                                <h3>Categorias inactivos</h3>
                                <div>
                                  	<a class="btn btn-outline-warning" href="<?php echo base_url() ?>Categorias/listar">
                                        <i class="icofont-navigation-menu"></i> Lista de categorias
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
                                            <?php foreach ($data as $cat) { ?>
                                                <tr>
                                                    <td><?php echo $cat['id']; ?></td>
                                                    <td><?php echo $cat['categoria']; ?></td>
                                                    <td>
                                                        <form action="<?php echo base_url() ?>Categorias/restaurar?id=<?php echo $cat['id']; ?>" method="post" class="d-inline confirmar">
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

<?php footer() ?>