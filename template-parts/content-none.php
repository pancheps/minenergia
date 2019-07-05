<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>

<a href="<?php the_permalink();?>">
<div id="post-<?php the_ID(); ?>" <?php  post_class(array("el-col", "el-col-24", "el-col-sm-12")); ?>>
		
			<?php
		
			endewp_post_thumbnail();
	
			?>

</div><!-- #post-<?php the_ID(); ?> -->
</a>