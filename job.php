<?php
/*
Template Name: Вакансии
*/
?>
<?php
$contact_id = get_page_data('contact')->ID;
?>
<?php get_header()?>
    <?php require 'parts/views/form/profile.php'?>
	<div class="container container--side-bar">
		<?php require 'parts/views/side-bar.php'?>
		<div class="content">
			<h1><?php echo $post->post_title?></h1>
            <section class="job-page main">
                <div class="box box_content"><?php echo apply_filters( 'the_content', $post->post_content)?></div>
                <div class="box box_contacts">
                    <div class="title">Телефон</div>
                    <p>
                        <a href="tel:<?php the_field('contact_phone_global_link', $contact_id)?>"><?php the_field('contact_phone_global', $contact_id)?></a>
                        <a href="tel:<?php the_field('contact_phone_irk_link', $contact_id)?>"><?php the_field('contact_phone_irk', $contact_id)?></a>
                    </p>
                    <div class="title">Email:</div>
                    <p><a href="mail:<?php the_field('contact_email', $contact_id)?>"></a><?php the_field('contact_email', $contact_id)?></p>
                </div>
                <div class="box box_form open-modal_profile"><div class="button button--fill">Отправить резюме</div></div>
            </section>
		</div>
	</div>
<?php get_footer()?>