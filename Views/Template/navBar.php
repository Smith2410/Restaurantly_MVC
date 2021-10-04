<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="<?php echo base_url(); ?>">AL CARBON GRILL</a></h1>
        
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <?php 
                    if (!empty($_SESSION['activo']))
                    {   ?>
                        <li><a href="<?php echo base_url(); ?>Admin/listar">Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>Platillos/all">Platillos</a></li>
                        <?php
                        if ($_SESSION['type']=="usuario") {
                            if ($_SESSION['rol']=="Administrador")
                            {   ?>
                                <li><a href="<?php echo base_url(); ?>Admin/administracion">Administracion</a></li>
                                <?php 
                            }else{   ?>
                                <li><a href="<?php echo base_url(); ?>Admin/administracion">Administracion</a></li>
                                <?php 
                            }
                        }else{
                            ?>
                            <li><a href="<?php echo base_url(); ?>Pedidos/listar">Pedidos</a></li>
                            <?php
                        } ?>
                        <li><a href="#" data-toggle="modal" data-target="#logout">Cerrar sesion</a></li>
                        <?php 
                    }else{
                        ?>
                        <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>Home/platillos">Platillos</a></li>
                        <li><a href="<?php echo base_url(); ?>Home/login">Iniciar sesion</a></li>
                        <?php 
                    }
                 ?>
                <li>
                    <form action="<?php echo base_url(); ?>Home/buscar" method="GET">
                        <div class="input-group">
                            <input type="text" id="search" class="form-control" name="search" required="" placeholder="Buscar">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </li>             
            </ul>
        </nav>

    </div>
</header>