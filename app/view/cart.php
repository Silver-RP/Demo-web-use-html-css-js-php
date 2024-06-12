<link rel="stylesheet" href="./public/Css/cart.css">
<style>
    .container-cart{
        overflow: hidden;
    }
</style>
<!-- -------------------------------------------------------------------------------------------- -->
<!-- Show cart data from session -->
<div class="container-cart">
    <h1>Giỏ hàng</h1>
    <div id="cart-items">
        <table>
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr id="cart-items">
                </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>

    <div id="total-price">
        <h3>Tổng tiền: <span id="total"></span> đ</h3>
    </div>
    <button class="btn-deleteAll" onclick="clearCart()">Xoá tất cả giỏ hàng</button>
</div>
<!-- -------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------- -->

<script src="./public/Js/cart.js"></script>
<script src="./public/Js/cart-quantily.js"></script>
<script src="./public/Js/index.js"></script>
<script src="./public/Js/common.js"></script>
<script>
    attemptLogin = () => {
        window.location.href = "/Html/login.html";
    }
</script>
<script>
    window.addEventListener('load', function() {
        checkLogginStatus();
    });
</script>


</body>

</html>