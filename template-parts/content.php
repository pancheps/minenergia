<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>

<div id="post-<?php the_ID(); ?>" <?php if ( !is_singular() ) post_class(array("el-col", "el-col-24", "el-col-sm-8", "individual-post")); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				endewp_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php endewp_post_thumbnail(); ?>

	<div class="el-card__body">
		<?php
		if ( !is_singular() )
			the_excerpt();
		else 
			the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'endewp' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->
