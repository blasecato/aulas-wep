<?php get_header(); ?>
<?php $urlTemplate = get_template_directory_uri() ?>
<section class="homePage">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="<?php echo "$urlTemplate/assets/images/banner-nina.png" ?>" alt="logo" class="logo" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="title-banner">Habilidades para la vida, <br />
            sociedades para la paz.<br />
            <a href="" class="see-more see-more--green-dark">leer más</a>
          </h5>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="<?php echo "$urlTemplate/assets/images/banner-nina.png" ?>" alt="logo" class="logo" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="title-banner">Habilidades para la vida, <br />
            sociedades para la paz.<br />
            <a href="" class="see-more see-more--green-dark">leer más</a>
          </h5>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="<?php echo "$urlTemplate/assets/images/banner-nina.png" ?>" alt="logo" class="logo" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="title-banner">Habilidades para la vida,<br />
            sociedades para la paz.<br />
            <a href="" class="see-more see-more--green-dark">leer más</a>
          </h5>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="<?php echo "$urlTemplate/assets/images/banner-nina.png" ?>" alt="logo" class="logo" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="title-banner">Habilidades para la vida,<br />
            sociedades para la paz.<br />
            <a href="" class="see-more see-more--green-dark">leer más</a>
          </h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="section-what-do">
    <div class="container">
      <h1 class="sub-title">¿Qué hacemos?</h1>
      <div class="item">
        <div class="item__box">
          <div class="item__box--title">
            <img src="<?php echo "$urlTemplate/assets/images/item.png" ?>" alt="logo" class="logo" />
            <h3 class="item-title">Diseño e implementación de programas</h3>
          </div>
          <p class="item-paragraph">A través de la implementación de un programa multicomponente, fomentamos el
            desarrollo de habilidades socioemocionales en todos los miembros de la comunidad educativa - docentes,
            estudiantes y sus familias- y los formamos como agentes capaces de liderar el cambio y construir entornos
            libres de violencia.</p>
          <a href="./" class="see-more">conoce más</a>
        </div>
        <div class="item__box">
          <img src="<?php echo "$urlTemplate/assets/images/item1.png" ?>" alt="logo" class="childrend" />
        </div>
      </div>
      <div class="item">
        <div class="item__box">
          <img src="<?php echo "$urlTemplate/assets/images/item2.png" ?>" alt="logo" class="childrend" />
        </div>
        <div class="item__box">
          <div class="item__box--title">
            <img src="<?php echo "$urlTemplate/assets/images/item.png" ?>" alt="logo" class="logo" />
            <h3 class="item-title">Formación a educadores</h3>
          </div>
          <p class="item-paragraph">Apoyamos la labor de organizaciones enfocadas en el trabajo con comunidades
            educativas y les ayudamos a potenciar su labor y escalar su impacto a través de:
            Consultoría, Evaluación, Investigación e Incidencia en política pública.</p>
          <a href="./" class="see-more see-more--blue">conoce más</a>
        </div>
      </div>
      <div class="item">
        <div class="item__box">
          <div class="item__box--title">
            <img src="<?php echo "$urlTemplate/assets/images/item.png" ?>" alt="logo" class="logo" />
            <h3 class="item-title">Innovación e incidencia</h3>
          </div>
          <p class="item-paragraph">Formamos a miembros de comunidades educativas, organizaciones, empresas o personas
            interesadas en aprender y desarrollar sus habilidades socioemocionales y fortalecer su labor como
            constructores de paz.
          </p>
          <a href="./" class="see-more see-more--orange">conoce más</a>
        </div>
        <div class="item__box">
          <img src="<?php echo "$urlTemplate/assets/images/item3.png" ?>" alt="logo" class="childrend" />
        </div>
      </div>
    </div>
  </div>
  <div class="section-promote">
    <h2 class="title-h2">¿Quieres aprender cómo promover el <br /> desarrollo socioemocional en tu entorno? </h2>
    <p class="paragraph">¡Explora la Caja de Herramientas que hemos diseñado para ti!</p>
    <a href="./" class="see-more see-more--pink">conoce más</a>
  </div>
  <div class="section-working">
    <div class="container">
      <div class="section-working__title">
        <img src="<?php echo "$urlTemplate/assets/images/item-yellow.png" ?>" alt="logo" class="item" />
        <h2 class="title-h2">Hemos trabajado con</h2>
      </div>
      <div class="section-working__brands">
        <img src="<?php echo "$urlTemplate/assets/images/natura.png" ?>" alt="brand" class="brand" />
        <img src="<?php echo "$urlTemplate/assets/images/StC.png" ?>" alt="brand" class="brand" />
        <img src="<?php echo "$urlTemplate/assets/images/plan.png" ?>" alt="brand" class="brand" />
        <img src="<?php echo "$urlTemplate/assets/images/Manuelita.png" ?>" alt="brand" class="brand" />
        <img src="<?php echo "$urlTemplate/assets/images/movistar.png" ?>" alt="brand" class="brand" />
      </div>
    </div>
  </div>
  <div class="section-working section-working--two">
    <div class="container">
      <div class="section-working__title">
        <img src="<?php echo "$urlTemplate/assets/images/item-green.png" ?>" alt="logo" class="item" />
        <h2 class="title-h2">Hacemos parte de</h2>
      </div>
      <div class="section-working__brands">
        <img src="<?php echo "$urlTemplate/assets/images/unesco.png" ?>" alt="brand" class="brand" />
        <img src="<?php echo "$urlTemplate/assets/images/coalition.png" ?>" alt="brand" class="brand" />
        <img src="<?php echo "$urlTemplate/assets/images/gppac.png" ?>" alt="brand" class="brand" />
        <img src="<?php echo "$urlTemplate/assets/images/educapaz.png" ?>" alt="brand" class="brand" />
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