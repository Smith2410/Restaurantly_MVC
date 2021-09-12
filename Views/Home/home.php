<?php head() ?>
<!-- ======= Slider ======= -->
<?php slider() ?>

<section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Platillos recientes</p>
        </div>
        <div class="row">
    		<?php foreach ($data as $cl) { ?>
    		    <div class="col-lg-3 col-md-4">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <?php 
                        if($cl['imagen']!="" && is_file("assets/img/platillos/".$cl['imagen']))
                        { ?>
                            <img src="<?php echo base_url(); ?>assets/img/platillos/<?php echo $cl['imagen']; ?>" class="img-fluid" alt="">
                            <?php 
                        }else{ 
                            ?>
                            <img src="<?php echo base_url(); ?>assets/img/platillos/<?php echo "default.png"; ?>" class="img-fluid" alt="">
                            <?php
                        } ?>
                        <div class="member-info">
    		                <div class="member-info-content">
    		                      <h4><?php echo $cl['nombre']; ?></h4>
    		                      <span><?php echo $cl['precio']; ?></span>
    		                </div>
    		                <div class="social">
                                <a href="<?php echo base_url(); ?>Home/ver?codigo=<?php echo $cl['codigo']; ?>"><i class="fas fa-plus"></i>Detalle</a>
    		                </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php footer() ?>