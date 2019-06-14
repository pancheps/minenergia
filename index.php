<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

get_header();
?>

	<main id="main" class="el-main">
		<section class="container page">
		  
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<div class="page-header">
					<div class="page-title">
					<h1><?php single_post_title(); ?></h1>
					</div>
				</div>
				<?php
			endif; ?>
			<div class="page-content">
			<?php
			$counter = 0;
			$postPerRow = 3;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if ($counter < $postPerRow) {
					if ($counter == 0) {
						?>
						<div class="p-box el-row">
						<?php
					}
					$counter ++;
				} 
				
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
				if ($counter >= $postPerRow) {
					?>
					</div>
					<?php
					$counter = 0;
				}

			endwhile;
			?>
			</div>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</section>
	</main>
<?php
get_footer();
