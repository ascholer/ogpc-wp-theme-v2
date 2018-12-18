<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OGPCv2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--
		<div class="corner-ribbon top-right sticky blue">11 YEARS!</div>
	-->
	<div class="container">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header --> 

	<?php ogpcv2_post_thumbnail(); ?>
	</container>

	<div class="container col-md-12 col-lg-9">
	<div class="entry-content">
		<div class="container">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ogpcv2' ),
				'after'  => '</div>',
			) );
			?>
	</div><!-- .entry-content -->
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
