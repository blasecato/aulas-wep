<?php get_header(); ?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="programs">
	<div class="programs__banner"
		style="background-image: url(<?php echo "$urlTemplate/assets/images/banner-programs.png" ?>);">
		<h1 class="title-banner">Programa <br /> Aulas en Paz</h1>
	</div>
	<div class="programs__content">
		<div class="container">
			<p class="text">
				<span>
					Aulas en Paz nació en el 2005 dentro del grupo de investigación “Educación, Desarrollo y Convivencia”, del
					departamento de Psicología de la Universidad de los Andes, dirigido por el profesor Enrique Chaux.
				</span>
				Desde su
				inicio el programa ha sido una propuesta innovadora para promover el desarrollo socioemocional de niñas, niños y
				adolescentes. Desde el 2008, el programa ha llegado de manera exitosa a 17 departamentos de Colombia y a otros
				países de América Latina como México, Chile y Perú.
			</p>
			<p class="text">
				<span>
					Aulas en paz es un programa que le apuesta a la construcción de paz desde el contexto escolar. Pues es desde
					allí donde no solo es posible aprender a convivir pacíficamente y romper con los ciclos de violencia, sino
					desarrollar las habilidades y competencias necesarias para convertirse en agentes de cambio y afrontar los
					desafíos sociales, ambientales y económicos del futuro.
				</span>
			</p>
			<div class="flex-between">
				<div class="card-info card-info--blue">
					<h2 class="card_title">¿A quién va dirigido?</h2>
					<ul class="list">
						<li>Estudiantes de 2° a 5° de primaria</li>
						<li>Docentes</li>
						<li>Madres, padres o cuidadores de los estudiantes</li>
					</ul>
				</div>
				<div class="card-info card-info--orange">
					<h2 class="card_title">¿Cuáles son las competencias socioemocionales que busca desarrollar?</h2>
					<ul class="list">
						<li>Manejo de la rabia</li>
						<li>Empatía</li>
						<li>Toma de perspectiva</li>
						<li>
							Generación creativa de opciones
						</li>
						<li>
							Consideración de consecuencias
						</li>
						<li>
							Pensamiento crítico
						</li>
						<li>
							Escucha activa
						</li>
						<li>
							Asertividad
						</li>
					</ul>
					<a href="" class="see-more see-more--dark">conoce más</a>
				</div>
			</div>
		</div>
	</div>
	<div class="programs__chenge">
		<div class="box-left">
			<div class="cont">
				<div class="box-left__title">
					<img src="<?php echo "$urlTemplate/assets/images/item-green-l.png" ?>" alt="item" class="item" />
					<h2 class="sub-title">¿Qué buscamos cambiar?</h2>
				</div>
				<div class="tabs">
					<button class="tabs__tab tabs__tab--active">
						<img src="<?php echo "$urlTemplate/assets/images/arrow-down.svg" ?>" alt="item" class="item" />
						Clima familiar y de aula
					</button>
					<button class="tabs__tab">
						<img src="<?php echo "$urlTemplate/assets/images/arrow-rigth.svg" ?>" alt="item" class="item" />
						Estructuras de las amistades
					</button>
				</div>
				<div class="text">
					<p class="body-bold">
						Acompañamos a los miembros de la comunidad educativa -docentes, orientadores, directivos, madres, padres y
						cuidadores- para que desarrollen en ellos y en sus hijos y estudiantes 8 competencias socioemocionales
						necesarias para crear ambientes de aprendizaje más pacíficos, democráticos y constructivos.
					</p>
					<p class="body-bold body-ligth">
						Acompañamos a los miembros de la comunidad educativa -docentes, orientadores, directivos, madres, padres y
						cuidadores- para que desarrollen en ellos y en sus hijos y estudiantes 8 competencias socioemocionales
						necesarias para crear ambientes de aprendizaje más pacíficos, democráticos y constructivos.
					</p>
				</div>
			</div>
		</div>
		<div class="box-rigth">
			<img src="<?php echo "$urlTemplate/assets/images/change.png" ?>" alt="change" class="change" />
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