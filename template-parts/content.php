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
<div class="page-content">
		<div class="row1 row">
			<div class=" title-base text-center col-md-12 ">
			<?php the_title( '<h2>', '</h2>' ); ?>
			</div>
		</div>

<div id="post-<?php the_ID(); ?>" <?php if ( !is_singular() ) post_class(array("el-col", "el-col-24", "el-col-sm-8", "individual-post")); ?>>
	<header class="entry-header">
		<?php

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
</div>
</section>