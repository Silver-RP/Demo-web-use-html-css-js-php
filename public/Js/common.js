

function checkLogginStatus() {
    var loginUser = localStorage.getItem('loginUser');
    if(loginUser){
        document.getElementById("welcome-ms").innerHTML = "Chào mừng " + loginUser;
        document.getElementById("loginButton").innerText = "Đăng xuất";
        document.getElementById("loginButton").setAttribute("onclick", "logout()");
    }
}

function logout() {
    localStorage.removeItem("loginUser");
    document.getElementById("welcome-ms").innerHTML = "";
    document.getElementById("loginButton").innerText = "Đăng nhập";
    document.getElementById("loginButton").setAttribute("onclick", "location.href='index.php?page=login'");
}


/*
    (khi người dùng đăng nhập thành công, tên người dùng sẽ được hiển thị ở phía trên cùng bên phải của trang và nút 
    "login" sẽ được thay đổi thành nút "logout". Khi người dùng nhấn vào nút "logout", thông tin người dùng sẽ được 
    xóa và nút "logout" sẽ được chuyển đổi trở lại thành nút "login".)

    <!-- Thêm mã HTML dưới đây vào bất kỳ trang nào bạn muốn hiển thị nút "login" và tên người dùng -->
    <span id="user-welcome"></span>
    <button id="login-btn" onclick="attemptLogin()">Login</button>

    <script src="/Js/common.js"></script>
    <script>
        window.onload = function(){
            checkLogginStatus();
        };
    </script>


*/