<?php head() ?>


    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Buscar</p>
        </div>

        <div class="row">
<?php foreach ($data as $cl) { ?>

		    <div class="col-lg-3 col-md-4">
		            <div class="member" data-aos="zoom-in" data-aos-delay="100">
		              <img src="<?php echo base_url(); ?>assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
		              <div class="member-info">
		                <div class="member-info-content">
		                  <h4><?php echo $data['NombreProd']; ?></h4>
		                  <span><?php echo $data['Precio']; ?></span>
		                </div>
		                <div class="social">
		                  <a href="<?php echo base_url(); ?>Home/ver?id=<?php echo $data['CodigoProd']; ?>"><i class="icofont-plus"></i>Detalle</a>
		                </div>
		              </div>
		            </div>
		          </div>
          <?php } ?>

        </div>

      </div>
    </section>

<?php footer() ?>