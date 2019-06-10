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
                <a href="/en/" class="app-logo-link nuxt-link-exact-active nuxt-link-active"><?php the_custom_logo(); ?>
                    <div class="app-logo">
                        <div class="app-logo-title">Estado Plurinacional de Bolivia</div>
                        <div class="app-logo-description"><?php bloginfo( 'name' ); ?></div>
                    </div>
                </a>
            </div>
        </div>  
    </section>
</main>
<?php
get_footer();
?>