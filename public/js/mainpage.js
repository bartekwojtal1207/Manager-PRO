console.log('mainpage.js folder public /// js file  to ONLY MAIN page profile  ');
$(function () {
    $('#app').css('display', 'none');

    var showText = function (target, message, index, interval) {
        if (index < message.length) {
            $(target).append(message[index++]);
            setTimeout(function () { showText(target, message, index, interval); }, interval);
        }
    };

    var textToAnimate = $('.js-mainpage-title').text();

    setTimeout(function () {
        showText("#msg", textToAnimate, 0, 1500);
    },3000)





})



function handleOutboundLinkClicks(event) {
    ga('send', 'event', {
        eventCategory: 'Outbound Link',
        eventAction: 'click',
        eventLabel: ' kliknieto w link'
    });
}