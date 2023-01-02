$(document).ready(function() {
    $(".slide__image-advertising__images").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        draggable: true,
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="chevron-forward-outline"></ion-icon></ion-icon></button>`,
        dots: true,

        autoplay: true,
        autoplaySpeed: 1000,
    });

    $(".all-items-book").slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
        arrows: true,
        draggable: true,
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="chevron-forward-outline"></ion-icon></ion-icon></button>`,
    });
});