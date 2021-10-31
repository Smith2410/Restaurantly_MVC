<section id="specials" class="specials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Dashboard</p>
            <a href="<?php echo base_url(); ?>usuarios/editar?dni=<?php echo $_SESSION['dni']; ?>">Mi cuenta</a>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-2 col-md-3">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" href="<?php echo base_url(); ?>Dashboard/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>Pedidos/listar">Pedidos</a>
                    </li>
                    <?php  if ($_SESSION['rol']=="Administrador")
                    { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>Platillos/listar">Platillos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>Categorias/listar">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>Cuenta_banco/listar">Cuenta bancaria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>Clientes/listar">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>Usuarios/listar">Administradores</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-12 details">