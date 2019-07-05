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
									<i class="glyphicon glyphicon-play">&#8680;</i>
								</span> <?php echo $value->post_title; ?>
							</a>
						</li>
						<?php
						endforeach
						?>

					</ul>
				</div>
			</div>

			<div class="nav el-col el-col-24 el-col-sm-16">
			<?php
			if (!isset($subpId) || $subpId == "") {
				the_content();
			}
			else {
				$term = term_exists( get_the_title($subpId), 'category' );
				if ( 0 !== $term && null !== $term ) {

					$the_query = new WP_Query( array( 'posts_per_page' => 8, 'category_name' => get_the_title($subpId)) );
					$counter = 0;
					$postPerRow = 2;
					/* Start the Loop */
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						if ($counter < $postPerRow) {
							if ($counter == 0) {
								?>
								<div class="p-box el-row">
								<?php
							}
							$counter ++;
						} 
						get_template_part( 'template-parts/content-none', get_post_type() );
						if ($counter >= $postPerRow) {
							?>
							</div>
							<?php
							$counter = 0;
						}	
					endwhile;
					wp_reset_postdata();

				}
				else {
					echo get_post($subpId)->post_content;
				}
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
