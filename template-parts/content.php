<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>


<div id="post-<?php the_ID(); ?>" <?php if ( !is_singular() ) post_class(array("el-col", "el-col-24", "el-col-sm-5", "individual-post")); ?>>
		<?php
		if ( is_singular() ) : ?>
<div class="page-content">
		<div class="row1 row">
			<div class=" title-base text-center col-md-12 ">
			<?php the_title( '<h2>', '</h2>' ); ?>
			</div>
		</div>
			<?php
		else : ?>
		<div class="post-thumbnail">
		<?php
			endewp_post_thumbnail();
			?>
		</div>
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

 ?>

	<?php  ?>

	<div class="el-card__body">
		<?php
		if ( !is_singular() )
		echo "";//the_excerpt_max_charlength(75);
		else {
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					if ( is_singular() )
						endewp_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif;
			the_content();
		}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'endewp' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php
		if ( is_singular() ) : ?>
</div>
<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Regresar a Noticias</a>
		<?php endif; ?>
</div><!-- #post-<?php the_ID(); ?> -->
