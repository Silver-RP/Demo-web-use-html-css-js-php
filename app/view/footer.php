
<div class="container-footer">
        <div class="container2">
            <div class="block-footer">
                <p class="title-block1">Công ty</p>
                <ul class="menu-footer">
                    <li class="menu-item"><a href="">Giới thiệu</a></li>
                    <li class="menu-item"><a href="" target="_blank" rel="noopener noreferrer">Trung tâm Trợ
                            giúp</a></li>
                    <li class="menu-item"><a href="">Quy chế</a></li>
                    <li class="menu-item"><a href="">Điều khoản sử dụng</a></li>
                    <li class="menu-item"><a href="">Bảo mật thông tin</a></li>
                    <li class="menu-item"><a href="">Giải quyết khiếu nại</a></li>
                    <li class="menu-item"><a href="">Liên hệ</a></li>
                    <li class="menu-item"><a href="">Hợp tác nhân viên giao nhận</a></li>
                    <li class="menu-item"><a href="">Đăng ký quán</a></li>
                    <li class="menu-item"><a href="">ShopeeFood Uni</a></li>
                    <li class="menu-item"><a href="" target="_blank" rel="noopener noreferrer">Shopee Blog</a>
                    </li>
                </ul>
            </div>
            <div class="block-footer1">
                <div class="logo-now">
                    <img src="./public/upload/RoppyFood.png" alt="Logo thương hiệu" style="width: 250px; height: 270px;
                                                                                        margin-right: 600px;">
                </div>
            </div>
            <div class="block-footer">
                <p class="title-block2">Địa chỉ công ty</p>
                <span class="menu-info">
                    <p>Công Ty Cổ Phần Roody</p>
                    <p>Lầu G, Tòa nhà Jabes 1,</p>
                    <p>số 244 đường Cống Quỳnh, phường Phạm Ngũ Lão,</p>
                    <p> Quận 1, TPHCM</p>
                    <p>Giấy CN ĐKDN số: 0311828036</p>
                    <p>do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012,</p>
                    <p>sửa đổi lần thứ 23, ngày 10/12/2020</p>
                    <p>Chịu trách nhiệm quản lý nội dung: Lê Hùng Dũng Minh</p>
                    <p>Điện thoại liên hệ: 028 71096***</p>
                    <p>Email: <a href="mailto:support@roppyood.vn">support@sroppyfood.vn</a></p>
                </span>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- ---------------------------------------------------------------- -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var searchIcon = document.getElementById("icon-search");
            if (searchIcon) {
                searchIcon.addEventListener("click", function () {
                    // Your search icon click event handler code goes here
                    alert("Search icon clicked!");
                });
            }
        });
        function redirectTologin() {
            window.location.href = "index.php?page=login"
        }
        const loginButton = document.getElementById('loginButton');
        loginButton.addEventListener('click', redirectTologin);


    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('toggle-menu').addEventListener('click', function () {
                document.getElementById('menu').classList.toggle('open');
            });
        });
    </script>
    <script src="./public/Js/common.js"></script>
    <script src="./public/Js/cart-quantily.js"></script>
    <script src="./public/Js/index.js"></script>
    <script>
        window.addEventListener('load', function () {
            checkLogginStatus();
        });
    </script>
</body>

</html>