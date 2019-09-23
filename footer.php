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
				<div class="divider ml-0"></div> <a href="<?php echo get_page_link(get_page_by_title("Contacto")->ID); ?>" class="">
					Contacto
				</a>
				<div class="divider"></div>
			</div>
			<div class="app-footer-servicio">
				<div class="b-servicio"><span class="b-servicio-titulo"><span class="b-services-short">BOLIVIA S.</span> <span class="b-services-long">Bolivia a tu servicio</span> <span class="b-service-two-points">:</span> <i class="b-icon-arrow-down el-icon-arrow-down"></i></span>
					<ul class="b-servicio-opciones">
						<li class="b-servicio-item"><button type="button" title="Facebook" class="el-button app-btn__link el-button--text" onclick="window.open('https://www.facebook.com/MinEnergias/', '_blank')">
								<i class="icon-facebook"></i>
								</button></li>
						<li class="b-servicio-item"><button type="button" title="Twitter" class="el-button app-btn__link el-button--text" onclick="window.open('https://twitter.com/MinEnergias', '_blank')">
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
						<li class="b-servicio-item"><button type="button" title="Correo electrónico" class="el-button app-btn__link el-button--text" onclick="location.href='mailto:info@minenergias.gob.bo'">
								<i class="icon-link"></i>
								</button></li>
						<!-- <li class="b-servicio-item"><button type="button" title="Whatsapp" class="el-button app-btn__link el-button--text">
								<i class="icon-whatsapp"></i>
								</button></li> -->
						<!-- <li class="b-servicio-item"><button type="button" title="Messenger" class="el-button app-btn__link el-button--text">
								<i class="icon-messenger"></i>
								</button></li> -->
					</ul>
				</div>
			</div>
			<div class="b-calificacion">
				<a href="javascript:void(0)" onclick="document.getElementById('terminos').style.display='block'" class="b-terminos-link">Términos y condiciones</a>
				<div id="terminos" class="el-dialog__wrapper b-dialog-terminos" style="z-index: 2002; display: none;"><div role="dialog" aria-modal="true" aria-label="TERMINOS Y CONDICIONES" class="el-dialog" style="margin-top:15vh;"><div class="el-dialog__header"><span class="el-dialog__title">TERMINOS Y CONDICIONES</span><!----></div><div class="el-dialog__body"><p>Todos los servicios digitales deben establecer los Términos y Condiciónes de uso para las y los ciudadanos mismos que deben contener mínimamente:</p> <ol><li><strong>Identificación de la institución</strong></li> <li><strong>Uso irrestricto del servicio, excepto que:</strong> <ul><li>Se intente dañar el servicio.</li> <li>Se intente atacar el servicio.</li> <li>Se pretenda inhabilitar su uso para otros/as ciudadanos/as</li></ul></li> <li><strong>Contenido</strong> <p>Se debe comunicar a la ciudadanía que toda la información publicada en los sitios web es de acceso irrestricto, en el marco del artículo 21, Parágrafo 2 de la Constitución Política del Estado que señala:</p> <p>"Las bolivianas y los bolivianos tienen el derecho a acceder a la información, interpretarla, analizarla y comunicarla libremente, de manera individual o colectiva"</p> <p>Por esto toda la información vertida en los servicios digitales del Estado debe tener publicada la autorización expresa para su uso bajo los siguientes términos:</p> <p>Las y los ciudadanos son libres de:</p> <p>Utilizar, adaptar, mezclar, extraer, compilar, transformar, modificar o crear en base a la información publicada en los servicios digitales del Estado.</p> <p>Distribuir, redistribuir, publicar o difundir la información o los productos de la adaptación, mezcla, transformación o creación a partir de la misma.</p> <p>Las y los ciudadanos deberán:</p> <ul><li>Citar siempre la fuente de origen de donde se obtuvo la información y proporciónar el enlace respectivo de la misma;</li> <li>Citar la fecha de la actualización y/o publicación de la información objeto de uso.</li></ul></li> <li><strong>Requerimiento para remoción o ratificación de contenido</strong> <p>Cada entidad pública debe tener un procedimiento para quitar o cambiar contenido a solicitud de las y los ciudadanos, el que deberá ser publicado en el servicio digital de la entidad.</p></li> <li><strong>Política de Privacidad</strong> <p>Cada institución debe contar con una política de privacidad, la cual debe estar publicada en el sitio web de sus servicios digitales, que contenga mínimamente:</p> <ul><li>El tipo de información que se guarda sobre la navegación que realizan las y los ciudadanos.</li> <li>El fin con el cual se guarda cualquier información solicitada en algún formulario.</li> <li>El fin con el cual se utiliza la información solicitada y guardada, incluyendo por cuánto tiempo se guarda.</li></ul></li> <li><strong>Política de cookies</strong> <p>Cada institución debe contar con una política de cookies, la cual debe estar publicada en el servicio digital de la entidad, que contenga mínimamente:</p> <ul><li>Qué cookies se utiliza en el servicio digital</li> <li>Para qué se utilizan las cookies en el servicio digital Queda prohibido el uso de cookies de terceros.</li></ul></li> <li><strong>Información de contacto para quejas sobre incumplimiento</strong> <p>Cada institución debe habilitar los mecanismos de Bolivia a tu Servicio para que las y los ciudadanos puedan quejarse en caso de que se incumpla alguno de los términos y condiciónes.</p></li></ol> </div><div class="el-dialog__footer"><span class="dialog-footer"><button type="button" class="el-button el-button--primary" onclick="document.getElementById('terminos').style.display='none';"<!----><!----><span>Aceptar</span></button></span></div></div></div>
			</div>
		</div>
		<a class="locotoware" href="http://locotoware.com" target="_blank">Locotoware</a>
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
	</div>
	<div class="more-main"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Más noticias</a></div>
