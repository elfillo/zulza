<footer class="footer">
    <div class="container">
        <div class="privacy">
            <div class="text">Комплексные поставки смазочных материалов</div>
            <div class="img"><img src="<?php get_uri('img/pay_icons.png')?>" alt="#"></div>
            <a href="#" class="link">Политика обработки персональных данных</a>
        </div>
        <div class="menu">
	        <?php wp_nav_menu(array('theme_location'=>'Footer') );?>
        </div>
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
    </div>
</footer>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/map.js"></script>
<?php wp_footer(); ?>
</body>
</html>