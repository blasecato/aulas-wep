<?php get_header(); ?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="howWeDo">
	<div class="howWeDo__banner"
		style="background-image: url(<?php echo "$urlTemplate/assets/images/banner-about-us.png" ?>);">
		<h1 class="title-banner">¿Cómo lo hacemos?</h1>
	</div>
	<div class="section-we-promote">
		<div class="container">
			<h3 class="title">Promovemos el desarrollo de ocho <br /> habilidades socioemocionales:</h3>
			<div class="section-we-promote--grid">
				<div class="card-colors card-colors--blue">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
				<div class="card-colors card-colors--purple">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
				<div class="card-colors card-colors--dark">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
				<div class="card-colors card-colors--orange">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
				<div class="card-colors card-colors--blue">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
				<div class="card-colors card-colors--dark">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
				<div class="card-colors card-colors--purple">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
				<div class="card-colors card-colors--orange">
					<h2>Manejo de la rabia</h2>
					<p>competencia emocional</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section-program">
		<div class="container">
			<h2 class="section-program__title">El programa tienes tres ejes <br /> temáticos transversales:</h2>
			<div class="list">
				<div class="item">
					<img src="<?php echo "$urlTemplate/assets/images/circle1.png" ?>" alt="circle" class="circle" />
					<p class="text">Desarrollo <br /> socioemocional</p>
				</div>
				<div class="item">
					<img src="<?php echo "$urlTemplate/assets/images/circle2.png" ?>" alt="circle" class="circle" />
					<p class="text">Manejo de <br /> conflictos</p>
				</div>
				<div class="item">
					<img src="<?php echo "$urlTemplate/assets/images/circle3.png" ?>" alt="circle" class="circle" />
					<p class="text">Prevención de <br /> la agresión</p>
				</div>
				<div class="item">
					<img src="<?php echo "$urlTemplate/assets/images/circle4.png" ?>" alt="circle" class="circle" />
					<p class="text">Salud <br /> mental</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section-ped">
		<div class="container">
			<div class="section-ped__title">
				<img src="<?php echo "$urlTemplate/assets/images/item-green.png" ?>" alt="circle" class="image" />
				<h2 class="sub-title">Nuestros proyectos son diseñados <br /> con estos principios pedagógicos:</h2>
			</div>
			<div class="row">
				<div class="column column--left">
					<ol>
						<li>
							<button id="button-Significant-learning" class="button-item">Aprendizaje significativo</button>
						</li> 
						<li>
							<button class="button-item">Motivación</button>
						</li>
						<li>
							<button class="button-item">Aprender haciendo</button>
						</li>
						<li>
							<button class="button-item">Aprender cooperando</button>
						</li>
						<li>
							<button class="button-item">Zona de desarrollo <br /> próximo</button>
						</li>
						<li>
							<button class="button-item">Reflexión</button>
						</li>
						<li>
							<button class="button-item">Aprendizaje por observación</button>
						</li>
					</ol>
				</div>
				<div class="column column--center">
					<img src="<?php echo "$urlTemplate/assets/images/boy.png" ?>" alt="circle" class="image" />
				</div>
				<div class="column">
					<div class="card-projects">
						<h5>
							<span>Diseñamos actividades que tengan conexión con la vida de los participantes.</span> Así, cada una de las
							temáticas que abordamos en las sesiones tendrá una aplicación a la vida y el contexto de cada persona.
						</h5>
					</div>
				</div>
			</div>
		</div>
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