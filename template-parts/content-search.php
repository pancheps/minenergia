<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>

	<div style="width: 90%; margin: auto;">
		<div style="display:inline-block;">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>
		</div>
		<div style="display:inline-block; ">
			<div>
				<a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
			</div>
			<div>
				<?php the_excerpt_max_charlength(40); ?>
			</div>
		</div>
	</div>


