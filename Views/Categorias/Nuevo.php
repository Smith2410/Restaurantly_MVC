<?php head() ?>

<section id="book-a-table" class="book-a-table book-a-table-padding">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<p>Nueva categoria</p>
		</div>
		<form method="post" action="<?php echo base_url(); ?>Categorias/insertar" autocomplete="off">
			<div class="php-email-form">
				<div class="form-row">
					<div class="col-lg-4 col-md-6 form-group">
						<input type="text" name="categoria" class="form-control" id="categoria" placeholder="Categoria">
					</div>
				</div>
				<div class="text-center">
					<button type="submit">Guardar</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php footer() ?>