console.log('mainpage.js folder public /// js file  to ONLY MAIN page profile  ');

//
// // slider main page (auth === true)
//
    var slidersItem = $('.slider');
    console.log(slidersItem);
        slidersItem.slick();
function handleOutboundLinkClicks(event) {
    ga('send', 'event', {
        eventCategory: 'Outbound Link',
        eventAction: 'click',
        eventLabel: ' kliknieto w link'
    });
}