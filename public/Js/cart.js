
// Get cart items from local storage and display them in the cart page
var cart = JSON.parse(localStorage.getItem('cart'));
var cartItemsContainer = document.getElementById('cart-items');
if (cart) {
    // Create table header
    var tableHeader = `
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                `;
    // Add table header to the table
    cartItemsContainer.innerHTML = "<table>" + tableHeader + "</table>";
    let total = 0;

    // Iterate through each item in the cart and create table rows
    cart.forEach(function (item) {
        var row = document.createElement('tr');
        row.innerHTML = `
        <td><img src="${item.image}" alt="Product Image"></td>
        <td>${item.name}</td>
        <td>${item.price}</td>
        <td>
            <div class="quantity-control">
                <button class="btn-quantity decrease" data-product="${item.name}"> - </button>
                <span class="quantity">${item.quantity}</span>
                <button class="btn-quantity increase" data-product="${item.name}"> + </button>
            </div>
        </td>
        <td 
            class="total-price">${calculateTotal(item.price, item.quantity)}
        </td>
        <td>
            <button class="btn-delete" data-product="${item.name}">Xoá</button>
        </td>

    `;
        total += parseFloat(calculateTotal(item.price, item.quantity));
        // Append row to the table
        cartItemsContainer.querySelector('table').appendChild(row);
        document.getElementById('total').innerText = total + ".000";
    });

    // Add event listeners for quantity increase and decrease buttons
    var increaseButtons = document.querySelectorAll('.increase');
    var decreaseButtons = document.querySelectorAll('.decrease');
    var deleteButtons = document.querySelectorAll('.btn-delete');

    increaseButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.dataset.product;
            var product = cart.find(function (item) {
                return item.name === productName;
            });
            if (product) {
                product.quantity++;
                localStorage.setItem('cart', JSON.stringify(cart));
                // Recalculate total and update display
                total = 0;
                cart.forEach(function (item) {
                    total += parseFloat(calculateTotal(item.price, item.quantity));
                });
                document.getElementById('total').innerText = total + ".000";
                // Update quantity and total price display
                var quantityDisplay = this.previousElementSibling;
                var totalPriceDisplay = this.parentElement.parentElement.nextElementSibling;
                quantityDisplay.innerText = product.quantity;
                totalPriceDisplay.innerText = calculateTotal(product.price, product.quantity);
            }
        });
    });

    decreaseButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var productName = this.dataset.product;
            var product = cart.find(function (item) {
                return item.name === productName;
            });
            if (product && product.quantity > 1) {
                product.quantity--;
                localStorage.setItem('cart', JSON.stringify(cart));
                // Recalculate total and update display
                total = 0;
                cart.forEach(function (item) {
                    total += parseFloat(calculateTotal(item.price, item.quantity));
                });
                document.getElementById('total').innerText = total + ".000";
                // Update quantity and total price display
                var quantityDisplay = this.nextElementSibling;
                var totalPriceDisplay = this.parentElement.parentElement.nextElementSibling;
                quantityDisplay.innerText = product.quantity;
                totalPriceDisplay.innerText = calculateTotal(product.price, product.quantity);
            }
        });
        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var productName = this.dataset.product;
                var index = cart.findIndex(function (item) {
                    return item.name === productName;
                });
                if (index !== -1) {
                    cart.splice(index, 1);
                    localStorage.setItem('cart', JSON.stringify(cart));
                    this.parentElement.parentElement.remove(); // Remove the row from the table
                    // Recalculate total and update display
                    total = 0;
                    cart.forEach(function (item) {
                        total += parseFloat(calculateTotal(item.price, item.quantity));
                    });
                    document.getElementById('total').innerText = total + ".000";
                    var cartBadge = document.getElementById('cart-badge');
                    cartBadge.textContent = cart.length; // Update cart badge
                }
            });
        });
    });
}
// Function to calculate total price
function calculateTotal(price, quantity) {
    var numericPrice = parseFloat(price.replace(/[^\d.-]/g, ''));
    var numericQuantity = parseInt(quantity);
    return numericPrice * numericQuantity + ".000 đ";
}
//  localStorage.clear();

//Xoá toàn bộ sản phẩm trong giỏ hàng
function clearCart() {
    localStorage.clear();
    location.reload();
}

