<?php get_header(); ?>
<?php
$banners = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 1,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'banners',
	'post_status' => 'publish'
]);
$weMake = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'weMake',
	'post_status' => 'publish'
]);
$weMake2 = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 1,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'weMake',
	'post_status' => 'publish'
]);
$weMake3 = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 2,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'weMake',
	'post_status' => 'publish'
]);
$cardsProjects = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'cardsProjects',
	'post_status' => 'publish'
]);
$mostRecentProjects = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'mostRecentProjects',
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
$readyPrograms = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'readyPrograms',
	'post_status' => 'publish'
]);
?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="WeMake">
	<?php
	if ($banners->have_posts()):
		while ($banners->have_posts()):
			$banners->the_post();
			?>
			<div class="WeMake__banner">
				<?php echo the_post_thumbnail() ?>
				<h1 class="title-banner">
					<?php the_title(); ?>
				</h1>
			</div>
		<?php endwhile;
	endif;
	wp_reset_postdata();
	?>
	<div class="WeMake-nav-links">
		<a href="#design-section" class="link-one">Diseño e implementación de programas escolares para la paz</a>
		<a href="#forming-section" class="link-two">Formación a educadores</a>
		<a href="#innovation-section" class="link-three">Innovación e Incidencia</a>
	</div>
	<div class="WeMake__content" id="design-section">
		<div class="WeMake__content--head">
			<div class="box box--text">
				<?php
				if ($weMake->have_posts()):
					while ($weMake->have_posts()):
						$weMake->the_post();
						?>
						<div class="WeMake__content--head__title">
							<h2 class="title-h2">
								<?php the_title(); ?>
							</h2>
						</div>
						<?php the_content(); ?>
					</div>
					<div class="box">
						<?php echo the_post_thumbnail() ?>
					</div>
				<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
		</div>
		<div class="container">
			<h3 class="container_title">Algunos de nuestros proyectos</h3>
			<div class="container__cards">
				<?php
				if ($cardsProjects->have_posts()):
					while ($cardsProjects->have_posts()):
						$cardsProjects->the_post();
						?>
						<div class="card-projects">
							<div class="cont-text">
								<div>
									<h3 class="card-projects--title">
										<?php the_title(); ?>
									</h3>
									<?php the_content(); ?>
								</div>
								<?php the_post_thumbnail() ?>
							</div>
							<a href="<?php echo the_field('urlSeeMore') ?>" class="see-more"
								style="background: <?php echo the_field('colorSeeMore') ?>;">conoce más</a>
						</div>

					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
		<div class="max-w">
			<h3 class="sub-title-w">¡Conoce nuestros programas listos para implementar!</h3>
			<div class="caroucel">
				<?php
				if ($readyPrograms->have_posts()):
					while ($readyPrograms->have_posts()):
						$readyPrograms->the_post();
						?>
						<div class="card-projects card-projects--small">
							<div>
								<h3 class="card-projects--title">
									<?php the_title(); ?>
								</h3>
								<div class="content">
									<?php the_content(); ?>
								</div>
							</div>
							<a href="<?php echo the_field('urlSeeMore') ?>" class="see-more"
								style="background: <?php echo the_field('colorSeeMore') ?>;">conoce más</a>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div class="container p-80" id="forming-section">
		<?php
		if ($weMake2->have_posts()):
			while ($weMake2->have_posts()):
				$weMake2->the_post();
				?>
				<div class="container__title">
					<h2 class="title-h2">
						<?php the_title(); ?>
					</h2>
				</div>
				<?php the_content(); ?>
			<?php endwhile;
		endif;
		wp_reset_postdata();
		?>
	</div>
	<div class="WeMake__content WeMake__content--bottom" id="innovation-section">
		<div class="WeMake__content--head">
			<?php
			if ($weMake3->have_posts()):
				while ($weMake3->have_posts()):
					$weMake3->the_post();
					?>
					<div class="box box--text">
						<div class="WeMake__content--head__title">
							<h2 class="title-h2 title-h2-yellow">
								<?php the_title(); ?>
							</h2>
						</div>
						<?php the_content(); ?>
					</div>
					<div class="box">
						<?php echo the_post_thumbnail() ?>
					</div>

				<?php endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<div class="container">
			<h3 class="container_title">¡Conoce nuestros más recientes proyectos!</h3>
			<div class="container__cards">
				<?php
				if ($mostRecentProjects->have_posts()):
					while ($mostRecentProjects->have_posts()):
						$mostRecentProjects->the_post();
						?>
						<div class="card-projects">
							<div class="cont-text">
								<div>
									<h3 class="card-projects--title">
										<?php the_title(); ?>
									</h3>
									<?php the_content(); ?>
								</div>
								<?php the_post_thumbnail() ?>
							</div>
							<a href="<?php echo the_field('urlSeeMore') ?>" class="see-more"
								style="background: <?php echo the_field('colorSeeMore') ?>;">conoce más</a>
						</div>

					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
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
<?php get_footer();