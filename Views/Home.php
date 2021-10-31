<?php head(); ?>
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
                                <a href="<?php echo base_url(); ?>platillos/ver?codigo=<?php echo $cl['codigo']; ?>"><i class="fas fa-plus"></i>Detalle</a>
    		                </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="contact" class="contact padding-bottom">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Nuestra ubicación</p>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-lg-4 col-md-5">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicacion:</h4>
                            <p>APV Los libertadores, Huadquiña - Santa Teresa, La convención</p>
                        </div>
                        <div class="open-hours">
                            <i class="icofont-clock-time icofont-rotate-90"></i>
                            <h4>Horario de atencion:</h4>
                            <p>
                                Lunes - Domingo:<br>
                                00:00 AM - 00:00 PM
                            </p>
                        </div>
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>E-mail:</h4>
                            <p>alcarbongrill@gmail.com</p>
                        </div>
                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Teléfono:</h4>
                            <p>+51 987 654 321</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 mt-5 mt-lg-0">
                    <div data-aos="fade-up">
                        <iframe width="725" height="440" src="https://maps.google.com/maps?width=725&amp;height=440&amp;hl=en&amp;q=santa%20teresa+(santa%20teresa)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>

<section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Fotos del restaurante</p>
        </div>
    </div>
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>