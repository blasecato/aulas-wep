<?php get_header(); ?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="page-contact">
	<div class="container">
		<div class="column">
			<h1 class="title-contact">Ponte en contacto con Aulas en Paz</h1>
		</div>
		<div class="column">
			<form>
				<div class="mb-3">
					<input placeholder="Nombre" type="text" class="form-control" id="name" aria-describedby="nameHelp">
				</div>
				<div class="mb-3">
					<input type="text" placeholder="Apellidos" class="form-control" id="lastName" aria-describedby="lastNameHelp">
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
					<label for="message" class="form-label">Email address</label>
					<textarea name="message" id="message" class="form-control form-control--textarea"></textarea>
				</div>
				<button type="submit" class="btn btn-send">ENVIAR</button>
			</form>
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