</section>

<section class="container page" id="viceminsSection">
	<div class="row-bg el-row dark-blue">
		<div class="text-center">
			<h1>VICEMINISTERIOS</h1>
		</div>
		<div class="row-bg el-row">
			<?php
			$mins_query = new WP_Query( array( 'posts_per_page' => 20, 'category_name' => 'Viceministerios') );
			/* Start the Loop */
			while ( $mins_query->have_posts() ) :
				$mins_query->the_post();
				$viceminsTitles[] = get_the_title();
				$viceminsIcons[] = get_the_excerpt();
			endwhile;
			wp_reset_postdata();
			$cat_id = get_cat_ID("Viceministerios");
			$cat_posts = get_posts(array('category' => $cat_id));		
			if (is_array($viceminsTitles)) : ?>
				<div class="viceminContainer">
				<?php
				for ($i=0; $i < count($viceminsTitles); $i++) { ?>
					<div class="vicemin" >
					<a href="<?php echo get_permalink(get_page_by_title( 'Viceministerios' )) . "?subpId=" . $cat_posts[$i]->ID; ?>">
						<i class="minicon <?php echo $viceminsIcons[$i]; ?>"></i>
						<p class="subTitle">Viceministerio de </p>
						<p style="top:-40px;"><?php echo $viceminsTitles[$i]; ?></p>
					</a>
					</div>
				<?php
				}
				?>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>

