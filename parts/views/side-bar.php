<div class="side-bar">
	<a href="/shop/" class="side-bar--title">Каталог</a>
	<div class="side-bar--list">
		<?php
		    wp_nav_menu(array('theme_location'=>'Shop', 'menu_class' => 'nav_shop') );
		?>
	</div>
    <div class="side-bar--form">
        <div class="title">Будь всегда в курсе!</div>
        <div class="text">Узнавайте о скидках и акциях первым</div>
        <div class="box">
            <?php require 'form/mail-side-bar.php'?>
        </div>
    </div>
</div>