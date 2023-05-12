<?php get_header(); ?>
<?php
$banners = new WP_Query([
	'posts_per_page' => 1,
	'offset' => 4,
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
$recursos_cards = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'recursos_cards',
	'post_status' => 'publish'
]);
$recursos_tematicas = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'recursos_tematicas',
	'post_status' => 'publish'
]);
$recurso_recursos = new WP_Query([
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'ASC',
	'post_type' => 'recurso_recursos',
	'post_status' => 'publish'
]);
?>

<?php $urlTemplate = get_template_directory_uri() ?>
<section class="page-resources">

	<?php
	if ($banners->have_posts()):
		while ($banners->have_posts()):
			$banners->the_post();
			?>
			<div class="page-resources__banner">
				<?php echo the_post_thumbnail() ?>
				<h1 class="title-banner">
					<?php the_title(); ?>
				</h1>
			</div>
		<?php endwhile;
	endif;
	wp_reset_postdata();
	?>

	<div class="page-resources__filters">
		<div class="container">
			<?php
			if ($banners->have_posts()):
				while ($banners->have_posts()):
					$banners->the_post();
					?>
					<?php echo the_content() ?>
				<?php endwhile;
			endif;
			wp_reset_postdata();
			?>
			<div class="conetnt">
				<div class="conetnt__row">
					<p class="label">
						Temática
						<img src="<?php echo "$urlTemplate/assets/images/row-rtl.png" ?>" alt="brand" class="brand" />
					</p>
					<div class="list">
						<?php
						if ($recursos_tematicas->have_posts()):
							while ($recursos_tematicas->have_posts()):
								$recursos_tematicas->the_post();
								?>
								<button id="<?php echo the_field('identificador') ?>" class="button-filter"
									onclick="arrayResources('<?php echo the_field('identificador') ?>', '<?php echo the_field('colorSeeMore') ?>', 'tematica')">
									<?php echo the_title() ?>
									<img src="<?php echo "$urlTemplate/assets/images/close.png" ?>" alt="brand" class="brand" />
								</button>
							<?php endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
				<div class="conetnt__row conetnt__row--wrap">
					<p class="label">
						Recurso
						<img src="<?php echo "$urlTemplate/assets/images/row-rtl.png" ?>" alt="brand" class="brand" />
					</p>
					<div class="list list--wrap">
						<?php
						if ($recurso_recursos->have_posts()):
							while ($recurso_recursos->have_posts()):
								$recurso_recursos->the_post();
								?>
								<button id="<?php echo the_field('identificador') ?>" class="button-filter"
									onclick="arrayResources('<?php echo the_field('identificador') ?>', '<?php echo the_field('colorSeeMore') ?>', 'recursos')">
									<?php echo the_title() ?>
									<img src="<?php echo "$urlTemplate/assets/images/close.png" ?>" alt="brand" class="brand" />
								</button>
							<?php endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content__cards">
		<div class="container">
			<div id="first-flex-wrap" class="felx-wrap">
				<?php
				if ($recursos_cards->have_posts()):
					while ($recursos_cards->have_posts()):
						$recursos_cards->the_post();
						?>
						<div class="card-developing">
							<div class="card-developing__head"
								style="background-color: <?php echo the_field("colorSeeMore"); ?> !important;">
								<p class="title-type">
									<?php echo the_field("tematica"); ?>
								</p>
								<h2 class="title-card">
									<?php echo the_title() ?>
								</h2>
								<div class="head-bottom">
									<div class="type">
										<?php
										$image = get_field('icono_card_recursos');
										if (!empty($image)): ?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
										<span>
											<?php echo the_field("nombreRecurso"); ?>
										</span>
									</div>
									<?php echo the_post_thumbnail() ?>
								</div>
							</div>
							<div class="card-developing__footer">
								<p class="for">Útil para:</p>
								<p class="text">
									<?php echo the_content() ?>
								</p>
								<a href="<?php echo the_field("urlSeeMore"); ?>" class="see-more see-more--black">ver y
									descargar</a>
							</div>
						</div>
						<?php
						$tematica = get_field('tematica');
						$category = get_field('identificador');
						$recurso = get_field('nombreRecurso');
						$idRecurso = get_field('identificadorDeRecurso');
						$color = get_field("colorSeeMore");
						$title = get_the_title();
						$text = get_the_content();
						$url = get_field('urlSeeMore');
						$id = get_the_ID();
						$imageBig = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]
							?>
						<?php
						$arreglo[] = array(
							"id" => $id,
							"tematica" => $tematica,
							"color" => $color,
							"image" => $image['url'],
							"url" => $url,
							"recurso" => $recurso,
							"idRecurso" => $idRecurso,
							"title" => $title,
							"imageBig" => $imageBig,
							"category" => $category,
							"text" => $text
						);
						?>
					<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
			<div id="flex-wrap" class="felx-wrap">

			</div>
			<div class="center">
				<a href="" class="see-more see-more--orange-ligth">cargar más</a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	const array = [];
	const cardsFilters = [];
	var cards = '<?php echo json_encode($arreglo); ?>';
	const arrayCantCards = JSON.parse(cards);
	console.log("cards", arrayCantCards);
	const elementHidden = () => {
		if (array.length >= 1) {
			document.querySelector(`.felx-wrap`)?.classList?.add("element-hidden")
		} else if (array.length <= 0) {
			document.querySelector(`.felx-wrap`)?.classList?.remove("element-hidden")
		}
	}
	const arrayResources = (item, color, type) => {
		console.log("holaaaaaasdasd", item, color, type);
		if (array.length <= 0) {
			array.push(item)
			document.querySelector(`#${item}`)?.classList?.add("button-filter--active")
			document.querySelector(`#${item}`).style.background = `${color}`;
			elementHidden();
			functionFilter(arrayCantCards, item, type);
		} else {
			for (let index = 0; index < array.length; index++) {
				const arrayIndex = array.findIndex(
					(itemID) => itemID === item
				);
				if (arrayIndex >= 0) {
					array.splice(arrayIndex, 1);
					document.querySelector(`#${item}`)?.classList?.remove("button-filter--active")
					document.querySelector(`#${item}`).style.background = "#e3e3e3";
					elementHidden();
					functionFilter(arrayCantCards, item, type);
					return
				} else {
					array.push(item)
					document.querySelector(`#${item}`)?.classList?.add("button-filter--active")
					document.querySelector(`#${item}`).style.background = `${color}`;
					elementHidden();
					functionFilter(arrayCantCards, item, type);
					return
				}
			}
		}
	}
	const listItemsTematica = []
	const listItemsRecursos = []
	const functionFilter = (arrayCard, item, type) => {
		console.log("arrayCardcsfsdfdsfds", arrayCard, item, type)





		const newArray = [];
		if (listItemsTematica.length >= 1) {
			for (let index = 0; index < cardsFilters.length; index++) {
				for (let j = 0; j < listItemsRecursos.length; j++) {
					if (listItemsRecursos[j] === cardsFilters[index].idRecurso) {
						console.log("Holasdfhdsjkfhjksdhfjsdks", listItemsRecursos[j])
						newArray.push(cardsFilters[index])
					}

				}
				// if (cardsFilters[index].idRecurso === item) {
				// 	const CardIndex = cardsFilters.findIndex(
				// 		(card) => card.id === cardsFilters[index].id
				// 	);
				// 	if (CardIndex >= 0) {
				// 		console.log("cumplio 1")
				// 	} else {
				// 		cardsFilters.splice(CardIndex, 1);
				// 		// cardsFilters.push(cardsFilters[index]);
				// 		console.log("cumplio 2", cardsFilters[index])
				// 	}
				// }
			}
			// cardsFilters.push(newArray)
			console.log("new", newArray);
		}



		if (type === "tematica") {
			if (listItemsTematica.length <= 0) {
				listItemsTematica.push(item);
			} else {
				const ItemIndex = listItemsTematica.findIndex(
					(items) => items === item
				);
				if (ItemIndex >= 0) {
					listItemsTematica.splice(ItemIndex, 1);
				} else {
					listItemsTematica.push(item);
				}
			}
			console.log("listItemsTematica", listItemsTematica)
		}
		if (type === "recursos") {
			if (listItemsRecursos.length <= 0) {
				listItemsRecursos.push(item);
			} else {
				const ItemIndex = listItemsRecursos.findIndex(
					(items) => items === item
				);
				if (ItemIndex >= 0) {
					listItemsRecursos.splice(ItemIndex, 1);
				} else {
					listItemsRecursos.push(item);
				}
			}
			console.log("listItemsRecursos", listItemsRecursos)
		}

		if (type === "tematica") {
			for (let index = 0; index < arrayCard.length; index++) {
				if (arrayCard[index].category === item) {
					const CardIndex = cardsFilters.findIndex(
						(card) => card.id === arrayCard[index].id
					);
					if (CardIndex >= 0) {
						cardsFilters.splice(CardIndex, 1);
					} else {
						cardsFilters.push(arrayCard[index]);
					}
				}
			}
		}

		if (listItemsTematica.length <= 0) {
			for (let index = 0; index < arrayCard.length; index++) {
				if (arrayCard[index].idRecurso === item) {
					const CardIndex = cardsFilters.findIndex(
						(card) => card.id === arrayCard[index].id
					);
					if (CardIndex >= 0) {
						cardsFilters.splice(CardIndex, 1);
					} else {
						cardsFilters.push(arrayCard[index]);
					}
				}
			}
		}


		// if (listItemsRecursos.length >= 1 && listItemsTematica.length >= 1) {
		// 	for (let index = 0; index < arrayCard.length; index++) {

		// 		console.log(tematicaIndex)
		// 		console.log(recursosIndex)
		// 	}
		// }





















		// if (type === "tematica") {
		// 	for (let index = 0; index < arrayCard.length; index++) {
		// 		if (arrayCard[index].category === item) {
		// 			const CardIndex = cardsFilters.findIndex(
		// 				(card) => card.id === arrayCard[index].id
		// 			);
		// 			if (CardIndex >= 0) {
		// 				for (let j = 0; j < listItemsRecursos.length; j++) {
		// 					if (arrayCard[index].idRecurso !== listItemsRecursos[j]) {
		// 						cardsFilters.splice(CardIndex, 1);

		// 					}

		// 				}

		// 			} else {
		// 				cardsFilters.push(arrayCard[index]);
		// 			}
		// 		}
		// 	}
		// }
		// if (type === "recursos") {
		// 	for (let index = 0; index < arrayCard.length; index++) {
		// 		if (arrayCard[index].idRecurso === item) {
		// 			const CardIndex = cardsFilters.findIndex(
		// 				(card) => card.id === arrayCard[index].id
		// 			);
		// 			if (CardIndex >= 0) {
		// 				for (let j = 0; j < listItemsTematica.length; j++) {
		// 					if (arrayCard[index].category !== listItemsTematica[j]) {
		// 						cardsFilters.splice(CardIndex, 1);

		// 					}
		// 				}
		// 			} else {
		// 				cardsFilters.push(arrayCard[index]);
		// 			}
		// 		}
		// 	}

		// }
		if (listItemsTematica.length === 0 && listItemsRecursos === 0) {
			cardsFilters = [];
		}
		console.log("cardsFilters", cardsFilters)
		functionCreateCards(cardsFilters)
	}
	const functionCreateCards = (cardsFilters) => {
		var wrap = document.getElementById("flex-wrap");


		for (let index = 0; index < arrayCantCards.length; index++) {
			var card_exist = document.getElementById(`card-${arrayCantCards[index].id}`);
			card_exist?.remove();
		}
		for (let index = 0; index < cardsFilters.length; index++) {
			var card_exist = document.getElementById(`card-${cardsFilters[index].id}`)
			if (card_exist === null || card_exist === undefined) {
				var card = document.createElement('div');
				card.setAttribute("id", `card-${cardsFilters[index].id}`);
				card.setAttribute("class", "card-developing");
				wrap.appendChild(card)
				var head = document.createElement('div');
				head.style.background = `${cardsFilters[index].color}`;
				var cont_img = document.createElement('div');
				head.setAttribute("class", "card-developing__head");
				var p_title = document.createElement('p');
				var h2_title = document.createElement('h2');
				p_title.setAttribute("class", "title-type");
				h2_title.setAttribute("class", "title-card");
				cont_img.setAttribute("class", "head-bottom");
				card.appendChild(head)
				head.appendChild(p_title)
				head.appendChild(h2_title)
				head.appendChild(cont_img)
				p_title.textContent = `${cardsFilters[index].tematica}`
				h2_title.textContent = `${cardsFilters[index].title}`

				var imageBig = document.createElement('img');
				var icon = document.createElement('img');
				var type = document.createElement('div');
				var span = document.createElement('span');
				span.textContent = `${cardsFilters[index].idRecurso}`
				type.setAttribute("class", "type")
				imageBig.setAttribute("src", `${cardsFilters[index].imageBig}`);
				icon.setAttribute("src", `${cardsFilters[index].image}`);
				cont_img.appendChild(type)
				cont_img.appendChild(imageBig)
				type.appendChild(icon)
				type.appendChild(span)

				var bottom = document.createElement('div');
				bottom.setAttribute("class", "card-developing__footer");
				card.appendChild(bottom)
				var p_for = document.createElement('p');
				var p_text = document.createElement('p');
				var link = document.createElement('a');
				p_for.setAttribute("class", "for");
				p_text.setAttribute("class", "text");
				link.setAttribute("class", "see-more see-more--black");
				link.setAttribute("href", `${cardsFilters[index].url}`);
				p_for.textContent = "ÚTIL PARA:";
				p_text.textContent = `${cardsFilters[index].text}`;
				link.textContent = "VER Y DESCARGAR";
				bottom.appendChild(p_for);
				bottom.appendChild(p_text);
				bottom.appendChild(link);
			}
		}
		console.log("cards222222", array);
	}

</script>


<?php get_footer();