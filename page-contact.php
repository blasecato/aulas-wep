<?php get_header();
$redesSociales = new WP_Query([
	'posts_per_page' => 4,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'redesSociales',
	'post_status' => 'publish'
]);
?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="page-contact">
	<div class="container">
		<div class="column">
			<h1 class="title-contact">Ponte en contacto con nosotros</h1>
		</div>
		<div class="column">
			<form>
				<div class="mb-3">
					<input placeholder="Nombre" type="text" class="form-control" id="name" aria-describedby="nameHelp">
				</div>
				<div class="mb-3">
					<input type="text" placeholder="Apellidos" class="form-control" id="lastName"
						aria-describedby="lastNameHelp">
				</div>
				<div class="mb-3">
					<input type="email" placeholder="Correo electrónico" class="form-control" id="exampleInputEmail1"
						aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<input type="text" placeholder="Organización / Empresa / Institución Educativa" class="form-control"
						id="working" aria-describedby="workingHelp">
				</div>
				<div class="mb-3">
					<label for="message" class="form-label">Mensaje</label>
					<textarea name="message" id="message" class="form-control form-control--textarea"></textarea>
				</div>
				<button type="submit" class="btn btn-send">ENVIAR</button>
			</form>
		</div>
	</div>
</section>
<div class="networks">
	<?php
	if ($redesSociales->have_posts()):
		while ($redesSociales->have_posts()):
			$redesSociales->the_post();
			?>
			<a target="_blank" href="<?php the_field('urlSeeMore'); ?>" class="item">
				<img src="<?php the_field('link-img'); ?>" alt="img" class="img" />
			</a>
		<?php endwhile;
	endif;
	wp_reset_postdata();
	?>
</div>
<?php get_footer();