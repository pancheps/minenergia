<?php
/**
 * Template Name: Full Width Page
 * @package EndeWP
 */
?>
<?php
get_header();
?>
<?php
$the_query = new WP_Query( array( 'posts_per_page' => 5, 'category_name' => 'Portada') );
$counter = 0;
/* Start the Loop */
while ( $the_query->have_posts() ) :
    $the_query->the_post();
    if ($counter < 5) {
        $imgs[] = get_the_post_thumbnail_url();
        $links[] = get_the_permalink();
        $titles[] = get_the_title();
        $counter ++;
    } 
    else 
        break;
endwhile;
wp_reset_postdata();
?>
<main class="el-main">
    <section class="<?php if ( is_front_page() ) : ?>container-home<?php else : ?>container page<?php endif; ?>">
        <div class="app-logo-container">
            <div class="app-title">
                <a href="<?php echo site_url(); ?>" class="app-logo-link nuxt-link-exact-active nuxt-link-active">
                    <div class="app-logo">
                        <div class="app-logo-title"><?php echo get_bloginfo('description'); ?></div>
                        <?php 
                        if ( ! is_admin() ) {
                            require_once( ABSPATH . 'wp-admin/includes/post.php' );
                        }
                        ?>
                        <img src="<?php echo post_exists("LOGO_PRINCIPAL") ?
                        get_the_post_thumbnail_url(post_exists("LOGO_PRINCIPAL")) :
                        get_template_directory_uri() . '/img/logo1.png'; ?>" class="" alt="">
                    </div>
                </a>
            </div>
        </div>  
    </section>
</main>
<div id="sectionslider">
</div>
<div id="slider-news-title">
    <a id="slider-news-title-anchor" href="<?php echo $links[0]; ?>"><?php echo $titles[0]; ?></a>
</div>

<div class="bullets">
    <?php
    for ($i=0; $i < $counter; $i++) { 
        ?>
        <span onClick="SetOpacity(<?php echo $i; ?>)">&#9679;</span>
        <?php
    }
    ?>
</div>
<script>
    var imgUrls = ["<?php echo $imgs[0]; ?>", "<?php echo $imgs[1]; ?>", "<?php echo $imgs[2]; ?>", "<?php echo $imgs[3]; ?>", "<?php echo $imgs[4]; ?>", ];
    var titles = ["<?php echo $links[0]; ?>", "<?php echo $links[1]; ?>", "<?php echo $links[2]; ?>", "<?php echo $links[3]; ?>", "<?php echo $links[4]; ?>", ];
    var linkstext = ["<?php echo $titles[0]; ?>", "<?php echo $titles[1]; ?>", "<?php echo $titles[2]; ?>", "<?php echo $titles[3]; ?>", "<?php echo $titles[4]; ?>", ];
    var counter = 0;
    var slider = document.getElementById("sectionslider");
    var newslink = document.getElementById("slider-news-title-anchor");
    $(slider).css({'background-image': "url('" + imgUrls[0] + "')", 'background-size': 'cover', 'background-position': 'center'});
    function MyFunc() {
        $(slider).stop().animate({opacity: 0},1000,function(){
            $(this).css({'background-image': "url('" + imgUrls[counter % 5] + "')"})
               .animate({opacity: 1},{duration:1000});
            $(newslink).attr('href', titles[counter % 5]);
            $(newslink).text(linkstext[counter % 5]);
        });
        counter++
    }
    var myTimer = setInterval(MyFunc, 6000);
    function SetOpacity(position) {
        $(slider).css({'background-image': "url('" + imgUrls[position] + "')", 'background-size': 'cover', 'background-position': 'center'});
        $(newslink).attr('href', titles[position]);
        $(newslink).text(linkstext[position]);
        clearInterval(myTimer);
        myTimer = setInterval(MyFunc, 6000);
    }

    var win = window,
    docEl = document.documentElement,
    logo = document.getElementById('main-hidden');

    win.onscroll = function(){
    var sTop = (this.pageYOffset || docEl.scrollTop)  - (docEl.clientTop || 0);
    logo.style.display =  sTop > 200 ? "block":"none" ;
    };

</script>
<?php
get_footer();
?>