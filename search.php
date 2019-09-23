<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package EndeWP
 */

get_header();
?>

	<main id="main" class="el-main">
		<section id="post-<?php the_ID(); ?>" <?php post_class(array("container", "page")); ?>>

		<?php if ( have_posts() ) : ?>

		<div class="page-content">
			<div class="row1 row">
				<div class=" title-base text-center col-md-12 ">
					<h2>
						<?php printf( esc_html__( 'Resultados de búsqueda de: %s', 'endewp' ), '<strong>' . get_search_query() . '</strong>' ); ?>
					</h2>
				</div>
			</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
