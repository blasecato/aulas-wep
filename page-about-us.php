<?php get_header(); ?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="aboutUs">
	<div class="aboutUs__banner"
		style="background-image: url(<?php echo "$urlTemplate/assets/images/banner-about-us.png" ?>);">
		<h1 class="title-banner">¿Quiénes somos?</h1>
	</div>
	<div class="row-information row-information--ra">
		<div class="column column-left">
			<img src="<?php echo "$urlTemplate/assets/images/item-pink.png" ?>" alt="item" class="item" />
			<p><span>Somos </span> un grupo de profesionales multidisciplinares que cree en la educación como motor de cambio
				social.</p>
		</div>
		<div class="column column-rigth">
			<img src="<?php echo "$urlTemplate/assets/images/Recurso1.png" ?>" alt="Recurso" class="image" />
		</div>
	</div>
	<div class="row-information row-information--rtl">
		<div class="column column-rigth">
			<img src="<?php echo "$urlTemplate/assets/images/Recurso1.png" ?>" alt="Recurso" class="image" />
		</div>
		<div class="column column-left">
			<img src="<?php echo "$urlTemplate/assets/images/item-yellow.png" ?>" alt="item" class="item" />
			<p class="yellow"><span>Creemos </span> que las comunidades educativas son un poderoso agente de cambio y que,
				junto a
				ellas, podemos prevenir la violencia, consolidar sociedades más pacíficas y formar seres humanos capaces de
				construir un mejor futuro para las personas y el planeta.</p>
		</div>
	</div>
	<div class="row-information row-information--lf">
		<div class="column column-left">
			<img src="<?php echo "$urlTemplate/assets/images/item.png" ?>" alt="item" class="item" />
			<p class="dark"><span>Buscamos </span> potenciar la labor de docentes, estudiantes, familias y organizaciones para
				construir ambientes de aprendizaje más pacíficos y libres de violencia.</p>
		</div>
		<div class="column column-rigth">
			<img src="<?php echo "$urlTemplate/assets/images/Recurso1.png" ?>" alt="Recurso" class="image" />
		</div>
	</div>
	<div class="section-our-dna">
		<div class="section-our-dna__title">
			<img src="<?php echo "$urlTemplate/assets/images/item-pink.png" ?>" alt="item" class="item" />
			<h2 class="sub-title">Nuestro ADN</h2>
		</div>
		<div class="row row--one">
			<div class="column">
				<div class="card">
					<img src="<?php echo "$urlTemplate/assets/images/bomp.png" ?>" alt="item" class="item" />
					<h2 class="card--title">Coherencia</h2>
					<p class="card--text">Usamos las mismas competencias que queremos que las personas desarrollen en su vida
						cotidiana. Por eso trabajamos regulando nuestras emociones, manejando los conflictos de manera pacífica y
						luchando contra los abusos de poder, incluyendo el bullying.
					</p>
				</div>
				<div class="card">
					<img src="<?php echo "$urlTemplate/assets/images/user.png" ?>" alt="item" class="item" />
					<h2 class="card--title">Comunidad</h2>
					<p class="card--text">La transformación de las personas es indispensable, pero no suficiente. Creemos que en
						el nosotros se esconde un gran poder. Por eso, trabajamos Impulsando y potenciando el trabajo colectivo y
						la colaboración.
					</p>
				</div>
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
				<div class="card">
					<img src="<?php echo "$urlTemplate/assets/images/bool.png" ?>" alt="item" class="item" />
					<h2 class="card--title">Diversidad</h2>
					<p class="card--text">Estamos comprometidos con la inclusión y con la defensa de los derechos de todas las
						personas. Creemos que cuando incluimos diversas voces se producen cambios sistémicos. Por eso, construimos
						equipos
						con conocimientos, capacidades, experiencias, creencias e historias diversas.

					</p>
				</div>
				<div class="card">
					<img src="<?php echo "$urlTemplate/assets/images/book.png" ?>" alt="item" class="item" />
					<h2 class="card--title">Rigurosidad</h2>
					<p class="card--text">Nuestro trabajo está basado en evidencia científica e investigación. Es a través de la
						rigurosidad académica que se produce un conocimiento valioso que puede y debe ser puesto a disposición de la
						sociedad y de la construcción de paz.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section-our-team">
		
	</div>
</section>
<div class="networks">
	<a href="" class="item">
		<img src="<?php echo "$urlTemplate/assets/images/facebook.svg" ?>" alt="brand" class="brand" />
	</a>
	<a href="" class="item">
		<img src="<?php echo "$urlTemplate/assets/images/instagramSvg.svg" ?>" alt="brand" class="brand" />
	</a>
	<a href="" class="item">
		<img src="<?php echo "$urlTemplate/assets/images/twitter.svg" ?>" alt="brand" class="brand" />
	</a>
	<a href="" class="item">
		<img src="<?php echo "$urlTemplate/assets/images/youtube.svg" ?>" alt="brand" class="brand" />
	</a>
</div>
<?php get_footer();