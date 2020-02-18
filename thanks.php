<?php
/*
Template Name: Спасибо
*/
?>
<?php get_header('thank')?>
<div class="container">
    <div class="content">
	    <?php echo apply_filters( 'the_content', $post->post_content)?>
    </div>
</div>
<?php get_footer()?>