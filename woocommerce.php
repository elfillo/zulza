<?php get_header()?>
	<div class="container container--shop container--side-bar">
        <div class="side-bar">
            <a href="/shop/" class="side-bar--title">Каталог</a>
            <div class="side-bar--list">
                <?php
                    if(is_singular( 'product' ) || $_SERVER['REQUEST_URI'] === '/shop/'){
                        wp_nav_menu(array('theme_location'=>'Shop', 'menu_class' => 'nav_shop') );
                    }else{
                        require 'parts/admin/widgets/side-bar.php';
                    }
                ?>
            </div>
        </div>
        <div class="content">
	        <?php woocommerce_breadcrumb()?>
	        <?php woocommerce_content(); ?>
        </div>
	</div>
<?php get_footer()?>