<?php
$programs_view = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'programs_view',
	'post_status' => 'publish'
]);
// $urlActual = $_SERVER["REQUEST_URI"];
// $currentUrlA = $urlActual;
// $componentss = parse_url($currentUrlA);
// parse_str($componentss['query'], $resultss);
?>

<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Aulas en paz</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="shortcut icon" href="https://www.aulasenpaz.org/wp-content/uploads/2020/12/Logo_AEP_Editable-01.png">
	<?php wp_head(); ?>
</head>

<body>

	<div id="page">

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<?php $urlTemplate = get_template_directory_uri() ?>
				<nav class="Header" id="top">
					<div class="container">
						<a href="/">
							<img src="<?php echo "$urlTemplate/assets/images/logo-Aulas.png" ?>" alt="logo" class="logo" />
						</a>
						<ul>
							<li>
								<a href="/about-us" id="index-about-us" class="item">
									Quiénes somos
								</a>
								<a href="/we-make" id="index-we-make" class="item">
									Qué hacemos
								</a>
								<a href="/how-we-do" id="index-how-we-do" class="item">
									Cómo lo hacemos
								</a>
								<div id="index-programs" class="item">
									Programas
									<img src="<?php echo "$urlTemplate/assets/images/arrow-r.svg" ?>" alt="arrow"
										class="arrow-inactive" />
									<img src="<?php echo "$urlTemplate/assets/images/arrow-d.svg" ?>" alt="arrow" class="arrow-active" />
									<div class="sub-menu" id="">
										<?php
										if ($programs_view->have_posts()):
											while ($programs_view->have_posts()):
												$programs_view->the_post();
												?>
												<a href="/programas-aulas/?link=<?php echo the_field('identificador') ?>" id="url-<?php echo the_field('identificador') ?>">
													<?php the_title(); ?>
												</a>
											<?php endwhile;
										endif;
										wp_reset_postdata();
										?>
									</div>
								</div>
								<a href="/resources/" id="index-resources" class="item">
									Recursos
								</a>
								<a href="/contact/" id="index-contact" class="item">
									Contacto
								</a>
							</li>
						</ul>
						<button class="button-menu" id="button-open-menu">
							<img src="<?php echo "$urlTemplate/assets/images/open-menu.png" ?>" alt="logo" class="logo-open" />
							<img src="<?php echo "$urlTemplate/assets/images/close-menu.png" ?>" alt="logo" class="logo-close" />
						</button>
					</div>
					<div class="menu" id="menu-header">
						<ul>
							<li>
								<a href="/about-us" id="index-about-us" class="item">
									Quiénes somos
								</a>
								<a href="/we-make" id="index-we-make" class="item">
									Qué hacemos
								</a>
								<a href="/how-we-do" id="index-how-we-do" class="item">
									Cómo lo hacemos
								</a>
								<div id="index-programs" class="item">
									Programas
									<img src="<?php echo "$urlTemplate/assets/images/arrow-r.svg" ?>" alt="arrow"
										class="arrow-inactive" />
									<img src="<?php echo "$urlTemplate/assets/images/arrow-d.svg" ?>" alt="arrow" class="arrow-active" />
									<div class="sub-menu" id="">
										<?php
										if ($programs_view->have_posts()):
											while ($programs_view->have_posts()):
												$programs_view->the_post();
												?>
												<a href="/programas-aulas/?link=<?php echo the_field('identificador') ?>" id="url-<?php echo the_field('identificador') ?>">
													<?php the_title(); ?>
												</a>
											<?php endwhile;
										endif;
										wp_reset_postdata();
										?>
									</div>
								</div>
								<a href="/resources/" id="index-resources" class="item">
									Recursos
								</a>
								<a href="/contact/" id="index-contact" class="item">
									Contacto
								</a>
							</li>
						</ul>
					</div>
				</nav>
				<main id="main" class="site-main">