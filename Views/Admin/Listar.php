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
                                <a href="<?php echo base_url(); ?>Platillos/ver?codigo=<?php echo $cl['codigo']; ?>"><i class="icofont-plus"></i>Detalle</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Fotos del restaurante</p>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Ubicanos</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="open-hours">
                        <i class="icofont-clock-time icofont-rotate-90"></i>
                        <h4>Open Hours:</h4>
                        <p>
                            Monday-Saturday:<br>
                            11:00 AM - 2300 PM
                        </p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
                <div data-aos="fade-up">
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>