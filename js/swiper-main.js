var swiper = new Swiper('.swiper-container--index-page', {
    pagination: {
        el: '.swiper-pagination',
        //dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    /*autoplay: {
        delay: 3000,
    },*/
    loop: true
});