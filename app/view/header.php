<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt đồ ăn với Roppy</title>
    <link rel="stylesheet" href="./public/CSS/header.css">
    <link rel="stylesheet" href="./public/CSS/footer.css">
    <link rel="stylesheet" href="./public/CSS/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    <div id="app">
        <div class="wrap">
            <div class="container-header">
                <div class="slide-show">
                    <div class="list-images">
                        <img src="./public/upload/header-menu-background-imge.png" width="100%" alt="" class="img-slide">
                        <img src="./public/upload/img-slideShow/slide-1.png" width="100%" alt="" class="img-slide">
                        <img src="./public/upload/img-slideShow/slide-2.png" width="100%" alt="" class="img-slide">
                        <img src="./public/upload/img-slideShow/slide-3.png" width="100%" alt="" class="img-slide">
                    </div>
                    <div class="container">
                        <div class="btns">
                            <div class="btn-left btns-sl"><i class='bx bx-chevron-left'></i></div>
                            <div class="btn-right btns-sl"><i class='bx bx-chevron-right'></i></div>
                        </div>
                        <div class="index-images">
                            <div class="index-item index-item-0 active"></div>
                            <div class="index-item index-item-1"></div>
                            <div class="index-item index-item-2"></div>
                            <div class="index-item index-item-3"></div>
                        </div>
                        <span id="welcome-ms"></span>
                        <div class="logo-now">
                            <span>
                                <a href="index.php?page=home" alt="Roppy Food"><img src="./public/upload/RoppyFood.png"
                                        alt="Roppy Food"></a>
                            </span>
                        </div>

                        <div class="select-local">
                            <select name="select-local" id="select-local" class="drop-menu">
                                <span class="drop-item">
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                </span>
                                <span class="drop-item">
                                    <option value="Hà Nội">Hà Nội</option>
                                </span>
                                <span class="drop-item">
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                </span>
                                <span class="drop-item">
                                    <option value="Bình Thuận">Bình Thuận</option>
                                </span>
                                <span class="drop-item">
                                    <option value="Đồng Nai">Đồng Nai</option>
                                </span>
                            </select>
                        </div>

                        <div class="main-nav">
                            <a class="nav-item" href="">Đồ ăn</a>
                            <a class="nav-item" href="">Thực phẩm</a>
                            <a class="nav-item" href="">Bia</a>
                            <a class="nav-item" href="">Hoa</a>
                            <a class="nav-item" href="">Siêu thị</a>
                            <a class="nav-item" href="">Thuốc</a>
                            <a class="nav-item" href="">Thú cưng</a>
                        </div>
                        <div class="header-icon-search">
                            <span class="icon-search" id="icon-search">🔍</span>
                        </div>
                        <div class="user-acc">
                            <button class="btn-login" id="loginButton" type="button-login" onclick="attemptLogin()">Đăng
                                nhập</button>
                        </div>
                        <div id="cart-icon" class="cart-icon">
                            <a href="index.php?page=cart">
                                <img src="./public/upload/cart.png" alt="Giỏ hàng">
                                <span id="cart-badge" class="cart-badge">0</span>
                            </a>
                        </div>
                        <div class="language-dropdown">
                            <div class="language-dropdown-content">
                                <a href="">🇻🇳 Tiếng Việt</a>
                                <a href="">🇬🇧 English</a>
                            </div>
                        </div>
                        

                        <label for="nav-mobile-input" class="media nav-item" id="toggle-menu">
                            <i class="fas fa-bars"></i>
                        </label> 
                      
                        <input type="checkbox" hidden class="nav_input" name="" id="nav-mobile-input">

                        <label for="nav-mobile-input" class="nav_overlay"></label>

                        <div class="nav_mobile">
                            <label for="nav-mobile-input" class="nav_mobile-close">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </label>
                            <div class="nav_mobile_nav">
                                <a class="nav_mobile_item" href="">Đồ ăn</a>
                                <a class="nav_mobile_item" href="">Thực phẩm</a>
                                <a class="nav_mobile_item" href="">Bia</a>
                                <a class="nav_mobile_item" href="">Hoa</a>
                                <a class="nav_mobile_item" href="">Siêu thị</a>
                                <a class="nav_mobile_item" href="">Thuốc</a>
                                <a class="nav_mobile_item" href="">Thú cưng</a>
                            </div>
                            <div class="nav_mobile_user-acc">
                                <button class="nav_mobile_btn-login" id="loginButton" type="button-login"
                                    onclick="attemptLogin()">Đăng
                                    nhập</button>
                            </div>
                            <div class="nav_mobile_language-dropdown">
                                <div class="nav_mobile_language-dropdown-content">
                                    <a class="nav_mobile_item" href="">🇻🇳 Tiếng Việt</a>
                                    <a class="nav_mobile_item" href="">🇬🇧 English</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>