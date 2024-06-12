
<link rel="stylesheet" href="./public/Css/register.css">


            <!-- -------------------------------------------------------------------------------------------- -->
            <div style="background-color: rgb(240, 248, 240); padding: 40px 0;">
                <div class="registration-container">
                    <h2>Đăng ký tài khoản</h2>
                    <form id="registration-form" action="" method="POST">
                        <div class="form-group">
                            <label for="fullname">Họ và tên:</label>
                            <input type="text" id="fullname" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại:</label>
                            <input type="text" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="username">Tên đăng nhập:</label>
                            <input type="text" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Xác nhận mật khẩu:</label>
                            <input type="password" id="confirm-password" name="confirm-password">
                        </div>
                        <button type="submit" name="register" value="register">Đăng ký</button>
                    </form>
                    <div class="login-link">
                        <p>Đã có tài khoản? <a href="index.php?page=login">Đăng nhập</a></p>
                    </div>
                </div>
            </div>

            <!-- -------------------------------------------------------------------------------------------- -->

            
    <!-- -------------------------------------------------------------------------------------------- -->
    <script>
        attemptLogin = () => {
            window.location.href = "index.php?page=login";
        }
    </script>
    <script src="./public/Js/register.js"></script>
    <script src="./public/Js/index.js"></script>
</body>

</html>