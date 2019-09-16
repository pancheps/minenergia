<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */
$page_title = get_the_title(get_the_ID());
$cat_id = get_cat_ID($page_title);
$cat_posts = get_posts(array('category' => $cat_id));
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(array("container", "page")); ?>>

	<?php endewp_post_thumbnail(); ?>

	<div class="page-content">
		<div class="row1 row">
			<div class=" title-base text-center col-md-12 ">
			<?php the_title( '<h2>', '</h2>' ); ?>
			</div>
		</div>
		<div class="p-box el-row">
        <div class="nav el-col el-col-24 el-col-sm-16">
			<?php
				echo the_content();
			?>
			</div>
			<div class="nav el-col el-col-24 el-col-sm-8">
			<div class="col-md-3 btn-descargar">
                    <div class="wpb_wrapper">
                        <h5>Ministerio de Energías</h5>
                        <div class="info-horizontal">
                            <div class="description">
                                <h5 class="info-title"><i class="fa fa-map-marker"></i> Dirección:</h5>
                                <p>CASA GRANDE DEL PUEBLO <br>Piso 17 <br>Calle Potosí esquina Calle Ayacucho, Zona Central<br>La Paz, Bolivia</p>
                                <h5 class="info-title">Ventanilla Única:</h5>
                                <p>Edificio Ex BBA <br>Av. Camacho N° 1413 esquina Calle Loayza</p>

                            </div>
                        </div>
                        <div class="info-horizontal">
                            <div class="description">
                                <h5 class="info-title"><i class="fa fa-mobile"></i> Teléfono:</h5>
                                <p>(591) - 2 - 2188800</p>
                            </div>
                        </div>
                        <div class="info-horizontal">
                            <div class="description">
                                <h5 class="info-title"><i class="fa fa-envelope" style="font-size: 0.9em;margin-top: 5px;"></i> Correo:</h5>
                                <p><a href="mailto:info@minenergias.gob.bo">info@minenergias.gob.bo</a></p>
                            </div>
                        </div>
                        <h5>Viceministerio de Electricidad y Energías Alternativas</h5>
                        <div class="info-horizontal">
                            <div class="description">
                                <h5 class="info-title"><i class="fa fa-map-marker"></i> Dirección:</h5>
                                <p>Edificio Ex Banco Boliviano Americano<br> Piso 14 <br>Av. Camacho N° 1413 esquina Calle Loayza<br>La Paz, Bolivia</p>                            
                            </div>
                        </div>
                        <div class="info-horizontal">
                            <div class="description">
                                <h5 class="info-title"><i class="fa fa-mobile"></i> Teléfono:</h5>
                                <p>(591) - 2 - 2188800 </p>
                                <p>(591) - 2 - 2129093 </p>  
                            </div>
                        </div>
                        <h5>Viceministerio de Altas Tecnologías Energéticas</h5>
                        <div class="info-horizontal">
                            <div class="description">
                                <h5 class="info-title"><i class="fa fa-map-marker"></i> Dirección:</h5>
                                <p>Edificio Ex Banco Boliviano Americano<br> Piso 1 <br>Av. Camacho N° 1413 esquina Calle Loayza<br>La Paz, Bolivia</p>                   
                            </div>
                        </div>
                        <div class="info-horizontal">
                            <div class="description">
                                <h5 class="info-title"><i class="fa fa-mobile"></i> Teléfono:</h5>
                                <p>(591) - 2 - 2188800 </p>
                                <p>(591) - 2 - 2129066 </p>  
                            </div>
                        </div>
                    </div><!--Fin wpb_wrapper-->
                </div>
			</div>
		</div>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
	<?php endif; ?>

</section><!-- #post-<?php the_ID(); ?> -->
