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
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body>
<div id="page">

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
		<?php $urlTemplate = get_template_directory_uri() ?>
			<nav class="Header">
				<div class="container">
					<a href="./">
						<img src="<?php echo "$urlTemplate/assets/images/logo-Aulas.jpg" ?>" alt="logo" class="logo"/>
					</a>
					<ul>
						<li>
							<a href="/about-us">Quiénes somos</a>
							<a href="/we-make">Qué hacemos</a>
							<a href="/how-we-do">Cómo lo hacemos</a>
							<a href="/programs">Programas</a>
							<a href="/">Recursos</a>
							<a href="/">Contacto</a>
						</li>
					</ul>
				</div>
			</nav>
			<main id="main" class="site-main">
