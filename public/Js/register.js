document.getElementById('registration-form').addEventListener('submit', function(event) {
    // Prevent the form from being submitted
    event.preventDefault();

    // Declare a variable to track if the fullname error is displayed
    var fullnameErrorDisplayed = false;

    var fullname = document.getElementById("fullname");
    var username = document.getElementById("username");
    var phone = document.getElementById("phone");
    var phonePattern = /^\d{10}$/;
    var password = document.getElementById("password");
    var passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var confirm_password = document.getElementById("confirm-password");
    var email = document.getElementById("email");

    // Check if the input fields are empty
    if(fullname.value.trim() === ""){
        if(!fullnameErrorDisplayed){
            alert("Please enter your full name");
            fullname.focus();
            fullname.style.backgroundColor = "#f5e4b3";
            fullnameErrorDisplayed = true;
        }
        return false;

    } else if(email.value.trim() === ""){
        alert("Please enter email");
        email.focus();
        email.style.backgroundColor = "#f5e4b3";
        return false;
    
    // Check if the email is valid
    } else if(!email.value.includes("@") || !email.value.includes(".") || email.value.lastIndexOf("@") > email.value.lastIndexOf(".")) {
        alert("Invalid email. Email must contain '@' and '.'");
        email.focus();
        email.style.backgroundColor = "#f5e4b3";
        return false;
    
    // Check if the phone number is valid
    } else if(phone.value.trim() === "" || !phonePattern.test(phone.value)) {
        alert("Please enter a valid phone number with 10 digits");
        phone.focus();
        phone.style.backgroundColor = "#f5e4b3";
        return false;

    // Check if the full name is at least 6 characters
    } else if(username.value.trim() === "" || username.value.length < 6){
        alert("Please enter username with at least 6 characters");
        username.focus();
        username.style.backgroundColor = "#f5e4b3";
        return false;

    } else if(password.value.trim() === ""){
        alert("Please enter password");
        password.focus();
        password.style.backgroundColor = "#f5e4b3";
        return false;

    // Check if the password is at least 8 characters
    } else if(password.value.length < 8 ){
        alert("Password must be at least 8 characters");
        password.focus();
        password.style.backgroundColor = "#f5e4b3";
        console.log("Password length:", password.value.length); // Kiểm tra giá trị độ dài mật khẩu
        return false ;

    // Check if the password contains at least one uppercase letter, one lowercase letter, one number, and one special character
    } else if(!passwordPattern.test(password.value)) {
        alert("Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character (@$!%*?&)");
        password.focus();
        password.style.backgroundColor = "#f5e4b3";
        return false ;

    } else if(confirm_password.value.trim() === ""){
        alert("Please enter confirm password");
        confirm_password.focus();
        confirm_password.style.backgroundColor = "#f5e4b3";
        return false;
    }
    
    // Check if the confirm password matches the password
    if(password.value !== confirm_password.value){
        alert("Confirm password does not match");
        confirm_password.focus();
        confirm_password.style.backgroundColor = "#f5e4b3";
        return false;
    }
     else {
        // If all checks pass, submit the form
        // alert("Registration successful");
        console.log("Form submitted");
        event.target.submit();
    }
    // Save the form data to local storage
    saveData();
    return false;
});

// save the form data to local storage
function saveData(){
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm-password").value;

    // Create an object to store the form data
    var formData = {
        fullname : fullname,
        email : email,
        phone : phone,
        username : username,
        password : password,
        confirm_password : confirm_password
    };

    // Save the form data to local storage
    localStorage.setItem("formData", JSON.stringify(formData));

    // Redirect to the login page
    location.href = "index.php?page=login";

    return false;
    }

// function removeError(event){
//     event.target.style.backgroundColor = "white";
// }
// document.getElementById("fullname").addEventListener("input", removeError);
// document.getElementById("email").addEventListener("input", removeError);
// document.getElementById("phone").addEventListener("input", removeError);
// document.getElementById("username").addEventListener("input", removeError);
// document.getElementById("password").addEventListener("input", removeError);
// document.getElementById("confirm-password").addEventListener("input", removeError);
