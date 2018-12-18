<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OGPCv2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<section>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="site-info text-center">
								<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ogpc-footer-logo.png"/>
								<p style="font-size: 120%;">&copy; OGPC 2016-<?php echo date("Y"); ?></p>
								<p>
									<a href="<?php echo site_url(); ?>/Contact">Contact</a> | <a href="<?php echo site_url(); ?>/faq">FAQ</a> | <a href="<?php echo site_url(); ?>/partners">Partners</a> | <a href="https://www.facebook.com/OregonGameProjectChallenge/">Facebook</a> | <a href="<?php echo site_url(); ?>/privacy">Privacy</a>
								</p>
							</div><!-- .site-info -->
						</div>
					</div>
				</div>
			</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
