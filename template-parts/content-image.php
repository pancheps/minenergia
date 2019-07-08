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

</div><!-- #post-<?php the_ID(); ?> -->


<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
var modal = document.getElementById("myModal");
var img = document.getElementById("post-<?php the_ID(); ?>").firstElementChild.firstElementChild;
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src; 
  captionText.innerHTML = "<?php the_title(); ?>";
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}
</script>