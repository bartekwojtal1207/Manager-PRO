console.log('product.js');


document.addEventListener('DOMContentLoaded', function () {
    var test = $('.test'),
        moreInfo = $('.more-info'),
        descriptionContainer = $('.product-description');

    test.mouseenter(function () {
        // $('.info-box .info-box-section .price-section .price').toggleClass('opacity-element');
        $('.info-box .info-box-section').toggleClass('opacity-element');
        $('.info-box .info-box-section .price-section').parent().removeClass('opacity-element');
    });

    var counter = 0;
    moreInfo.on('click', function () {
    counter ++;
    var height = 48;

        if( counter%2 === 0) { height = 48; }else { height = 300; }

        descriptionContainer.animate({
            height: height
        }, 500, function() {
            // Animation complete.
        });(500);

    });
















});