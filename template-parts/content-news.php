<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>

<a href="<?php the_permalink();?>">
<div id="post-<?php the_ID(); ?>" <?php  post_class(array("el-col", "el-col-24", "el-col-sm-6", "individual-post")); ?>>
		
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

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'endewp' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->
</a>