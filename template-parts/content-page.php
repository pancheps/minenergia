<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */
$page_title = get_the_title(get_the_ID());
$cat_id = get_cat_ID($page_title);
$cat_posts = get_posts(array('category' => $cat_id));
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(array("container", "page")); ?>>

	<?php endewp_post_thumbnail(); ?>

	<div class="page-content">
		<div class="row1 row">
			<div class=" title-base text-center col-md-12 ">
			<?php the_title( '<h2>', '</h2>' ); ?>
			</div>
		</div>
		<?php if ($cat_id != 0) :?>
		<div class="p-box el-row">
			<div class="el-col el-col-24 el-col-sm-7">
				<div id="navbarCollapse" class="navbar-collapse">
					<ul class="nav nav-sub">
						<?php
						foreach ($cat_posts as $key => $value) : ?>
						<li>
							<a href="<?php echo get_permalink(get_the_ID()) . "?subpId=" . $value->ID; ?>">
								<span>
									<i class="glyphicon glyphicon-play">&#9654;</i>
								</span> <?php echo $value->post_title; ?>
							</a>
						</li>
						<?php
						endforeach
						?>

					</ul>
				</div>
			</div>

			<div class="el-col el-col-24 el-col-sm-16">
			<?php
			if (!isset($_GET['subpId']) || $_GET['subpId'] == "") {
				//the_content();
			}
				$term = term_exists( get_the_title($_GET['subpId']), 'category' );
				if ( 0 !== $term && null !== $term ) {
					$per_page = 8;
					$the_query = new WP_Query( array( 
						'posts_per_page' => $per_page, 
						'category_name' => get_the_title($_GET['subpId']), 
						'offset' => isset($_GET['pagina']) ? ($_GET['pagina'] - 1) * $per_page : 0) 
					);
					$cat_posts = cat_post_count(get_the_title($_GET['subpId']));
			
					if ($the_query->have_posts()) {
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
							get_template_part( 'template-parts/content-image', get_post_type() );
							$total ++;
							if ($counter >= $postPerRow) {
								?>
								</div>
								<?php
								$counter = 0;
							}	
						endwhile;
					}
					wp_reset_postdata();

				}
				else {
					echo get_post($_GET['subpId'])->post_content;
				}
			?>
			</div>
			<div class="pagination-row">
			<?php
			$start = (isset($_GET['pagina']) ) ? $_GET['pagina'] > 2 ? $_GET['pagina'] - 2 : 0 : 0;
			$end = isset($_GET['pagina']) ? 
				(ceil($cat_posts / $per_page) - $_GET['pagina']) > 2 ? 
					$_GET['pagina'] + 2 : 
					ceil($cat_posts / $per_page) : 
				ceil($cat_posts / $per_page);
			if ($start > 0 && isset($_GET['pagina'])) {
				echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($_GET['pagina'] - 1) . "'>Anterior</a> ";
			}
			for ($i = $start + 1; $i <= $end; $i ++) { 
				if (isset($_GET['pagina'])) {
					if ($_GET['pagina'] == $i) {
						echo "<span>" . ($i) . "</span> ";
					}
					else {
						echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($i) . "'>" . ($i) . "</a> ";
					}
				}
				else {
					if ($i == 1) {
						echo "<span>" . ($i) . "</span> ";
					}
					else {
						echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($i) . "'>" . ($i) . "</a> ";
					}
				}
			}
			if (ceil($cat_posts / $per_page) > $end) {
				echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($_GET['pagina'] + 1) . "'>Siguiente</a> ";
			}	
		?>
		</div>
		</div>
		<?php else : ?>
		<div class="p-box el-row">
			<div class="nav el-col el-col-24 el-col-sm-24">
			<?php
				echo the_content();
			?>
			</div>
		</div>
		<?php endif; ?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
	<?php endif; ?>

</section><!-- #post-<?php the_ID(); ?> -->
