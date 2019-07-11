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
		$per_page = 8;
		$the_query = new WP_Query( array( 
			'posts_per_page' => $per_page, 
			'category_name' => 'Noticias', 
			'offset' => isset($_GET['pagina']) ? ($_GET['pagina'] - 1) * $per_page : 0) 
		);
		$cat_posts = cat_post_count("Noticias");
		if ( $the_query->have_posts() ) {

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
			$total = 0;
			/* Start the Loop */
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				if ($total >= $per_page)
					break;
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
				$total ++;
				if ($counter >= $postPerRow) {
					?>
					</div>
					<?php
					$counter = 0;
				}
			endwhile;
			wp_reset_postdata();
			?>
			</div>
			<div class="pagination-news">
			<?php
			$start = (isset($_GET['pagina']) ) ? $_GET['pagina'] > 2 ? $_GET['pagina'] - 2 : 0 : 0;
			$end = isset($_GET['pagina']) ? 
				(ceil($cat_posts / $per_page) - $_GET['pagina']) > 2 ? 
					$_GET['pagina'] + 2 : 
					ceil($cat_posts / $per_page) : 
				ceil($cat_posts / $per_page);
			if ($start > 0 && isset($_GET['pagina'])) {
				echo "<a href='" . get_news_url() . "?pagina=" . ($_GET['pagina'] - 1) . "'>Anterior</a> ";
			}
			for ($i = $start + 1; $i <= $end; $i ++) { 
				if (isset($_GET['pagina'])) {
					if ($_GET['pagina'] == $i) {
						echo "<span>" . ($i) . "</span> ";
					}
					else {
						echo "<a href='" . get_news_url() . "?pagina=" . ($i) . "'>" . ($i) . "</a> ";
					}
				}
				else {
					if ($i == 1) {
						echo "<span>" . ($i) . "</span> ";
					}
					else {
						echo "<a href='" . get_news_url() . "?pagina=" . ($i) . "'>" . ($i) . "</a> ";
					}
				}
			}
			if (ceil($cat_posts / $per_page) > $end) {
				echo "<a href='" . get_news_url() . "?pagina=" . ($_GET['pagina'] + 1) . "'>Siguiente</a> ";
			}
			?>
			</div>
			<?php
		}

		else 

			get_template_part( 'template-parts/content', 'none' );

		
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
