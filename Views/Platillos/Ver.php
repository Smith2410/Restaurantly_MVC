<?php 
    
    head();
?>

<section id="about" class="about about-padding">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                    <?php 
                    if($data['imagen']!="" && is_file("assets/img/platillos/".$data['imagen']))
                    { ?>
                        <img src="<?php echo base_url(); ?>assets/img/platillos/<?php echo $data['imagen']; ?>" alt="">
                        <?php 
                    }else{ 
                        ?>
                        <img src="<?php echo base_url(); ?>assets/img/platillos/<?php echo "default.png" ?>" alt="">
                        <?php
                    } ?>
                </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
                <h3><?php echo $data['nombre']; ?></h3>
                <p>
                    <span>s/.<?php echo $data['precio'];?></span>
                </p>
                <p class="font-italic">
                    <?php echo $data['descripcion'] ?>
                </p>

                <?php 
                if (!empty($_SESSION['activo']))
                {
                    ?>

                    <form action="<?php echo base_url(); ?>Carrito/add" method="POST" class="" data-form="">
                        <input type="text" value="<?php echo $data['codigo'] ?>" name="codigo" id="codigo">

                        <p class="text-center text-warning">Agrega la cantidad de productos que añadiras al carrito</p>

                        <div class="form-group">
                            <input type="number" class="form-control" value="1" min="1" name="cantidad" id="cantidad">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-warning" type="submit">Añadir al carrito</button>
                        </div>
                    </form>

                    <?php 
                }else{
                    ?>
                    <a class="btn btn-outline-warning" href="<?php echo base_url(); ?>Home/login">Iniciar sesion</a>
                    <?php 
                } ?>
                <div>
                    <a class="btn btn-outline-warning" href="<?php echo base_url(); ?>Platillos/all">Ir a platillos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>