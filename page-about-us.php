<?php get_header(); ?>
<?php
$banners = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'banners',
	'post_status' => 'publish'
]);
$comite_directivo = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'comite_directivo',
	'post_status' => 'publish'
]);
$equipo_consultor = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'equipo_consultor',
	'post_status' => 'publish'
]);
$quienesSomos = new WP_Query([
	'posts_per_page' => 3,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'quienesSomos',
	'post_status' => 'publish'
]);
$nuestroAdn1 = new WP_Query([
	'posts_per_page' => 2,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'nuestroAdn',
	'post_status' => 'publish'
]);
$nuestroAdn2 = new WP_Query([
	'posts_per_page' => 2,
	'offset' => 2,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'nuestroAdn',
	'post_status' => 'publish'
]);
$nuestroInpacto1 = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'nuestroInpacto',
	'post_status' => 'publish'
]);
$nuestroInpacto2 = new WP_Query([
	'posts_per_page' => 4,
	'offset' => 1,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'nuestroInpacto',
	'post_status' => 'publish'
]);
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
<section class="aboutUs">
	<?php
	if ($banners->have_posts()):
		while ($banners->have_posts()):
			$banners->the_post();
			?>
			<div class="aboutUs__banner">
				<?php echo the_post_thumbnail() ?>
				<h1 class="title-banner">
					<?php the_title(); ?>
				</h1>
			</div>

		<?php endwhile;
	endif;
	wp_reset_postdata();
	?>
	<?php
	if ($quienesSomos->have_posts()):
		while ($quienesSomos->have_posts()):
			$quienesSomos->the_post();
			?>
			<div class="row-information" style="background-color: <?php echo the_field('backgroundColorSomos'); ?>;">
				<div class="column column-left">
					<div class="colors">
						<span>
							<?php the_content(); ?>
						</span>
					</div>
				</div>
				<div class="column column-rigth">
					<?php echo the_post_thumbnail() ?>
				</div>
			</div>
		<?php endwhile;
	endif;
	wp_reset_postdata();
	?>
	<div class="section-our-dna">
		<div class="section-our-dna__title">
			<h2 class="sub-title">Nuestro ADN</h2>
		</div>


		<div class="row row--one">
			<div class="column">
				<?php
				if ($nuestroAdn1->have_posts()):
					while ($nuestroAdn1->have_posts()):
						$nuestroAdn1->the_post();
						?>
						<div class="card">
							<img src="<?php the_field('link-img'); ?>" alt="img" class="img" />
							<h2 class="card--title">
								<?php the_title(); ?>
							</h2>
							<p class="card--text">
								<?php the_content(); ?>
							</p>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
			<div class="column column--img">
				<img src="<?php echo "$urlTemplate/assets/images/Recurso 4 1.png" ?>" alt="item" class="image" />
			</div>
		</div>
		<div class="row row--two">
			<div class="column column--img">
				<img src="<?php echo "$urlTemplate/assets/images/Recurso 5 1.png" ?>" alt="item" class="image" />
			</div>
			<div class="column">
				<?php
				if ($nuestroAdn2->have_posts()):
					while ($nuestroAdn2->have_posts()):
						$nuestroAdn2->the_post();
						?>
						<div class="card">
							<img src="<?php the_field('link-img'); ?>" alt="img" class="img" />
							<h2 class="card--title">
								<?php the_title(); ?>
							</h2>
							<p class="card--text">
								<?php the_content(); ?>
							</p>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div class="section-our-team">
		<div class="container">
			<div class="section-our-team__title">
				<h2 class="sub-title">Nuestro equipo</h2>
			</div>
			<p class="section-our-team-sub-title">comité directivo</p>



			<div class="section-our-team__gird">



				<?php
				if ($comite_directivo->have_posts()):
					while ($comite_directivo->have_posts()):
						$comite_directivo->the_post();
						?>
						<div class="card-user">
							<?php echo the_post_thumbnail() ?>
							<h3 style="color: <?php the_field('colorTitleSomos'); ?>"><?php the_title(); ?></h3>
							<p class="rolname">
								<?php the_field('rolname'); ?>
							</p>
							<span>
								<?php the_content(); ?>
							</span>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>




			</div>

			<p class="section-our-team-sub-title">equipo consultor</p>
			<div class="section-our-team__gird">
				<?php
				if ($equipo_consultor->have_posts()):
					while ($equipo_consultor->have_posts()):
						$equipo_consultor->the_post();
						?>
						<div class="card-user">
							<?php echo the_post_thumbnail() ?>
							<h3 style="color: <?php the_field('colorTitleSomos'); ?>"><?php the_title(); ?></h3>
							<?php the_field('rolName'); ?>
							<span>
								<?php the_content(); ?>
							</span>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div class="section-our-impact">
		<div class="box">
			<div class="box--content">
				<?php
				if ($nuestroInpacto1->have_posts()):
					while ($nuestroInpacto1->have_posts()):
						$nuestroInpacto1->the_post();
						?>
						<div class="box__title">
							<h2 class="sub-title">
								<?php the_title(); ?>
							</h2>
						</div>
						<?php the_content(); ?>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
				<div class="mapa-cont">
					<img src="<?php echo "$urlTemplate/assets/images/mapa.png" ?>" alt="mapa" class="map" />
					<div class="absolute antioquia">
						<img src="<?php echo "$urlTemplate/assets/images/mapa-antioquia.png" ?>" alt="mapa" class="map" />
						<p>Antioquia</p>
						<p>Chocó</p>
						<div class="line"></div>
					</div>
					<div class="absolute cauca">
						<img src="<?php echo "$urlTemplate/assets/images/mapa-valle.png" ?>" alt="mapa" class="map" />
						<p>Valle del Cauca</p>
						<p>Cauca</p>
						<p>Nariño</p>
						<div class="line"></div>
					</div>
					<div class="absolute bolivar">
						<img src="<?php echo "$urlTemplate/assets/images/mapa-cesar.png" ?>" alt="mapa" class="map" />
						<p>Cesar</p>
						<p>Magdalena</p>
						<p>Bolivar</p>
						<div class="line"></div>
					</div>
					<div class="absolute santander">
						<img src="<?php echo "$urlTemplate/assets/images/mapa-santander.png" ?>" alt="mapa" class="map" />
						<p>Santander</p>
						<p>Norte de</p>
						<p>Santander</p>
						<div class="line"></div>
					</div>
					<div class="absolute meta">
						<img src="<?php echo "$urlTemplate/assets/images/mapa-meta.png" ?>" alt="mapa" class="map" />
						<p>Meta</p>
						<p>Casanare</p>
						<div class="line"></div>
					</div>
					<div class="absolute caldas">
						<img src="<?php echo "$urlTemplate/assets/images/mapa-caldas.png" ?>" alt="mapa" class="map" />
						<p>Caldas</p>
						<p>Risaralda</p>
						<p>Quindío</p>
						<p>Cundinamarca</p>
						<p>Tolima</p>
						<div class="line"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="box box-items">
			<?php
			if ($nuestroInpacto2->have_posts()):
				while ($nuestroInpacto2->have_posts()):
					$nuestroInpacto2->the_post();
					?>
					<div class="item">
						<h4 class="item-title">
							<?php the_title(); ?>
						</h4>
						<h1 class="number-big" style="color: <?php echo the_field('colorTitleSomos'); ?> !important;">

							<?php the_content(); ?>
						</h1>
					</div>
				<?php endwhile;
			endif;
			wp_reset_postdata();
			?>
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