window.onload = function (){
    var cart = localStorage.getItem('cart');
    
    if(cart){
        cart = JSON.parse(cart);
        var totalQuantily = 0;

        cart.forEach(function(item){
            totalQuantily += parseInt(item.quantity);
        })

        var cartBadge = document.getElementById('cart-badge');
        cartBadge.textContent = totalQuantily;
    }
}