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
if (!isset($_GET[pagina])) {
	$_GET[pagina] = 1;
}
else {
	if (is_nan($_GET[pagina])) {
		$_GET[pagina] = 1;
	}
	if ($_GET[pagina] < 1) {
		$_GET[pagina] = 1;
	}
	if ($_GET[pagina] > $_GET[upperLimit]) {
		$_GET[pagina] = $_GET[upperLimit];
	}
	}
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(array("container", "page")); ?>>

	<?php endewp_post_thumbnail(); ?>

	<div class="page-content">
		<div class="row1 row">
			<div class=" title-base text-center col-md-12 ">
			<h2><?php echo get_the_title($_GET['subpId']) ?? "Multimedia"; ?></h2>
			</div>
		</div>
		<?php if ($cat_id != 0) :?>
		<div class="p-box el-row">
			<div class="el-col el-col-24 el-col-sm-7">
				<div id="navbarCollapse" class="navbar-collapse">
					<ul class="nav nav-sub">
						<?php
						foreach ($cat_posts as $key => $value) : ?>
						<li>
							<a href="<?php echo get_permalink(get_the_ID()) . "?subpId=" . $value->ID; ?>">
								<span>
									<i class="glyphicon glyphicon-play">&#9632;</i>
								</span> <?php echo $value->post_title; ?>
							</a>
						</li>
						<?php
						endforeach
						?>

					</ul>
				</div>
			</div>

			<div class="el-col el-col-24 el-col-sm-16 padded">
			<?php
			$ispostlist = false;
			if (!isset($_GET['subpId']) || $_GET['subpId'] == "") {
				the_content();
			}
			else {
				$term = term_exists( get_the_title($_GET['subpId']), 'category' );
				if ( 0 !== $term && null !== $term ) {
					$per_page = 8;
					$the_query = new WP_Query( array( 
						'posts_per_page' => $per_page, 
						'category_name' => get_the_title($_GET['subpId']), 
						'offset' => isset($_GET['pagina']) ? ($_GET['pagina'] - 1) * $per_page : 0) 
					);
					$cat_posts = cat_post_count(get_the_title($_GET['subpId']));
			
					if ($the_query->have_posts()) {
						$counter = 0;
						$postPerRow = 4;
						$total = 0;
									/* Start the Loop */
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							if ($total >= $per_page)
								break;
							if ($counter < $postPerRow) {
								if ($counter == 0) {
									?>
									<div class="p-box el-row">
									<?php
								}
								$counter ++;
								$ispostlist = true;
							} 
							if(has_category("Galería de Fotos")) {
								get_template_part( 'template-parts/content-image', get_post_type() );
							}
							else if(has_category("Videos")) {
								get_template_part( 'template-parts/content-video', get_post_type() );
							}
							else if (has_category("Publicaciones")) {
								get_template_part( 'template-parts/content-pubs', get_post_type() );
							}
							else {
								$postPerRow = 1;
								get_template_part( 'template-parts/content-audit', get_post_type());
							}
							$total ++;
							if ($counter >= $postPerRow) {
								?>
								</div>
								<?php
								$counter = 0;
							}	
						endwhile;
					}
					wp_reset_postdata();

				}
				else {
					echo get_post($_GET['subpId'])->post_content;
				}
			}
			$pageMax = ceil($cat_posts / $per_page);
			?>
			</div>
			<?php if ($ispostlist) : ?>
			<div class="pagination-row">
			<?php
			/*
			$start = (isset($_GET['pagina']) ) ? $_GET['pagina'] > 2 ? $_GET['pagina'] - 2 : 0 : 0;
			$end = isset($_GET['pagina']) ? 
				(ceil($cat_posts / $per_page) - $_GET['pagina']) > 2 ? 
					$_GET['pagina'] + 2 : 
					ceil($cat_posts / $per_page) : 
				ceil($cat_posts / $per_page);
			if ($start > 0 && isset($_GET['pagina'])) {
				echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($_GET['pagina'] - 1) . "' class='pagIndex'>Anterior</a> ";
			}
			for ($i = $start + 1; $i <= $end; $i ++) { 
				if (isset($_GET['pagina'])) {
					if ($_GET['pagina'] == $i) {
						echo "<span class='pagIndexCurrent'>" . ($i) . "</span> ";
					}
					else {
						echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($i) . "' class='pagIndex'>" . ($i) . "</a> ";
					}
				}
				else {
					if ($i == 1) {
						echo "<span class='pagIndexCurrent'>" . ($i) . "</span> ";
					}
					else {
						echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($i) . "' class='pagIndex'>" . ($i) . "</a> ";
					}
				}
			}
			if (ceil($cat_posts / $per_page) > $end) {
				echo "<a href='" . get_permalink() . "?subpId=" . $_GET['subpId'] . "&pagina=" . ($_GET['pagina'] + 1) . "' class='pagIndex'>Siguiente</a> ";
			}	
			*/
			?>
			<?php
			if ($_GET['pagina'] == 1) {
				$beforeMost = "javascript: void();";
				$before = "javascript: void();";
			}
			else {
				$beforeMost = home_url($_SERVER['REQUEST_URI']) . "&subpId=$_GET[subpId]&pagina=1&upperLimit=" . $pageMax;
				$before = home_url($_SERVER['REQUEST_URI']) . "&subpId=$_GET[subpId]&pagina=" . ($_GET['pagina'] - 1) . "&upperLimit=" . $pageMax;
			}
			if ($_GET['pagina'] == $_GET[upperLimit]) {
				$afterMost = "javascript: void();";
				$after = "javascript: void();";
			}
			else {
				$afterMost = home_url($_SERVER['REQUEST_URI']) . "&subpId=$_GET[subpId]&pagina=" . $pageMax . "&upperLimit=" . $pageMax;
				$after = home_url($_SERVER['REQUEST_URI']) . "&subpId=$_GET[subpId]&pagina=" . ($_GET['pagina'] + 1) . "&upperLimit=" . $pageMax;
			}
			?>
			<form action="<?php echo home_url($_SERVER['REQUEST_URI']) . "&subpId=$_GET[subpId]&pagina=$_GET[pagina]"; ?>">
				<a href="<?php echo $beforeMost; ?>"><img width="20px" src="<?php echo get_template_directory_uri() . '/img/prevprev.png'; ?>"></a>
				<a href="<?php echo $before; ?>"><img width="18px" src="<?php echo get_template_directory_uri() . '/img/prev.png'; ?>"></a>
				<label>Página </label>
				<input name="pagina" type="text" size="3" value="<?php echo $_GET['pagina']; ?>" >
				<input name="subpId" type="hidden" value="<?php echo $_GET['subpId']; ?>" >
				<input name="upperLimit" type="hidden" value="<?php echo $pageMax; ?>" >
				<label> de <?php echo $pageMax; ?></label>
				<a href="<?php echo $after; ?>"><img width="18px" src="<?php echo get_template_directory_uri() . '/img/next.png'; ?>"></a>
				<a href="<?php echo $afterMost; ?>"><img width="20px" src="<?php echo get_template_directory_uri() . '/img/nextnext.png'; ?>"></a>
			</form>
		</div>
		<?php endif; ?>
		</div>
		<?php else : ?>
		<div class="p-box el-row">
			<div class="nav el-col el-col-24 el-col-sm-24">
			<?php
				echo the_content();
			?>
			</div>
		</div>
		<?php endif; ?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
	<?php endif; ?>

</section><!-- #post-<?php the_ID(); ?> -->
