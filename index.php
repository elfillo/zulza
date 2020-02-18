<?php
/*
Template Name: Главная
*/
?>
<?php ?>
<?php get_header()?>
<?php
    $slider = [
        ['img' => 'img/pages/index/1.jpeg'],
        ['img' => 'img/pages/index/2.jpeg'],
        ['img' => 'img/pages/index/3.jpeg'],
        ['img' => 'img/pages/index/4.jpeg'],
    ];
    $icons = [
        ['img' => 'img/pages/index/icons/1.png', 'text' => 'Весь товар <br/>сертифицирован'],
        ['img' => 'img/pages/index/icons/2.png', 'text' => 'Удобная и быстрая <br/>доставка'],
        ['img' => 'img/pages/index/icons/3.png', 'text' => '30 дней на обмен и <br/>возврат'],
        ['img' => 'img/pages/index/icons/4.png', 'text' => 'Подарочные <br/>сертификаты'],
    ];
    $about_link = get_page_data('about')->guid;
?>
<div class="container container--side-bar">
	<?php require 'parts/views/side-bar.php'?>
	<div class="content">
        <section class="index-page slider">
            <div class="swiper-container swiper-container--index-page">
                <div class="swiper-wrapper">
                    <?php foreach ($slider as $item):?>
                        <div class="swiper-slide">
                            <div class="item" style="background-image: url('<?php get_uri($item['img'])?>')">
                                <div class="content">
                                    <div class="title">Какой-то заголовок</div>
                                    <div class="text">Какой-то текст</div>
                                    <div class="btn">
                                        <a href="#" class="button button--fill">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next swiper_arrow swiper_arrow--next"><svg viewBox="0 0 492 492"><use xlink:href="#icon--arrow"></use></svg></div>
                <div class="swiper-button-prev swiper_arrow swiper_arrow--prev"><svg viewBox="0 0 492 492"><use xlink:href="#icon--arrow"></use></svg></div>
            </div>
        </section>
        <section class="index-page icons">
            <?php foreach ($icons as $icon):?>
                <div class="item">
                    <div class="img">
                        <img src="<?php get_uri($icon['img'])?>" alt="#">
                    </div>
                    <span><?php echo $icon['text']?></span>
                </div>
            <?php endforeach;?>
        </section>
        <section class="index-page about">
            <div class="box box_img"><img src="<?php get_uri('img/pages/index/company.png')?>" alt="#"></div>
            <div class="box box_text">
                <div class="title">О компании</div>
                <div class="text"><b>Компания ООО «Зулза»</b> является одним из&nbsp;крупнейших, в&nbsp;Иркутской области, поставщиков смазочных материалов импортных и&nbsp;отечественных брендов, тосола, антифриза и&nbsp;мочевины собственного производства <b>«EcoCool», «Сила Сибири», «EcoDiesel Blue»</b>, прочих технических жидкостей и&nbsp;средств, а&nbsp;также всех видов оборудования, ориентированных во&nbsp;все сферы производства и&nbsp;промышленности, начиная от&nbsp;химической и&nbsp;заканчивая оборонной.</div>
                <div class="btn">
                    <a href="<?php echo $about_link?>" class="button">Подробнее</a>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer()?>


