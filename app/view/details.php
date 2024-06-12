<link rel="stylesheet" href="./public/CSS/details.css">
<div class="details-restaurant">
    <div class="container-details-above">
        <div class="container-details-img">
            <img src="./public/upload/img-restaurant/bun-bo.jpeg" alt="Ảnh thức ăn" style="width: 400px; height: 280px;">
        </div>
        <div class="container-details-info">
            <h2 class="title-restaurant">Bún bò Sơn Hải</h2>
            <p class="address-restaurant">Địa chỉ: 123 Nguyễn Văn Cừ, Quận 1, TP.HCM</p>
            <p class="time-restaurant">Giờ mở cửa: 8:00 - 22:00</p>
            <p class="phone-restaurant">Số điện thoại: 0123456789</p>
            <p class="title-restaurant">Mô tả: Quán là một quán ăn với các món ăn ngon, chất lượng
                cao, giá cả hợp lý. Quán có không gian thoáng đãng, sạch sẽ, phục vụ nhanh chóng,
                thân thiện. Quán có thể phục vụ đồ ăn tận nơi, giao hàng tận nhà.</p>
        </div>
    </div>
    <div class="container-details-below">
        <div class="menu-tab">
            <h2>THỰC ĐƠN</h2>
        </div>
        <div class="menu-content">
            <div class="menu-content-category">
                <div class="menu-category">
                    <h3 class="title-category">Món chính</h3>
                    <ul class="menu-item-list">
                        <li class="menu-item"><a href="#">Phở </a></li>
                        <li class="menu-item"><a href="#">Mì gõ</a></li>
                        <li class="menu-item" style="background-color: aquamarine; width: 25%;"><a href="#">Bún bò</a></li>
                        <li class="menu-item"><a href="#">Hủ tiếu</a></li>
                        <li class="menu-item"><a href="#">Bánh canh</a></li>
                    </ul>
                </div>
                <div class="menu-category">
                    <h3 class="title-category">Nước</h3>
                    <ul class="menu-item-list">
                        <li class="menu-item"><a href="#">Nước mía</a></li>
                        <li class="menu-item"><a href="#">Nước dừa</a></li>
                        <li class="menu-item"><a href="#">Nước cam</a></li>
                        <li class="menu-item"><a href="#">Nước ép</a></li>
                        <li class="menu-item"><a href="#">Nước lọc</a></li>
                    </ul>
                </div>
                <div class="menu-category">
                    <h3 class="title-category">Món tráng miệng</h3>
                    <ul class="menu-item-list">
                        <li class="menu-item"><a href="#">Chè</a></li>
                        <li class="menu-item"><a href="#">Bánh</a></li>
                        <li class="menu-item"><a href="#">Kem</a></li>
                        <li class="menu-item"><a href="#">Trái cây</a></li>
                        <li class="menu-item"><a href="#">Nước mát</a></li>
                    </ul>
                </div>

            </div>
            <div class="menu-content-list">
                <div class="menu-list">
                    <div class="menu-item">
                        <img src="./public/upload/img-restaurant/bun-bo.jpeg" alt="Ảnh thức ăn" style="width: 200px; height: 150px;">
                        <h4 class="title-item
                                    ">Bún bò Huế</h4>
                        <p class="price-item
                                    ">Giá: 50.000đ</p>
                        <button class="btn order-btn" type="button"></a>Đặt món</button>
                    </div>
                    <div class="menu-item">
                        <img src="./public/upload/img-bun_bo/hn.webp" alt="Ảnh thức ăn" style="width: 200px; height: 150px;">
                        <h4 class="title-item
                                    ">Bún bò Hà Nội</h4>
                        <p class="price-item
                                    ">Giá: 50.000đ</p>
                        <button class="btn order-btn" type="button">Đặt món</button>
                    </div>
                    <div class="menu-item">
                        <img src="./public/upload/img-bun_bo/sg.jpeg" alt="Ảnh thức ăn" style="width: 200px; height: 150px;">
                        <h4 class="title-item
                                    ">Bún bò Sài Gòn</h4>
                        <p class="price-item
                                    ">Giá: 50.000đ</p>
                        <button class="btn order-btn" type="button">Đặt món</button>
                    </div>
                    <div class="menu-item">
                        <img src="./public/upload/img-bun_bo/Thai.jpeg" alt="Ảnh thức ăn" style="width: 200px; height: 150px;">
                        <h4 class="title-item
                                    ">Bún bò Thái</h4>
                        <p class="price-item
                                    ">Giá: 50.000đ</p>
                        <button class="btn order-btn" type="button">Đặt món</button>
                    </div>
                    <div class="menu-item">
                        <img src="./public/upload/img-bun_bo/Nam_bo.webp" alt="Ảnh thức ăn" style="width: 200px; height: 150px;">
                        <h4 class="title-item
                                    ">Bún bò Nam Bộ</h4>
                        <p class="price-item
                                    ">Giá: 50.000đ</p>
                        <button class="btn order-btn" type="button">Đặt món</button>
                    </div>
                    <div class="menu-item">
                        <img src="./public/upload/img-bun_bo/namgan.jpeg" alt="Ảnh thức ăn" style="width: 200px; height: 150px;">
                        <h4 class="title-item
                                    ">Bún bò nạm gân</h4>
                        <p class="price-item
                                    ">Giá: 50.000đ</p>
                        <button class="btn order-btn" type="button">Đặt món</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var searchIcon = document.getElementById("icon-search");
        if (searchIcon) {
            searchIcon.addEventListener("click", function() {
                // Your search icon click event handler code goes here
                alert("Search icon clicked!");
            });
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const orderButtons = document.querySelectorAll('.order-btn');

        orderButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const menuItem = this.closest('.menu-item');
                const itemName = menuItem.querySelector('.title-item').textContent;
                const itemPrice = menuItem.querySelector('.price-item').textContent;
                const itemImage = menuItem.querySelector('img').src;

                // Lưu thông tin về các món đã đặt hàng vào sessionStorage
                const orderedItem = {
                    name: itemName,
                    price: itemPrice,
                    image: itemImage
                };
                sessionStorage.setItem('orderedItem', JSON.stringify(orderedItem));
                // Chuyển hướng sang trang order.html
                window.location.href = 'index.php?page=order';
            });
        });
    });

    function redirectTologin() {
        window.location.href = "/Html/login.html"
    }
    const loginButton = document.getElementById('loginButton');
    loginButton.addEventListener('click', redirectTologin);
</script>
