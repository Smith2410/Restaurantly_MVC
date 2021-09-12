<?php head() ?>

<section id="specials" class="specials specials-padding">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Platillos</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-2">
                <div class="section-title">
                    <h2>Categorias</h2>
                </div>
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" href="<?php echo base_url(); ?>Home/platillos">Todos</a>
                    </li>
                    <?php foreach ($categoria as $cl) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>home/verc?id=<?php echo $cl['id']; ?>">
                                <?php echo $cl['categoria']; ?>
                            </a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="col-lg-10 mt-4 mt-lg-0">
                <div class="tab-content">
                    <!-- ======= Chefs Section ======= -->

<div id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p><?php echo $data['categoria']; ?></p>
        </div>
        <div class="row">

                <div class="col-lg-3 col-md-4">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <?php 
                        if($data['imagen']!="" && is_file("assets/img/platillos/".$data['imagen']))
                        { ?>
                            <img src="<?php echo base_url(); ?>assets/img/platillos/<?php echo $data['imagen']; ?>" class="img-fluid" alt="">
                            <?php 
                        }else{ 
                            ?>
                            <img src="<?php echo base_url(); ?>assets/img/platillos/<?php echo "default.png"; ?>" class="img-fluid" alt="">
                            <?php
                        } ?>
                        <div class="member-info">
                            <div class="member-info-content">
                                  <h4><?php echo $data['nombre']; ?></h4>
                                  <span><?php echo $data['precio']; ?></span>
                            </div>
                            <div class="social">
                                <a href="<?php echo base_url(); ?>Home/ver?codigo=<?php echo $data['codigo']; ?>"><i class="fas fa-plus"></i>Detalle</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

<?php footer() ?>