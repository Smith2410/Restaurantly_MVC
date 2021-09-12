<?php head() ?>

<section id="book-a-table" class="book-a-table">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<p>Editar categoria</p>
		</div>
		<form method="post" action="<?php echo base_url(); ?>Categorias/actualizar" autocomplete="off">
			<div class="php-email-form">
				<div class="form-row">
					<div class="col-lg-4 col-md-6 form-group">
						<label for="id">ID</label>
						<input type="text" name="id" class="form-control" id="id" readonly="" value="<?php echo $data['id']; ?>">
					</div>
					<div class="col-lg-4 col-md-6 form-group">
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
</section>

<?php footer() ?>