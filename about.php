<?php
/*
Template Name: О компании
*/
?>
<?php get_header()?>
<div class="container container--side-bar">
	<?php require 'parts/views/side-bar.php'?>
    <div class="content">
        <h1><?php echo $post->post_title?></h1>
	    <?php echo apply_filters( 'the_content', $post->post_content)?>
    </div>
</div>
<?php get_footer()?>