<section class="container page">
	<div class="row-bg el-row">
		<div class="el-col-24 el-col-sm-12">
		<div class="text-center">
			<h1>PUBLICACIONES</h1>
		</div>
		<div id="myPubModal" class="modal">
			<span id="closePub" class="close">&times;</span>
			<iframe class="modal-content-vid" id="pub01"
			src="">
			</iframe>   
			<div id="pubCaption" style="color:white; text-align:center;"></div>
		</div>
		<?php
		$pubs_query = new WP_Query( array( 'posts_per_page' => 3, 'category_name' => 'Publicaciones') );
		/* Start the Loop */
		while ( $pubs_query->have_posts() ) :
			$pubs_query->the_post();
			$pubsTitles[] = get_the_title();
			$pubsIds[] = get_the_ID();
			$pubsThumbnails[] = get_the_post_thumbnail();
		endwhile;
		wp_reset_postdata();
		$cat_id = get_cat_ID("Publicaciones");
		$cat_posts = get_posts(array('category' => $cat_id));		
		if (is_array($pubsTitles)) :
			for ($i=0; $i < count($pubsTitles); $i++) { ?>
				<div id="<?php echo $pubsIds[$i]; ?>" style="width: 60%; margin:auto; text-align:center;">
					<?php echo $pubsThumbnails[$i]; ?>
					<div>
						<?php echo $pubsTitles[$i]; ?>
					</div>
				</div>
				<script>
					var modalPub = document.getElementById("myPubModal");
					var imgPub = document.getElementById("<?php echo $pubsIds[$i]; ?>").firstElementChild;
					var modalPubContainer = document.getElementById("pub01");
					var pubCaptionText = document.getElementById("pubCaption");
					imgPub.onclick = function(){
					modalPub.style.display = "block";
					modalPubContainer.src = "<?php  print_r(reset(get_children(array('post_parent' => $pubsIds[$i])))->guid); ?>";
					pubCaptionText.innerHTML = "<?php echo $pubsTitles[$i]; ?>";
					}
					var span = document.getElementById("closePub");
					span.onclick = function() { 
					modalPub.style.display = "none";
					modalPubContainer.src = "";
					}
				</script>
			<?php
			}
		endif;
		$cat_multimedia_id = get_cat_ID("Multimedia");
		$cat_multimedia_posts = get_posts(array('category' => $cat_multimedia_id));
		for ($j=0; $j < count($cat_multimedia_posts); $j++) { 
			if ($cat_multimedia_posts[$j]->post_title == 'Publicaciones') {
				$pubs_post_id = $cat_multimedia_posts[$j]->ID;
				break;
			}
		}
		?>
		<div class="more-main"><a href="<?php echo get_permalink(get_page_by_title( 'Multimedia' )) . "?subpId=" . $pubs_post_id; ?>">Más publicaciones</a></div>
		</div>
		<div class="el-col-24 el-col-sm-12">
		<div class="text-center">
			<h1>VIDEOS</h1>
		</div>
		<div id="myVidModal" class="modal">
			<span id="closeVid" class="close">&times;</span>
			<iframe class="modal-content-vid" id="vid01"
			src="">
			</iframe>   
			<div id="vidCaption" style="color:white; text-align:center;"></div>
		</div>
		<?php
		$vids_query = new WP_Query( array( 'posts_per_page' => 3, 'category_name' => 'Videos') );
		/* Start the Loop */
		while ( $vids_query->have_posts() ) :
			$vids_query->the_post();
			$vidsTitles[] = get_the_title();
			$vidsIds[] = get_the_ID();
			$vidsThumbnails[] = get_the_post_thumbnail(get_the_ID(), 'medium');
			$vidsContent[] = get_the_content();
		endwhile;
		wp_reset_postdata();
		$cat_id = get_cat_ID("Videos");
		$cat_posts = get_posts(array('category' => $cat_id));		
		if (is_array($vidsTitles)) :
			for ($i=0; $i < count($vidsTitles); $i++) { ?>
				<div id="<?php echo $vidsIds[$i]; ?>" style="width: 60%; margin:auto; text-align:center;">
					<?php echo $vidsThumbnails[$i]; ?>
					<div>
						<?php echo $vidsTitles[$i]; ?>
					</div>
				</div>
				<script>
					var modalVid = document.getElementById("myVidModal");
					var imgVid = document.getElementById("<?php echo $vidsIds[$i]; ?>").firstElementChild;
					var modalVidContainer = document.getElementById("vid01");
					var vidCaptionText = document.getElementById("vidCaption");
					imgVid.onclick = function(){
					modalVid.style.display = "block";
					modalVidContainer.src = "https://www.youtube.com/embed/<?php echo wp_strip_all_tags($vidsContent[$i]); ?>";
					vidCaptionText.innerHTML = "<?php echo $vidsTitles[$i]; ?>";
					}
					var span = document.getElementById("closeVid");
					span.onclick = function() { 
					modalVid.style.display = "none";
					modalVidContainer.src = "";
					}
				</script>
			<?php
			}
		endif;
		$cat_multimedia_id = get_cat_ID("Multimedia");
		$cat_multimedia_posts = get_posts(array('category' => $cat_multimedia_id));
		for ($j=0; $j < count($cat_multimedia_posts); $j++) { 
			if ($cat_multimedia_posts[$j]->post_title == 'Videos') {
				$pubs_post_id = $cat_multimedia_posts[$j]->ID;
				break;
			}
		}
		?>
		<div class="more-main"><a href="<?php echo get_permalink(get_page_by_title( 'Multimedia' )) . "?subpId=" . $pubs_post_id; ?>">Más videos</a></div>
		</div>
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
			<p><a href="<?php echo wp_strip_all_tags(get_the_content()); ?>" target="_blank"><img src="<?php the_post_thumbnail_url(); ?>" class="app-logo-img opaque" alt=""></a></p>
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

		<strong><img src="<?php echo bloginfo('template_url') ?>/img/resources/phone-icon-256.png" height="15px" width="15px"></strong>(591) - 2 - 2188800<br>

		<strong><img src="<?php echo bloginfo('template_url') ?>/img/resources/email-icon.png" height="15px" width="15px"></strong>info@minenergias.gob.bo
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
