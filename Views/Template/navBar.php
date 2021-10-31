<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="<?php echo base_url(); ?>">AL CARBON GRILL</a></h1>
        
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
                <li><a href="<?php echo base_url(); ?>platillos/all">Platillos</a></li>
                <?php 
                    if (!empty($_SESSION['activo']))
                    {   ?>
                        
                        <?php
                        if ($_SESSION['type']=="usuario") {
                            if ($_SESSION['rol']=="Administrador")
                            {   ?>
                                <li><a href="<?php echo base_url(); ?>Dashboard/dashboard">Administracion</a></li>
                                <?php 
                            }else{   ?>
                                <li><a href="<?php echo base_url(); ?>Dashboard/dashboard">Administracion</a></li>
                                <?php 
                            }
                        }else{
                            ?>
                            <li><a href="<?php echo base_url(); ?>Pedidos/listar">Pedidos</a></li>
                            <li><a href="<?php echo base_url(); ?>Clientes/editar?dni=<?php echo $_SESSION['dni']; ?>">Mi cuenta</a></li>
                            <?php
                        } ?>
                        <li><a href="#" data-toggle="modal" data-target="#logout">Cerrar sesion</a></li>
                        <?php 
                    }else{
                        ?>
                        <li><a href="<?php echo base_url(); ?>home/login">Iniciar sesion</a></li>
                        <?php 
                    }
                 ?>
                <li>
                    <form action="<?php echo base_url(); ?>home/buscar" method="GET">
                        <div class="input-group">
                            <input type="text" id="search" class="form-control" name="search" required="" placeholder="Buscar">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="submit">
                                    <i class="icofont-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>             
            </ul>
        </nav>

    </div>
</header>