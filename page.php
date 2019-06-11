<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

get_header();
?>

		<main class="el-main">
		<section class="container page">
			<div class="page-header"><!----> 
			<div class="page-title">
				<h1>Transparencia</h1>
			</div>
		</div> 
		<div class="page-content">
<p>Página para describir la información de la institución</p>
		</div> <!----> 
		<div class="p-box el-row">
			<div class="el-col el-col-24 el-col-sm-8">
				<div class="el-card is-hover-shadow"><!---->
				<div class="el-card__body" style="padding: 0px;">
				<div class="p-box-footer bg-blue p-box-comentarios">
					<div class="el-row">
						<div class="el-col el-col-24 el-col-xs-4 el-col-sm-8 el-col-md-4">
							<div class="p-box-avatar">

							</div>
						</div> 
						<div class="el-col el-col-24 el-col-xs-8 el-col-sm-16 el-col-md-8">
							<div class="p-box-comment"><h3>Juan Flores</h3> <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit deserunt nobis iste quos.</p></div></div> <div class="el-col el-col-24 el-col-xs-4 el-col-sm-8 el-col-md-4"><div class="p-box-avatar"></div></div> <div class="el-col el-col-24 el-col-xs-8 el-col-sm-16 el-col-md-8"><div class="p-box-comment"><h3>Maria Ramos</h3> <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit deserunt nobis iste quos.</p></div></div></div></div></div></div></div> <div class="el-col el-col-24 el-col-sm-16"><div class="el-card is-hover-shadow"><!----><div class="el-card__body" style="padding: 0px;"><div class="p-box-footer bg-green p-box-porcentajes"><h3>La siembra hidrocarburífera de la Agenda 2025 <br> <span>Principales indicadores que reflejan nuestras metaas hacia el 2025</span></h3> <div class="p-box-list el-row"><div class="p-box-item el-col el-col-24 el-col-sm-6"><div class="p-box-number">79%</div> <div class="p-box-text">Red de gas domiciliar</div></div><div class="p-box-item el-col el-col-24 el-col-sm-6"><div class="p-box-number">50%</div> <div class="p-box-text">Red de exportación</div></div><div class="p-box-item el-col el-col-24 el-col-sm-6"><div class="p-box-number">98%</div> <div class="p-box-text">Diesel nacional</div></div><div class="p-box-item el-col el-col-24 el-col-sm-6"><div class="p-box-number">74%</div> <div class="p-box-text">Red de gas particular</div></div></div></div></div></div></div> <div class="el-col el-col-24 el-col-sm-4"><div class="el-card is-hover-shadow"><!----><div class="el-card__body" style="padding: 0px;"><div class="p-box-footer-2 bg-solid-yellow p-box-details"><h3>Curso</h3> <p>
          Capacitación virtual <br> <a href="https://www.agetic.gob.bo/cursos" target="_blank">agetic.gob.bo/cursos</a></p></div></div></div></div> <div class="el-col el-col-24 el-col-sm-4"><div class="el-card is-hover-shadow"><!----><div class="el-card__body" style="padding: 0px;"><div class="p-box-footer-2 bg-solid-cyan p-box-details"><h3>Normas y Leyes</h3> <p>
          Al día con las normas <br> <a href="https://www.agetic.gob.bo/normas" target="_blank">agetic.gob.bo/normas</a></p></div></div></div></div> <div class="el-col el-col-24 el-col-sm-8"><div class="el-card is-hover-shadow"><!----><div class="el-card__body" style="padding: 0px;"><div class="p-box-footer-2 bg-solid-gray p-box-phone">
        800-10-1014 <span>línea de consulta directa</span></div></div></div></div> <div class="el-col el-col-24 el-col-sm-8"><div class="el-card is-hover-shadow"><!----><div class="el-card__body" style="padding: 0px;"><div class="p-box-footer-2 bg-solid-blue p-box-details"><h3>Convocatorias</h3> <p>
          Accede de manera transparente <br> <a href="https://www.agetic.gob.bo/convocatorias" target="_blank">agetic.gob.bo/convocatorias</a></p></div></div></div></div></div></section>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

<?php
get_footer();
