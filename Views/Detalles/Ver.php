<?php head() ?>

   <!-- ======= About Section ======= -->
    <section id="about" class="about about-padding">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3><?php echo $data['NumPedido']; ?></h3>
            <p class="font-italic">
             <?php echo $data['CodigoProd']; ?>
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> </li>
            </ul>
        </div>
      </div>
    </section>

<?php footer() ?>