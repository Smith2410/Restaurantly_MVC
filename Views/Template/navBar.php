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
                        if ($_SESSION['rol']=="Administrador")
                        {   ?>
                            <li><a href="<?php echo base_url(); ?>Admin/administracion">Administracion</a></li>
                            <?php 
                        }elseif ($_SESSION['rol']=="Repartidor")
                        {   ?>
                            <li><a href="<?php echo base_url(); ?>Admin/administracion">Administracion</a></li>
                            <?php 
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
            </ul>
        </nav>

    </div>
</header>