
<link rel="stylesheet" href="./public/CSS/login.css">

            <!-- -------------------------------------------------------------------------------------------- -->
            <div style="background-color: rgb(240, 248, 240); padding: 40px 0;">
                <div class="login-container">
                    <h2>Đăng nhập</h2>
                    <form id="login-form" method="POST">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập:</label>
                            <input type="text" id="username" name="username" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" value="" required>
                        </div>
                        <button type="submit" name="login" value="Login" onclick="return checkLogin()">Đăng nhập</button><br>
                        <input type="checkbox"> Bằng cách đăng nhập hoặc đăng ký, bạn đồng ý với <a href="#">Chính sách
                            quy định của RoppyFood.</a></input><br>
                        <br>
                        <span>Nếu bạn chưa có tài khoản? <a href="index.php?page=register"> Đăng ký</a>.</span>
                    </form>
                    <div class="social-login">
                        <p>Hoặc đăng nhập bằng:</p>
                        <button onclick="loginWithGoogle()">Google</button>
                        <button onclick="loginWithPhoneNumber()">Số điện thoại</button>
                        <button onclick="loginWithFacebook()">Facebook</button>
                    </div>
                </div>
            </div>

            <!-- -------------------------------------------------------------------------------------------- -->

           
    <!-- -------------------------------------------------------------------------------------------- -->
    <script>
        function loginWithGoogle() {
            // Thực hiện chuyển hướng đến trang đăng nhập Google
            window.location.href = "link-to-google-login-page";
        }

        function loginWithPhoneNumber() {
            // Thực hiện chuyển hướng đến trang đăng nhập bằng số điện thoại
            window.location.href = "link-to-phone-login-page";
        }

        function loginWithFacebook() {
            // Thực hiện chuyển hướng đến trang đăng nhập Facebook
            window.location.href = "link-to-facebook-login-page";
        }
        function redirectTologin() {
            window.location.href = "index.php?page=login"
        }
        const loginButton = document.getElementById('loginButton');
        loginButton.addEventListener('click', redirectTologin);
    </script>

    <script src="./public/Js/login.js"></script>
    <script src="./public/Js/common.js"></script>
    <script src="./public/Js/index.js"></script>
    <script src="./public/Js/cart-quantily.js"></script>
    <!--  <div id="cart-icon" class="cart-icon">
                        <a href="/Html/cart.html">
                            <img src="/img/cart.png" alt="Giỏ hàng">
                            <span id="cart-badge" class="cart-badge">0</span>
                        </a>
                    </div> -->
    <script>
        window.onload = function(){
            checkLogginStatus();
        };
    </script>
