<?php
    head();
        if ($_SESSION['type'] == "usuario") 
        {   
            sideBar();
            if ($_SESSION['rol'] == "Administrador")
            {   ?>
				            <div class="container">
								<h3>Editar categoria</h3>
								<div>
                                    <a class="btn btn-outline-warning" href="<?php echo base_url() ?>Categorias/listar">
                                        <i class="icofont-navigation-menu"></i> Lista de categorias
                                  	</a>
                                </div>
                                <br>
								<form method="post" action="<?php echo base_url(); ?>Categorias/actualizar" autocomplete="off" class="book-a-table">
									<div class="php-email-form">
										<div class="form-row">
											<div class="col-lg-6 col-md-6 form-group">
												<label for="id">ID</label>
												<input type="text" name="id" class="form-control" id="id" readonly="" value="<?php echo $data['id']; ?>">
											</div>
											<div class="col-lg-6 col-md-6 form-group">
												<label for="categoria">Categoria</label>
												<input type="text" name="categoria" class="form-control" id="categoria" required="" value="<?php echo $data['categoria']; ?>">
											</div>
										</div>
										<div class="text-center">
											<button type="submit">Actualizar</button>
										</div>
									</div>
								</form>
							</div>
				<?php 
            }else{  ?>
                <div class="container">
					<h3>Esta opcion solo es esta habilitado para administradores.</h3>
				</div>
                <?php 
            }
        }else{
            header("location: " . base_url());
        } ?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footer() ?>