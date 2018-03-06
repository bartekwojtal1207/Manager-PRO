console.log('product.js');


document.addEventListener('DOMContentLoaded', function () {
    var test = $('.test'),
        moreInfo = $('.more-info'),
        moreInfoHidden = $('.more-info-hidden'),
        descriptionContainer = $('.product-description'),
        testLi = $('.test-li'),
        infoBoxSection = $('.info-box .info-box-section');

    test.mouseenter(function () {
        // $('.info-box .info-box-section .price-section .price').toggleClass('opacity-element');
        infoBoxSection.toggleClass('opacity-element');
        infoBoxSection.children('.price-section').parent().removeClass('opacity-element');
    });

    moreInfo.on('click', function () {

        descriptionContainer.animate({
            height: 300
        }, 500, function() {
            // Animation complete.
        });(500);
        moreInfoHidden.removeClass('hidden');
        moreInfo.addClass('hidden');
    });


    moreInfoHidden.on('click', function () {

        descriptionContainer.animate({
            height: 48
        }, 500, function() {
            // Animation complete.
        });(500);
        moreInfo.removeClass('hidden');
        moreInfoHidden.addClass('hidden');
    });

    $(window).resize(function () {

        if (window.innerWidth < 1000) {
            descriptionContainer.css('height','100px');
            moreInfoHidden.addClass('hidden');
            moreInfo.removeClass('hidden');
        }
    });

    testLi.on('click',function () {
        testLi.removeClass('active-li');
        $(this).addClass('active-li');
    });
















});