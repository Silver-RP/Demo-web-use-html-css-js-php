
// Lấy thông tin sản phẩm từ sessionStorage và hiển thị lên trang
document.addEventListener('DOMContentLoaded', function () {
    const orderedItemString = sessionStorage.getItem('orderedItem');
    if (orderedItemString) {
        const orderedItem = JSON.parse(orderedItemString);
        const productImage = document.querySelector('.product-image img');
        const productName = document.querySelector('.product-info h2');
        const productPrice = document.querySelector('.product-info .price');
        const productDescription = document.querySelector('.product-info .description');

        productImage.src = orderedItem.image;
        productName.textContent = orderedItem.name;
        productPrice.textContent = orderedItem.price;

        // Mô tả sản phẩm có thể được cập nhật từ dữ liệu được lưu trữ trước đó hoặc từ một nguồn dữ liệu khác
        // Sử dụng một mô tả cố định cho mục đích minh họa
        productDescription.innerHTML = `
                <span>Mô tả sản phẩm:</span> Thưởng thức ${orderedItem.name}, 
                bạn như đang bước vào một hành trình ẩm thực vượt thời gian, 
                từ những con phố nhỏ của Huế xưa đến trái tim của Việt Nam hiện đại.
                Đây là sự kết hợp hài hòa giữa vị ngọt của nước dùng được ninh từ xương bò,
                vị cay nồng của ớt và gia vị, và hương thơm nồng nàn của các loại thảo mộc tinh tế. 
                Những sợi bún mềm mại kết hợp cùng thịt bò thơm ngon, cùng với những rau sống tươi mát 
                và chút chanh giấm tươi lạnh, tạo nên một trải nghiệm ẩm thực đầy sâu lắng và đặc biệt.
            `;
    }
});

// Sự kiện nút tăng giảm số lượng sản phẩm
document.addEventListener('DOMContentLoaded', function () {
    const decreaseButtons = document.querySelectorAll('.decrease');
    const increaseButtons = document.querySelectorAll('.increase');
    const quantityDisplays = document.querySelectorAll('.quantity');

    decreaseButtons.forEach(function (button, index) {
        button.addEventListener('click', function () {
            let quantity = parseInt(quantityDisplays[index].textContent);
            if (quantity > 1) {
                quantity--;
                quantityDisplays[index].textContent = quantity;
            }
        });
    });

    increaseButtons.forEach(function (button, index) {
        button.addEventListener('click', function () {
            let quantity = parseInt(quantityDisplays[index].textContent);
            quantity++;
            quantityDisplays[index].textContent = quantity;
        });
    });
});


function redirectTologin() {
    window.location.href = "index.php?page=login"
}


//Lưu thông tin sản phẩm từ local storage
function addToCart() {
    // Get product information
    var productImage = document.querySelector('.product-image img').getAttribute('src');
    var productName = document.querySelector('.product-info h2').textContent;
    var productPrice = document.querySelector('.product-info .price').textContent;
    var productQuantity = document.querySelector('.quantity').textContent;

    // Prepare cart item object
    var cartItem = {
        image: productImage,
        name: productName,
        price: productPrice,
        quantity: productQuantity
    };

    // Check if cart already exists in localStorage
    var cart = localStorage.getItem('cart');
    if (cart) {
        // Cart exists, parse it and add new item
        cart = JSON.parse(cart);
        var existingItem = cart.find(item => item.name === productName);
        if (existingItem) {
            existingItem.quantity = parseInt(existingItem.quantity) + parseInt(productQuantity);
        }else{
            cart.push(cartItem);
        }
    } else {
        // Cart doesn't exist, create new cart with this item
        cart = [cartItem];
    }

    // Save updated cart back to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Update cart badge
    var cartBadge = document.getElementById('cart-badge');
    cartBadge.textContent = cart.reduce((total, item)=> total + parseInt(item.quantity), 0);
}