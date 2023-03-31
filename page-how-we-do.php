<?php get_header(); ?>
<?php
$banners = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 2,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'banners',
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
$cardsSkills = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'cardsSkills',
	'post_status' => 'publish'
]);
$ejesTematicos = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'ejesTematicos',
	'post_status' => 'publish'
]);
$tabsPrincipios = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'tabsPrincipios',
	'post_status' => 'publish'
]);
?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="howWeDo">
	<?php
	if ($banners->have_posts()):
		while ($banners->have_posts()):
			$banners->the_post();
			?>
			<div class="howWeDo__banner">
				<?php echo the_post_thumbnail() ?>
				<h1 class="title-banner">
					<?php the_title(); ?>
				</h1>
			</div>
		<?php endwhile;
	endif;
	wp_reset_postdata();
	?>
	<div class="section-we-promote">
		<div class="container">
			<h3 class="title">Promovemos el desarrollo de ocho habilidades socioemocionales:</h3>
			<div class="section-we-promote--grid">
				<?php
				if ($cardsSkills->have_posts()):
					while ($cardsSkills->have_posts()):
						$cardsSkills->the_post();
						?>
						<div class="card-colors" style="background: <?php echo the_field('backgroundColorSomos') ?>;">
							<div class="box">
								<h2>
									<?php the_title(); ?>
								</h2>
								<?php the_content(); ?>
								<p class="test-content">
									<?php echo the_field('textCardSkill') ?>
								</p>
							</div>
							<?php echo the_post_thumbnail() ?>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div class="section-program">
		<div class="container">
			<h2 class="section-program__title">Trabajamos estos cuatro ejes temáticos:</h2>
			<div class="list">
				<?php
				if ($ejesTematicos->have_posts()):
					while ($ejesTematicos->have_posts()):
						$ejesTematicos->the_post();
						?>
						<div class="item">
							<?php echo the_post_thumbnail() ?>
							<p class="text">
								<?php the_title(); ?>
							</p>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div class="section-ped">
		<div class="container">
			<div class="section-ped__title">
				<h2 class="sub-title">Nuestros proyectos son diseñados <br /> con estos principios pedagógicos:</h2>
			</div>
			<div class="row">
				<div class="column column--left">
					<ol>
						<?php
						if ($tabsPrincipios->have_posts()):
							while ($tabsPrincipios->have_posts()):
								$tabsPrincipios->the_post();
								?>
								<li>
									<button id="button-tab-<?php echo the_field('identificador') ?>" class="button-item">
										<?php the_title(); ?>
									</button>
								</li>
							<?php endwhile;
						endif;
						wp_reset_postdata();
						?>
					</ol>
				</div>
				<div class="column">
					<?php
					if ($tabsPrincipios->have_posts()):
						while ($tabsPrincipios->have_posts()):
							$tabsPrincipios->the_post();
							?>
							<div class="card-projects" id="card-<?php echo the_field('identificador') ?>">
								<?php the_content(); ?>
							</div>
						<?php endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
				<div class="column column--center">
					<?php
					if ($tabsPrincipios->have_posts()):
						while ($tabsPrincipios->have_posts()):
							$tabsPrincipios->the_post();
							?>
							<div class="image img-<?php echo the_field('identificador') ?>">
								<?php echo the_post_thumbnail() ?>
							</div>
						<?php endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
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
<!-- <script src="<?php echo "$urlTemplate/assets/js/index.js" ?>"></script> -->
<?php get_footer();