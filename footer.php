<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EndeWP
 */

?>

<footer class="el-footer" style="height:auto;">
	<div class="app-footer <?php if ( !is_home()) echo ".app-footer-no-home"; ?>">
		<div class="row-bg relative el-row is-justify-space-between el-row--flex">
			<div>
				<div class="divider ml-0"></div> <a href="/en/contacto" class="">
					Contacto
				</a>
				<div class="divider"></div>
			</div>
			<div class="app-footer-servicio">
				<div class="b-servicio"><span class="b-servicio-titulo"><span class="b-services-short">BOLIVIA S.</span> <span class="b-services-long">Bolivia a tu servicio</span> <span class="b-service-two-points">:</span> <i class="b-icon-arrow-down el-icon-arrow-down"></i></span>
					<ul class="b-servicio-opciones">
						<li class="b-servicio-item"><button type="button" title="Facebook" class="el-button app-btn__link el-button--text">
								<i class="icon-facebook"></i>
								</button></li>
						<li class="b-servicio-item"><button type="button" title="Twitter" class="el-button app-btn__link el-button--text">
								<i class="icon-twitter"></i>
								</button></li>
						<!-- <li class="b-servicio-item"><button type="button" title="Youtube" class="el-button app-btn__link el-button--text">
								<i class="icon-youtube"></i>
								</button></li>
						<li class="b-servicio-item"><button type="button" title="Grabación" class="el-button app-btn__link el-button--text">
								<i class="icon-record"></i>
								</button></li>
						<li class="b-servicio-item"><button type="button" title="Camara" class="el-button app-btn__link el-button--text">
								<i class="icon-camera"></i>
								</button></li>
						<li class="b-servicio-item"><button type="button" title="Teléfono" class="el-button app-btn__link el-button--text">
								<i class="icon-phone"></i>
								</button></li> -->
						<li class="b-servicio-item"><button type="button" title="Correo electrónico" class="el-button app-btn__link el-button--text">
								<i class="icon-link"></i>
								</button></li>
						<li class="b-servicio-item"><button type="button" title="Whatsapp" class="el-button app-btn__link el-button--text">
								<i class="icon-whatsapp"></i>
								</button></li>
						<!-- <li class="b-servicio-item"><button type="button" title="Messenger" class="el-button app-btn__link el-button--text">
								<i class="icon-messenger"></i>
								</button></li> -->
					</ul>
				</div>
			</div>
			<div class="b-calificacion">
				<a href="javascript:void(0)" class="b-terminos-link">Términos y condiciones</a>
					<div class="el-dialog__wrapper b-dialog-terminos" style="display:none;">
						<div role="dialog" aria-modal="true" aria-label="TERMINOS Y CONDICIONES" class="el-dialog" style="margin-top:15vh;">
							<div class="el-dialog__header"><span class="el-dialog__title">TERMINOS Y CONDICIONES</span>
								
							</div>
							
							<div class="el-dialog__footer"><span class="dialog-footer"><button type="button" class="el-button el-button--primary">
										
										<span>Aceptar</span></button></span></div>
						</div>
					</div>

			</div>
		</div>
	</div>
</footer>
</section>

<?php
if( is_front_page() ) :
?>

<section>
	<div class="text-center">
		<h1>NOTICIAS</h1>
	</div>
	<div class="p-box el-row container">
	<?php
	$the_query = new WP_Query( array( 'posts_per_page' => 20, 'category_name' => 'Portada', 'offset' => 5) );
	$counter = 0;
	$postPerRow = 4;
	/* Start the Loop */
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		if ($counter < $postPerRow) {
			get_template_part( 'template-parts/content-news', get_post_type() );
			$counter ++;
		} 
	endwhile;
	wp_reset_postdata();
	?>
	<div class="more-main"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Más noticias</a></div>
	</div>
</section>

<section class="container page">
	<div class="row-bg el-row flexmin">
		<?php
		$mins_query = new WP_Query( array( 'posts_per_page' => 20, 'category_name' => 'Vicemins') );
		/* Start the Loop */
		while ( $mins_query->have_posts() ) :
			$mins_query->the_post();
			?>
			<div class="vicemin">
			<a href="#"><i class="minicon <?php echo get_the_excerpt(); ?>"></i><p><?php the_title(); ?></p></a>
			</div>
			<?php
		endwhile;
		wp_reset_postdata();
		?>
	</div>
</section>

<section>
	<div class="row-bg el-row dark-grey">
		<div class="text-center">
			<h1>ENTIDADES BAJO TUICIÓN</h1>
		</div>
		<div class="row-bg el-row entidades-logo">
		<?php
		$mins_query = new WP_Query( array( 'posts_per_page' => 20, 'category_name' => 'Tuicion') );
		/* Start the Loop */
		while ( $mins_query->have_posts() ) :
			$mins_query->the_post();
			?>
			<div class="">
			<p><a href="#"><img src="<?php the_post_thumbnail_url(); ?>" class="app-logo-img opaque" alt=""></a></p>
			</div>
			<?php
		endwhile;
		wp_reset_postdata();
		?>
		</div>
	</div>
</section>

<section class="container page">
<?php
if ( ! is_admin() ) {
	require_once( ABSPATH . 'wp-admin/includes/post.php' );
}
?>

	<div class="row-bg el-row foot">
	<div class="half-footer lefty">
	<p>
	<?php if ( post_exists("PIE_IZQUIERDO") ) :
					echo get_the_post_thumbnail_url(post_exists("PIE_IZQUIERDO"));
			else :
	?>
		<strong>CASA GRANDE DEL PUEBLO</strong> <br>
		Piso 17 <br>
		Calle Potosí esquina Calle Ayacucho, Zona Central<br>
		La Paz, Bolivia
			<?php endif; ?>
	</p>
	</div>
	<div class="half-footer righty">
		<p>
		<?php if ( post_exists("PIE_DERECHO") ) :
						get_the_content(post_exists("PIE_DERECHO"));
				else :
		?>
		<strong>Edificio Ex BBA</strong> <br>
		Av. Camacho N° 1413 esquina Calle Loayza<br>

		<strong><img src="<?php echo bloginfo('template_url') ?>/img/resources/phone-icon-256.png" height="20px" width="20px"></strong><br>
		(591) - 2 - 2188800<br>

		<strong><img src="<?php echo bloginfo('template_url') ?>/img/resources/email-icon.png" height="20px" width="20px"></strong><br>
		info@minenergias.gob.bo
				<?php endif; ?>
		</p>
	</div>
	</div>
</section>
<?php
endif;
?>

</div>
</div>
<?php wp_footer(); ?>
</body>

</html>