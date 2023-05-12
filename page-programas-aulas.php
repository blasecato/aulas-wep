<?php get_header(); ?>
<?php
$redesSociales = new WP_Query([
	'posts_per_page' => 4,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'redesSociales',
	'post_status' => 'publish'
]);
$CardAchieve = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'CardAchieve',
	'post_status' => 'publish'
]);

$url = $_SERVER["REQUEST_URI"];
$currentUrl = $url;
$componentes = parse_url($currentUrl);
parse_str($componentes['query'], $results);
// echo ($results['link']);

$weSeek = new WP_Query([
	'posts_per_page' => 2,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'weSeek',
	'post_status' => 'publish',
	'category_name' => $results['link'],
]);

$components = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'components',
	'post_status' => 'publish',
	'category_name' => $results['link'],
]);
$programs_view = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'programs_view',
	'post_status' => 'publish',
	'category_name' => $results['link'],
]);
$cardPrograms = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'cardPrograms',
	'post_status' => 'publish',
	'category_name' => $results['link'],
]);
$youCanAchieve = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'youCanAchieve',
	'post_status' => 'publish',
	'category_name' => $results['link'],
]);
?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="programs">

	<?php
	if ($programs_view->have_posts()):
		while ($programs_view->have_posts()):
			$programs_view->the_post();
			?>
			<div class="programs__banner">
				<?php echo the_post_thumbnail() ?>
				<h1 class="title-banner">
					<?php echo the_title() ?>
				</h1>
			</div>
			<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>

	<div class="programs__content">
		<div class="container">
			<?php
			if ($programs_view->have_posts()):
				while ($programs_view->have_posts()):
					$programs_view->the_post();
					?>
					<?php the_content(); ?>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
			<div class="flex-between">
				<?php
				if ($cardPrograms->have_posts()):
					while ($cardPrograms->have_posts()):
						$cardPrograms->the_post();
						?>
						<div class="card-info card-info--<?php echo the_field("backgroundColorSomos"); ?>">
							<h2 class="card_title">
								<?php the_title(); ?>
							</h2>
							<?php the_content(); ?>
							<a href="<?php echo the_field("urlSeeMore"); ?>" class="see-more see-more--dark ">
								<?php echo the_field("titleButtonConoceMas"); ?>
							</a>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>






	<?php
	if ($weSeek->found_posts > 0) {
		?>
		<div class="programs__chenge">
			<div class="box-left">
				<div class="cont">
					<div class="box-left__title">
						<h2 class="sub-title">¿Qué buscamos cambiar?</h2>
					</div>
					<div class="tabs">
						<?php
						if ($weSeek->have_posts()):
							while ($weSeek->have_posts()):
								$weSeek->the_post();
								?>
								<div>
									<button id="<?php echo the_field("identificador"); ?>" class="tabs__tab">
										<img src="<?php echo "$urlTemplate/assets/images/arrow-down.svg" ?>" alt="item"
											class="item item-down" />
										<img src="<?php echo "$urlTemplate/assets/images/arrow-rigth.svg" ?>" alt="item"
											class="item item-rigth" />
										<?php the_title(); ?>
									</button>
								</div>
							<?php endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
					<?php
					if ($weSeek->have_posts()):
						while ($weSeek->have_posts()):
							$weSeek->the_post();
							?>
							<div class="text" id="text-<?php echo the_field("identificador"); ?>">
								<?php the_content(); ?>
							</div>
						<?php endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="box-rigth">
				<img src="<?php echo "$urlTemplate/assets/images/change.png" ?>" alt="change" class="change" />
			</div>
		</div>
		<?php
	} else {
		echo "";
	}
	?>



	<?php
	if ($components->found_posts > 0) {
		?>
		<div class="programs__components">
			<div class="container">
				<div class="programs__components__title">
					<h2 class="sub-title">Componentes del programa</h2>
				</div>
				<div class="items">
					<?php
					if ($components->have_posts()):
						while ($components->have_posts()):
							$components->the_post();
							?>
							<button class="items-item" id="<?php echo the_field("identificador"); ?>">
								<img src="<?php echo "$urlTemplate/assets/images/arrow-orange-down.png" ?>" alt="item"
									class="orange" />
								<img src="<?php echo "$urlTemplate/assets/images/arrow-down.svg" ?>" alt="item" class="gray" />
								<?php the_title(); ?>
							</button>
						<?php endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>


				<?php
				if ($components->have_posts()):
					while ($components->have_posts()):
						$components->the_post();
						?>
						<div class="flex" id="content-<?php echo the_field("identificador"); ?>">
							<div class="flex-box">
								<?php the_content(); ?>
							</div>
							<?php echo the_post_thumbnail() ?>
						</div>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>

			</div>
		</div>
		<?php
	} else {
		echo "";
	}
	?>

	<div class="programs__section">
		<div class="container">
			<?php
			if ($youCanAchieve->found_posts > 0) {
				?>
				<h2 class="title">¿Qué puede lograr tu institución al <br /> implementar este programa?</h2>
				<div class="flex-wrap">
					<?php
					if ($youCanAchieve->have_posts()):
						while ($youCanAchieve->have_posts()):
							$youCanAchieve->the_post();
							?>
							<div class="box-card">
								<?php echo the_post_thumbnail() ?>
								<p class="paragraph">
									<?php the_title(); ?>
								</p>
							</div>
						<?php endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
				<?php
			} else {
				echo "";
			}
			?>
			<div class="cards">
				<?php
				if ($CardAchieve->have_posts()):
					while ($CardAchieve->have_posts()):
						$CardAchieve->the_post();
						?>
						<div class="cards__card-info"
							style="background-color: <?php echo the_field("backgroundColorSomos"); ?>;">
							<h3 class="cards__card-info--title">
								<?php the_title(); ?>
							</h3>
							<a href="<?php echo the_field("urlCardInfo"); ?>" class="see-more"
								style="background-color: <?php echo the_field("colorSeeMore"); ?>;">
								<?php echo the_field("titleButtonConoceMas"); ?>

							</a>
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
<?php get_footer(); ?>