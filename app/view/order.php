
    <link rel="stylesheet" href="./public/Css/order.css">


            <!-- -------------------------------------------------------------------------------------------- -->
            <div class="order-details-body">
                <div id="order-details">
                    <h2>Chi tiết đơn hàng</h2>
                    <ul id="order-items">
                        <!-- Các món ăn được thêm vào từ trang chi tiết sẽ hiển thị ở đây -->
                    </ul>
                </div>


                <div class="product-details">
                    <div class="product-image">
                        <img src="./public/upload/img-restaurant/bun-bo.jpeg" alt="Ảnh thức ăn">
                    </div>
                    <div class="product-info">
                        <h2>Bún bò Huế</h2>
                        <p class="price">Giá: 50,000đ</p>
                        <p class="description"><span>Mô tả sản phẩm:</span> Thưởng thức Bún bò Huế, bạn như đang bước
                            vào một hành trìnhß
                            ẩm thực vượt thời gian, từ những con phố nhỏ của Huế xưa đến trái tim của Việt Nam hiện đại.
                            Đây
                            là sự kết hợp hài hòa giữa vị ngọt của nước
                            dùng được ninh từ xương bò, vị cay nồng của ớt và gia vị, và hương thơm nồng nàn của các
                            loại
                            thảo mộc tinh tế. Những sợi bún mềm mại kết hợp cùng thịt bò thơm ngon, cùng với những rau
                            sống
                            tươi mát và chút chanh giấm tươi lạnh, tạo nên một trải nghiệm ẩm thực đầy sâu lắng và đặc
                            biệt.
                        </p>
                        <div class="quantity-control">
                            <button class="btn-quantity decrease">-</button>
                            <span class="quantity">1</span>
                            <button class="btn-quantity increase">+</button>
                        </div>
                        <button class="btn-add-to-cart" onclick="addToCart()">Thêm vào giỏ hàng</button>
                        <a href="index.php?page=cart"><button class="btn-add-to-cart_1">Xem giỏ hàng</button></a>
                    </div>
                </div>
                <div class="customer-reviews">
                    <h3>Đánh giá từ khách hàng</h3>
                    <form id="comment-form">
                        <textarea id="comment" placeholder="Nhập bình luận của bạn"></textarea>
                        <br>
                        <button type="submit">Gửi đánh giá</button>
                    </form>
                    <div id="comments">
                        <!-- Các bình luận từ khách hàng sẽ được hiển thị ở đây -->
                    </div>
                </div>
            </div>
            <!-- -------------------------------------------------------------------------------------------- -->

            
    <!-- -------------------------------------------------------------------------------------------- -->
    <script>
        attemptLogin = () => {
            window.location.href = "/Html/login.html";
        }
    </script>
    <script src="./public/Js/order.js"></script>