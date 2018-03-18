document.addEventListener('DOMContentLoaded', function () {
    console.log('product-lisitng');

    var changeViewListingBtn = $('#changeViewListingBtn'),
        productsListContainer = $('.products-list-container'),
        photoListingProduct = $('.products-list-container img'),
        linkListingProduct = productsListContainer.find('a'),
        priceElement = $('.price-element'),
        productsList = $('.products-list'),
        productNamelisting = $('.name-product-listing');
    console.log(linkListingProduct);

    changeViewListingBtn.on('click', function (e) {
        productsListContainer.toggleClass('products-list-container-listing-view');
        productsList.toggleClass('products-list-listing-view');
        photoListingProduct.toggleClass('img-listing-view').toggleClass('col-md-1');
        linkListingProduct.toggleClass('col-md-10').toggleClass('link-listing-view');
        priceElement.toggleClass('col-md-12').toggleClass('col-md-1').toggleClass('text-right').toggleClass('price-element-listing-view')
        productNamelisting.toggleClass('hidden');
    });

});