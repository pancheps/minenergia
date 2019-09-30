

<div id="post-<?php the_ID(); ?>" <?php  post_class(array("el-col", "el-col-24", "el-col-sm-5", "individual-post")); ?>>
		
			<?php
		
			the_title( '<h2 class="entry-title">', '</h2>' );
			the_content();
	
			?>

	<!-- <div class="el-card__body">
		<?php

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'endewp' ),
			'after'  => '</div>',
		) );
		?>
	</div> -->
	<!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->
<br>