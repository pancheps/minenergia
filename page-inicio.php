<?php
/**
 * Template Name: Full Width Page
 * @package EndeWP
 */
?>
<?php
get_header();
?>
<main class="el-main">
    <section class="<?php if ( is_front_page() ) : ?>container-home<?php else : ?>container page<?php endif; ?>">
        <div class="app-logo-container">
            <div class="app-title">
                <a href="<?php echo site_url(); ?>" class="app-logo-link nuxt-link-exact-active nuxt-link-active">
                    <div class="app-logo">
                        <div class="app-logo-title">Estado Plurinacional de Bolivia</div>
                        <img src="<?php echo get_template_directory_uri() . '/img/logo1.png'; ?>" class="" alt="">
                    </div>
                </a>
            </div>
        </div>  
    </section>
</main>
<?php
get_footer();
?>