<?php get_header('shop')?>
<div class="container container--shop container--side-bar">
	<div class="side-bar">
		<div class="side-bar--title">Рубрикатор:</div>
		<div class="side-bar--list">
			<?php wp_nav_menu(array('theme_location'=>'Shop', 'menu_class' => 'nav_shop') );?>
		</div>
	</div>
	<div class="content">
		<?php woocommerce_breadcrumb()?>
		<?php woocommerce_content(); ?>
	</div>
</div>
<?php get_footer()?>
