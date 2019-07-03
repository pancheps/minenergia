<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>


<div id="post-<?php the_ID(); ?>" <?php  post_class(array("el-col", "el-col-24", "el-col-sm-8", "individual-post")); ?>>
		<?php
		 ?>
			<?php
		
			endewp_post_thumbnail();
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		

		
			?>
			<div class="entry-meta">
				<?php
				endewp_posted_on();
				?>
			</div><!-- .entry-meta -->

	<?php  ?>

	<div class="el-card__body">
		<?php
		echo the_excerpt_max_charlength(120);

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'endewp' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->
