<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EndeWP
 */

?>

<div id="post-<?php the_ID(); ?>" class=" el-col-24 el-col-sm-12 post-thumbnail-padded">
		
			<?php
			
      endewp_post_image();
	
			?>
  <div style="text-align:center;">
    <?php the_title(); ?>
  </div>
</div><!-- #post-<?php the_ID(); ?> -->


<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <iframe class="modal-content-vid" id="vid01"
src="">
  </iframe>   
  <div id="caption"></div>
</div>

<script>
var modal = document.getElementById("myModal");
var img = document.getElementById("post-<?php the_ID(); ?>").firstElementChild.firstElementChild;
var modalVid = document.getElementById("vid01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalVid.src = "https://www.youtube.com/embed/<?php echo wp_strip_all_tags(get_the_content()); ?>";
  captionText.innerHTML = "<?php the_title(); ?>";
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
  modalVid.src = "";

}
</script>