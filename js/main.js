"use strict";

// стрелка вверх
$(document).ready(function(){
    var scrollElem = document.getElementById("upstairs");
    $(window).scroll(function () {

        if ($(this).scrollTop() > 0) {
            scrollElem.style.opacity = "1";
        } else {
            scrollElem.style.opacity = "0";
        }
    });

    $('#upstairs').click(function(){
        $('html').animate({scrollTop:0},1500);
        $('body').animate({scrollTop:0},1500);
    });
});

//show staff list

$(document).ready(function () {
    $('.staff-page .department .title').click(function () {
        let list = event.target.parentElement.children[1];
        $(list).toggleClass('list_show');
    });
});

//show mobile menu
/*$(document).ready(function () {
    $('.burger').click(function () {
        console.log('click');
        $('.mobile_menu').toggleClass('hide_list');
    });
});*/

//active link
/*$(function () {
    $(".nav_header li a").each(function () {
        window.location.href == this.href && $(this).addClass("active");
        this.pathname == '/kontakty/' && $(this).parent().addClass("contact_link");
    });

});*/

//show sub menu
/*$(document).ready(function () {
  $('.nav_header li')
      .mouseenter(function () {
        $(this).addClass('show_sub');
      })
      .mouseleave(function () {
        let self = this;
        setTimeout(function () {
          $(self).removeClass('show_sub');
        }, 500);

      })
  ;
});*/

//show arrow (on main menu)
/*$(document).ready(function () {
  let sub = $('.sub-menu');
  let svg = `<svg class="inline-svg-icon" viewBox="0 0 492 492">
                <use xlink:href="#icon--arrow"></use>
            </svg>`;
  sub.parent().addClass('show_arrow');
  sub.parent().append( svg );
});*/

//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    $('.burger').click(function(){
        showMenu = !showMenu;
        $('.mobile_menu').toggleClass('hide_list');
        if(showMenu){
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
        }else{
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'

            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            });
        }
    });
});

//open modal

$(document).ready(function () {
   $('.open-modal_callback').click(function () {
       $('.modal_callback').css('display', 'flex');
   });
    $('.open-modal_profile').click(function () {
        $('.modal_profile').css('display', 'flex');
    });
    //
});

//close modal
$(document).ready(function () {
    $('.form .close').click(function () {
       $('.modal').css('display', 'none');
    });
});

//not add to cart

$(document).ready(function () {
    $('form.cart button').click(function () {
       event.preventDefault();
       let product_name = document.querySelector('h1.product_title').textContent;
       $('.modal_shop').css('display', 'flex');
       $('#product_name').val(product_name);
    });
});

//add catalog for menu (mobile)
$(document).ready(function () {
    let mobile_menu = $('.mobile_menu');

    let catalog_link = `
        <li class="open-modal_catalog"><a href="#">Каталог</a></li>
    `;
    $(mobile_menu).prepend(catalog_link);

    $('.open-modal_catalog').click(function () {
        console.log('hui');
        $('.modal_catalog').css('display', 'flex');
    });
});

//toggle filters (for mobile)
$(document).ready(function () {
    let filters = $('.filters .widget-area');

    let open_filters = true;

    $('.filters .filter_toggle').click(function () {
        open_filters = !open_filters;
        $(filters).toggleClass('toggle_filters');
        if(open_filters){
            $('.filters .filter_toggle span').text('Скрыть фильтры');
            $('.filters .filter_toggle .arrow').css('transform', 'rotate(-45deg)');

        }else{
            $('.filters .filter_toggle span').text('Показать фильтры');
            $('.filters .filter_toggle .arrow').css('transform', 'rotate(45deg)');
        }

    });

});


//footer for contact page
/*$(document).ready(function () {
    if(window.location.pathname === '/kontakty/'){
        $('.footer').css('margin-top', '-18px');
    }
});*/

//fix breadcrumbs woocommerce
/*$(document).ready(function () {
    if(window.location.pathname === '/shop/'){
        $('.woocommerce-breadcrumb').text('Магазин');
    }
});*/

//draw cart for shop header

/*
$(document).ready(function () {
    let shopNav = $('.nav_shop ');
    let cart = `
            <a href="/cart/">
                <svg class="cart" viewBox="0 0 492 492">
                    <use xlink:href="#icon--cart"></use>
                </svg>
            </a>`;
    let count = `<div class="cart_count"></div>`;

    getSubTotalSum();

    if(shopNav){
        $(".nav_shop li a").each(function () {
            this.pathname == '/shop/' && $(this).parent().addClass('shop-item');
            this.pathname == '/shop/' && $(this).addClass('active');
            this.pathname == '/shop/' && $(this).parent().append(count);
            this.pathname == '/shop/' && $(this).parent().append(cart);
        });
    }
});*/