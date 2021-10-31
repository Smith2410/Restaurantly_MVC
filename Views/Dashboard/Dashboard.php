<?php
    head();
        sideBar();
            ?> 
                                <h3>Panel de administracion</h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <a href="<?php echo base_url(); ?>Pedidos/listar">
                                            <div class="box cardBox" data-aos="zoom-in" data-aos-delay="100">
                                                <span>00</span>
                                                <h4>Pedidos</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <?php if ($_SESSION['rol']=="Administrador")
                                    {   ?>
                                        <div class="col-lg-3 col-md-6">
                                            <a href="<?php echo base_url(); ?>Categorias/listar">
                                                <div class="box cardBox" data-aos="zoom-in" data-aos-delay="100">
                                                    <span>01</span>
                                                    <h4>Categorias</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <a href="<?php echo base_url(); ?>Usuarios/listar">
                                                <div class="box cardBox" data-aos="zoom-in" data-aos-delay="300">
                                                    <span>03</span>
                                                    <h4>Usuarios</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <a href="<?php echo base_url(); ?>Cuenta_banco/listar">
                                                <div class="box cardBox" data-aos="zoom-in" data-aos-delay="300">
                                                    <span>03</span>
                                                    <h4>Cuenta banco</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <a href="<?php echo base_url(); ?>Platillos/listar">
                                                <div class="box cardBox" data-aos="zoom-in" data-aos-delay="300">
                                                    <span>04</span>
                                                    <h4>Platillos</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <a href="<?php echo base_url(); ?>Clientes/listar">
                                                <div class="box cardBox" data-aos="zoom-in" data-aos-delay="300">
                                                    <span>05</span>
                                                    <h4>Clientes</h4>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>