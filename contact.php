<?php
/*
Template Name: Контакты
*/
?>
<?php
?>
<?php get_header()?>
    <div class="container container--side-bar">
		<?php require 'parts/views/side-bar.php'?>
        <div class="content">
            <h1><?php echo $post->post_title?></h1>
            <section class="contact-page map"><div id="map"></div></section>
            <section class="contact-page details">
                <div class="box box_contacts">
                    <div class="title">Адрес:</div>
                    <p><?php the_field('contact_address')?></p>
                    
                    <div class="title">Телефон:</div>
                    <p>
                        <a href="tel:<?php the_field('contact_phone_global_link')?>"><?php the_field('contact_phone_global')?></a>
                        <a href="tel:<?php the_field('contact_phone_irk_link')?>"><?php the_field('contact_phone_irk')?></a>
                    </p>

                    <div class="title">Email:</div>
                    <p><a href="mail:<?php the_field('contact_email')?>"></a><?php the_field('contact_email')?></p>

                    <div class="title">Режим работы:</div>
                    <p><?php the_field('contact_open_time')?></p>
                </div>
                <div class="box box_details">
                    <div class="text">
	                    <?php echo apply_filters( 'the_content', $post->post_content)?>
                    </div>
                    <?php require 'parts/views/form/contact-page.php'?>
                </div>
            </section>
        </div>
    </div>
<?php get_footer()?>