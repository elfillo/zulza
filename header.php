<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <title>ZULZA</title>
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="" />
</head>
<body>
<?php require 'parts/views/svg.php'?>
<?php require 'parts/views/upstairs.php'?>
<?php require 'parts/views/form/callback.php'?>
<?php require 'parts/views/form/shop.php'?>
<?php require 'parts/views/catalog-mobile.php'?>
<div class="container">
    <header class="header">
        <a href="/" class="logo">
            <img src="<?php get_uri('img/logo.png')?>" alt="logo">
        </a>
        <div class="text">Комплексные поставки <br/>смазочных материалов</div>
        <div class="search"><?php echo do_shortcode('[wcas-search-form]'); ?></div>
        <div class="phones">
            <div class="box box_icon">
                <svg class="icon" viewBox="0 0 348.077 348.077">
                    <use xlink:href="#icon--phone"></use>
                </svg>
            </div>
            <div class="box box_call">
                <a href="tel:+78007075874" rel="nofollow">8 800 707-58-74</a>
                <a href="tel:+73952265874" rel="nofollow">8 (3952) 26-58-74</a>
                <span class="open-modal open-modal_callback">Заказать звонок</span>
            </div>
        </div>
    </header>
    <nav class="nav nav_main">
	    <?php wp_nav_menu(array('theme_location'=>'Main') );?>
    </nav>
    <nav class="nav nav_mobile">
        <div class="burger_wr"><div class="title">Меню</div><div class="burger"><span></span><span></span><span></span></div></div>
		<?php wp_nav_menu(array('theme_location'=>'Mobile', 'menu_class' => 'mobile_menu hide_list') );?>
	    <?php echo do_shortcode('[wcas-search-form]'); ?>
    </nav>
</div>


