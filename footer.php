<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<?php $urlTemplate = get_template_directory_uri() ?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->
<footer id="colophon" class="Footer">
	<div class="container">
		<h2 class="Footer--title">¿Quieres<br />contactarnos?</h2>
		<div class="Footer__colum">
			<p class="item item-nodecoration">Escríbenos</p>
			<a href="mailto:redes@aulasenpaz.org" class="item item--email">redes@aulasenpaz.org</a>
		</div>
		<div class="flex">
			<div class="Footer__colum">
				<a target="_blank" href="https://www.instagram.com/aulas_en_paz/" class="item">
					<img src="<?php echo "$urlTemplate/assets/images/instagramSvg.svg" ?>" alt="icon"/>	
					Instagram
				</a>
				<a href="https://www.facebook.com/aulasenpaz" target="_blank" class="item">
					<img src="<?php echo "$urlTemplate/assets/images/facebook.svg" ?>" alt="icon"/>	
					Facebook
				</a>
				<a href="https://twitter.com/Aulasenpaz" target="_blank" class="item">
					<img src="<?php echo "$urlTemplate/assets/images/twitter.svg" ?>" alt="icon"/>	
					Twitter
				</a>
			</div>
			<div class="Footer__colum">
				<a href="https://www.linkedin.com/company/programa-aulas-en-paz/" target="_blank" class="item">
					<img src="<?php echo "$urlTemplate/assets/images/Linkedin.svg" ?>" alt="icon"/>	
					LinkedIn
				</a>
				<a href="https://www.youtube.com/c/aulasenpazcolombia" target="_blank" class="item">
					<img src="<?php echo "$urlTemplate/assets/images/youtube.svg" ?>" alt="icon"/>	
					Youtube
				</a>
			</div>
		</div>
	</div>
	<a href="#top" class="go-top">
		Volver <br /> arriba
	</a>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
	crossorigin="anonymous"></script>
<script src="<?php echo "$urlTemplate/assets/js/howWeDo.js" ?>"></script>
<script src="<?php echo "$urlTemplate/assets/js/programs.js" ?>"></script>
<script src="<?php echo "$urlTemplate/assets/js/index.js" ?>"></script>

<script src="js/imgLiquid-min.js"></script>

</html>