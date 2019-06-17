<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>

<section class="container page" <?php post_class(array("container", "page")); ?>>

<div id="post-<?php the_ID(); ?>" <?php if ( !is_singular() ) post_class(array("el-col", "el-col-24", "el-col-sm-8", "individual-post")); ?>>
		<?php
		if ( is_singular() ) : ?>
<div class="page-content">
		<div class="row1 row">
			<div class=" title-base text-center col-md-12 ">
			<?php the_title( '<h2>', '</h2>' ); ?>
			</div>
		</div>
			<?php
		else :
			endewp_post_thumbnail();
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

	<?php  ?>

	<div class="el-card__body">
		<?php
		if ( !is_singular() )
		echo the_excerpt_max_charlength(140);
		else 
			the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'endewp' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php
		if ( is_singular() ) : ?>
</div>
		<?php endif; ?>
</div><!-- #post-<?php the_ID(); ?> -->
</section>