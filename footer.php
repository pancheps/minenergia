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
	<div class="app-footer">
		<div class="row-bg relative el-row is-justify-space-between el-row--flex">
				<div class="divider ml-0"></div> <a href="/en/contacto" class="">
					Contact
				</a>
				<div class="divider"></div>
			<div class="b-terminos"><a href="javascript:void(0)" class="b-terminos-link">Términos y condiciones</a>
				<div class="el-dialog__wrapper b-dialog-terminos" style="display:none;">
					<div role="dialog" aria-modal="true" aria-label="TERMINOS Y CONDICIONES" class="el-dialog" style="margin-top:15vh;">
						<div class="el-dialog__header"><span class="el-dialog__title">TERMINOS Y CONDICIONES</span>
							<!---->
						</div>
						<!---->
						<div class="el-dialog__footer"><span class="dialog-footer"><button type="button" class="el-button el-button--primary">
									<!---->
									<!----><span>Aceptar</span></button></span></div>
					</div>
				</div>
			</div>
			<div class="app-footer-servicio">
				<div class="b-servicio"><span class="b-servicio-titulo"><span class="b-services-short">BOLIVIA S.</span> <span class="b-services-long">Bolivia at your service</span> <span class="b-service-two-points">:</span> <i class="b-icon-arrow-down el-icon-arrow-down"></i></span>
					<ul class="b-servicio-opciones">
						<li class="b-servicio-item"><button type="button" title="Facebook" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-facebook"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Twitter" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-twitter"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Youtube" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-youtube"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Grabación" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-record"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Camara" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-camera"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Teléfono" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-phone"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Correo electrónico" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-link"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Whatsapp" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-whatsapp"></i>
								<!----></button></li>
						<li class="b-servicio-item"><button type="button" title="Messenger" class="el-button app-btn__link el-button--text">
								<!----><i class="icon-messenger"></i>
								<!----></button></li>
					</ul>
				</div>
			</div>
			<div class="b-calificacion"><span class="b-calificacion-title">
					Calificación:
				</span> <button type="button" class="b-icon"><i class="el-icon-star-off"></i> <i class="el-icon-star-on"></i></button><button type="button" class="b-icon"><i class="el-icon-star-off"></i> <i class="el-icon-star-on"></i></button><button type="button" class="b-icon"><i class="el-icon-star-off"></i> <i class="el-icon-star-on"></i></button><button type="button" class="b-icon"><i class="el-icon-star-off"></i> <i class="el-icon-star-on"></i></button><button type="button" class="b-icon"><i class="el-icon-star-off"></i> <i class="el-icon-star-on"></i></button>
				<div class="el-dialog__wrapper b-calificacion-dialog" style="display:none;">
					<div role="dialog" aria-modal="true" aria-label="BOLIVIA A TU SERVICIO" class="el-dialog" style="margin-top:15vh;">
						<div class="el-dialog__header"><span class="el-dialog__title">BOLIVIA A TU SERVICIO</span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
						<!---->
						<div class="el-dialog__footer"><span class="dialog-footer"><button type="button" class="el-button el-button--default">
									<!---->
									<!----><span>Cancelar</span></button> <button type="button" class="el-button el-button--primary">
									<!---->
									<!----><span>Enviar</span></button></span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</section>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>