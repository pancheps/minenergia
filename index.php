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
		<section class="container page" <?php post_class(array("container", "page")); ?>>

		<?php
		
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
			<div class="page-content">
				<div class="row1 row">
					<div class=" title-base text-center col-md-12 ">
					<h2>NOTICIAS</h2>
					</div>
				</div>
				<?php
			endif; ?>
			<div>
			<?php
			$counter = 0;
			$postPerRow = 4;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$categories = get_the_category();
				if ($categories[0]->name == "Noticias") {
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
				}
			endwhile;
			?>
			</div>
			<?php
			echo paginate_links(array('prev_text' => '« Anterior', 'next_text' => 'Siguiente »'));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<?php
		if ( is_home() && ! is_front_page() ) :
			?>
		</div>
		<?php endif; ?>
		</section>
	</main>
<?php
get_footer();
