

<div id="post-<?php the_ID(); ?>" >
		
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
<hr>
<br>