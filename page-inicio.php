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
$the_query = new WP_Query( array( 'posts_per_page' => 5, 'category_name' => 'Portada') );
?>
<ul class="cb-slideshow">
<?php
$counter = 0;
/* Start the Loop */
while ( $the_query->have_posts() ) :
    $the_query->the_post();
    if ($counter < 5) {
        $imgs[] = get_the_post_thumbnail_url();
        $titles[] = get_the_permalink();
        ?>
        <li>
            <span></span>
            <div>
                <a href="<?php echo get_the_permalink(); ?>">
                <?php
                    echo get_the_title();
                ?>
                </a>
            </div>
        </li>
        <?php
        $counter ++;
    } 
    else 
        break;
endwhile;
wp_reset_postdata();
?>
</ul>
<style>

/* General Demo Style */

.cb-slideshow,
.cb-slideshow:after { 
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0; 
}
.cb-slideshow:after { 
    content: '';
}
.cb-slideshow li span { 
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    opacity: 0;
    z-index: -10;
	-webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 30s linear infinite 0s;
    -moz-animation: imageAnimation 30s linear infinite 0s;
    -o-animation: imageAnimation 30s linear infinite 0s;
    -ms-animation: imageAnimation 30s linear infinite 0s;
    animation: imageAnimation 30s linear infinite 0s; 
}
.cb-slideshow li div { 
    position: absolute;
    bottom: 50px;
    left: 0px;
    width: 100%;
    text-align: center;
    opacity: 0;
    color: #fff;
    -webkit-animation: titleAnimation 30s linear infinite 0s;
    -moz-animation: titleAnimation 30s linear infinite 0s;
    -o-animation: titleAnimation 30s linear infinite 0s;
    -ms-animation: titleAnimation 30s linear infinite 0s;
    animation: titleAnimation 30s linear infinite 0s; 
}
.cb-slideshow li div a { 
    font-size: 2em;
    margin-bottom: 50px;
    line-height: 2em; 
    text-decoration: none;
    font-weight: 900;
    color: white;
    text-shadow: 0 0 10px black;
}
.cb-slideshow li:nth-child(1) span { 
    background-image: url(<?php echo $imgs[0]; ?>);
}
.cb-slideshow li:nth-child(2) span { 
    background-image: url(<?php echo $imgs[1]; ?>);
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s; 
}
.cb-slideshow li:nth-child(3) span { 
    background-image: url(<?php echo $imgs[2]; ?>);
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s; 
}
.cb-slideshow li:nth-child(4) span { 
    background-image: url(<?php echo $imgs[3]; ?>);
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s; 
}
.cb-slideshow li:nth-child(5) span { 
    background-image: url(<?php echo $imgs[4]; ?>);
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
.cb-slideshow li:nth-child(2) div { 
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s; 
}
.cb-slideshow li:nth-child(3) div { 
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s; 
}
.cb-slideshow li:nth-child(4) div { 
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s; 
}
.cb-slideshow li:nth-child(5) div { 
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s; 
}
/* Animation for the slideshow images */
@-webkit-keyframes imageAnimation { 
    0% { opacity: 0;
    -webkit-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -webkit-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
    0% { opacity: 0;
    -moz-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -moz-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
    0% { opacity: 0;
    -o-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -o-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
    0% { opacity: 0;
    -ms-animation-timing-function: ease-in; }
    8% { opacity: 1;
         -ms-animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
@keyframes imageAnimation { 
    0% { opacity: 0;
    animation-timing-function: ease-in; }
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    25% { opacity: 0 }
    100% { opacity: 0 }
}
/* Animation for the title */
@-webkit-keyframes titleAnimation { 
    0% { opacity: 0;
    animation-timing-function: ease-in;  }
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    19% { opacity: 0 }
    100% { opacity: 0 }
}
@-moz-keyframes titleAnimation { 
    0% { opacity: 0 ;
    animation-timing-function: ease-in;}
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    19% { opacity: 0 }
    100% { opacity: 0 }
}
@-o-keyframes titleAnimation { 
    0% { opacity: 0;
    animation-timing-function: ease-in; }
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    19% { opacity: 0 }
    100% { opacity: 0 }
}
@-ms-keyframes titleAnimation { 
    0% { opacity: 0;
    animation-timing-function: ease-in; }
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    19% { opacity: 0 }
    100% { opacity: 0 }
}
@keyframes titleAnimation { 
    0% { opacity: 0;
    animation-timing-function: ease-in; }
    8% { opacity: 1;
         animation-timing-function: ease-out; }
    17% { opacity: 1 }
    19% { opacity: 0 }
    100% { opacity: 0 }
}
/* Show at least something when animations not supported */
.no-cssanimations .cb-slideshow li span{
	opacity: 1;
}

@media screen and (max-width: 1140px) { 
    .cb-slideshow li div h3 { font-size: 140px }
}
@media screen and (max-width: 600px) { 
    .cb-slideshow li div h3 { font-size: 80px }
}
</style>
<script>
    var titles = ["<?php echo $titles[0]; ?>", "<?php echo $titles[1]; ?>", "<?php echo $titles[2]; ?>", "<?php echo $titles[3]; ?>", "<?php echo $titles[4]; ?>", ];
    var counter = 0;
setInterval(function() {
    var elem = document.querySelectorAll("ul.cb-slideshow a");
    counter++;
    elem[elem.length - 1].href = titles[counter % titles.length];
  }, 6000);
</script>
<?php
get_footer();
?>