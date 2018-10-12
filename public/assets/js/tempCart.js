$(document).ready(function(){

    var cartCookieName = 'cart_items';
    var cartItems = JSON.parse(getCookie(cartCookieName));

    if (cartItems) {
        $('#bag-items-count').html(cartItems.length)
    }
    

    $('.__addToCart').on('click', function(){
        var cartItems = JSON.parse(getCookie(cartCookieName));

        if (cartItems) {
            cartItems.push(productId);
        } else {
            var cartItems = [];
            cartItems.push(productId);
        }
        $('#bag-items-count').html(cartItems.length)
        setCookie(cartCookieName, JSON.stringify(cartItems), 365)
        
    });

});