
document.getElementById("login-form").addEventListener("submit", function(event){
    event.preventDefault();
    attemptLogin();
});


function checkLogin() {
    var username = document.getElementById("username").value.trim();
    var password = document.getElementById("password").value.trim();

    if (username === "") {
        alert("Please enter username");
        return false;
    } else if (password === "") {
        alert("Please enter password");
        return false;
    } 
    return true;
}

function attemptLogin() {
    if (checkLogin()) {
        // Kiểm tra hàm checkLogin đã trả về true
        var getData = localStorage.getItem("formData");
        var formData = JSON.parse(getData);
        
        // Kiểm tra xem formData có tồn tại không
        if (formData) {
            var stored_username = formData.username;
            var stored_password = formData.password;

            var username = document.getElementById("username").value.trim();
            var password = document.getElementById("password").value.trim();

            // Kiểm tra xem username và password nhập vào có khớp với dữ liệu lưu trữ không
            if (username === stored_username && password === stored_password) {
                alert("Login successful");
                localStorage.setItem("loginUser", username);
                // document.getElementById("login-form").reset();
                location.href = "index.php?page=home";
            } else {
                alert("Invalid username or password. If you are a new user, please register first.");
            }
        } 
    }
}
