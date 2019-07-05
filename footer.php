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

<?php
$the_query = new WP_Query( array( 'posts_per_page' => 7 ) );
?>
				<div class="row1 row">
					<div class=" title-base text-center ">
					<h2>NOTICIAS</h2>
					</div>
				</div>

				<div class="p-box el-row container">
	<?php
	$counter = 0;
	$postPerRow = 4;
	/* Start the Loop */
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		$categories = get_the_category();
		foreach ($categories as $key => $value) {
			if($value->name == "Portada") {
				if ($counter < $postPerRow) {
			
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content-news', get_post_type() );
					$counter ++;
				} 
			}
		}
	endwhile;
	?>
					</div>
	<?php
	the_posts_navigation();
wp_reset_postdata();
?>
</section>

<section>
	<div class="row-bg el-row">
		<div class="vicemin">
		<a href="#">VICEMINISTERIO DE ELECTRICIDAD Y ENERGÍAS ALTERNATIVAS</a>
		</div>
		<div class="vicemin">
		<a href="#">VICEMINISTERIO DE ALTAS TECNOLOGÍAS ENERGÉTICAS</a>
		</div>
	</div>
</section>

<section>
	<div class="row-bg el-row dark-grey">
		<div class="text-center">
			<h2>Entidades Bajo Tuición</h2>
		</div>
		<div class="half-footer righty">
			<p><a href="#"><img src="<?php echo get_template_directory_uri() . '/img/tuicion/endeandina.png'; ?>" class="app-logo-img opaque" alt=""></a></p>
		</div>
		<div class="half-footer lefty">
			<p><a href="#"><img src="<?php echo get_template_directory_uri() . '/img/tuicion/endetecnologias.png'; ?>" class="app-logo-img opaque" alt=""></a></p>
		</div>
	</div>
</section>

<section class="container page">
	<div class="row-bg el-row foot">
	<div class="half-footer lefty">
	<p>
		<strong>CASA GRANDE DEL PUEBLO</strong> <br>
		Piso 17 <br>
		Calle Potosí esquina Calle Ayacucho, Zona Central<br>
		La Paz, Bolivia
	</p>
	</div>
	<div class="half-footer righty">
		<p>
		<strong>Edificio Ex BBA</strong> <br>
		Av. Camacho N° 1413 esquina Calle Loayza<br>

		<strong>Teléfono:</strong><br>
		(591) - 2 - 2188800<br>

		<strong>Correo:</strong><br>
		info@minenergias.gob.bo
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