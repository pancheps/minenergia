<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EndeWP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php 
$bgClasses = array("portal-bg-red", "portal-bg-yellow", "portal-bg-green", "portal-bg-blue");
$classId = array_rand($bgClasses);
$currClass = $bgClasses[$classId];
?>
<body <?php !is_front_page() ? body_class($currClass) : ""; ?>>

	<div id="__nuxt" class="site">
		<div id="__layout">
			<section class="el-container <?php if ( is_front_page() ) :?>portal-home<?php else : ?>portal-default<?php endif; ?> is-vertical">
				<header id="masthead" class="el-header">
					<div class="">
						<nav id="site-navigation" class="main-navigation app-menu">
							<div class="app-menu__container">
								<div id="menuItemsRow" class="row-bg relative el-row is-justify-space-between el-row--flex"><button type="button" id="main-menu-toggle" class="el-button app-menu__btn-open-menu app-btn__link el-button--text">
									
									<span><span class="caret-menu"><span></span> <span></span> <span></span></span></span></button>
									
									<div id="main-hidden" class="app-logo-container <?php
										if ( is_front_page() ) echo "main-hidden";
									?>">
										<div class="app-title">
											<a href="<?php echo site_url(); ?>" class="app-logo-link nuxt-link-exact-active nuxt-link-active">
											<img src="<?php echo get_template_directory_uri() . '/img/logo1.png'; ?>" class="app-logo-img" alt="">
											</a>
										</div>
									</div>
									<div class="app-b-servicio">
										<div class="b-servicio"><span id="top-menu-servicios" onclick="javascript:toggleServices()" class="b-servicio-titulo"><span class="b-services-short">BOLIVIA S.</span> <span class="b-services-long">Bolivia a tu servicio</span> <span class="b-service-two-points">:</span> <i class="b-icon-arrow-down el-icon-arrow-down"></i></span>
											<ul id="top-services-list" class="b-servicio-opciones">
												<li class="b-servicio-item"><button type="button" title="Facebook" class="el-button app-btn__link el-button--text" onclick="location.href='https://www.facebook.com/MinEnergias/'">
														<i class="icon-facebook"></i>
														</button></li>
												<li class="b-servicio-item"><button type="button" title="Twitter" class="el-button app-btn__link el-button--text" onclick="location.href='https://twitter.com/MinEnergia'">
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
									<div>
										<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class'     => 'app-menu__list',
											'container'      => '',
										) );
										?>
										<!--
										<div class="divider app-lang-divider"></div>
										<div class="app-lang el-dropdown">
											<button type="button" class="el-button app-btn__link el-button--text el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-8893" role="button" tabindex="0">
												<span><span class="app-lang-text-short">EN </span> <span class="app-lang-text-long">English </span> <i class="el-icon-arrow-down el-icon--right"></i></span>
											</button>
											<ul class="el-dropdown-menu el-popper app-lang__submenu" style="display:none;" id="dropdown-menu-8893">
												<li tabindex="-1" class="el-dropdown-menu__item app-lang__item">
													<a href="/en" class="nuxt-link-exact-active nuxt-link-active">
														Español
													</a></li>
												<li tabindex="-1" class="el-dropdown-menu__item app-lang__item">
													<a href="/en" class="nuxt-link-exact-active nuxt-link-active">
														English
													</a></li>
											</ul>
										</div>
										<div class="divider"></div>
										<div class="app-header__options">
											<button type="button" class="el-button app-btn__link el-button--text">
												
												<span>Login</span>
											</button>
										</div>
										<div class="divider"></div>
										<div class="app-header__search">
											<button type="button" class="el-button app-btn__link el-button--text">
												<i class="el-icon-search"></i><span><span class="app-header__search-text">Buscar</span></span>
											</button>
										</div>
										-->
									</div>
									<div class="app-menu__main-overlay"></div>
								</div>
							</div>
						</nav><!-- #site-navigation -->
					</div>
				</header><!-- #masthead -->

