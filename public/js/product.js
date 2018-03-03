console.log('product.js');


document.addEventListener('DOMContentLoaded', function () {
    var test = $('.test');

    test.mouseenter(function () {
        $('.info-box .info-box-section .price-section .price').toggleClass('opacity-element');

        $('.info-box .info-box-section').toggleClass('opacity-element');
        $('.info-box .info-box-section .price-section').parent().removeClass('opacity-element');

            // console.log('dzialaj 4');
        console.log( $('.info-box .info-box-section .price-section .price'))
    })


});