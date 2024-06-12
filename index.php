<?php
    require_once 'app/view/header.php';

    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch($page){
            case 'home':
                require_once 'app/view/home.php';
                break;
            case 'detail':
                require_once 'app/view/details.php';
                break;
            case 'order':
                require_once 'app/view/order.php';
                break;
            case 'cart':
                require_once 'app/view/cart.php';
                break;
            case 'login':
                require_once 'app/view/login.php';
                break;
            case 'register':
                require_once 'app/view/register.php';
                break;
            default:
                require_once 'app/view/home.php';
                break;
        }
    }else{
        require_once 'app/view/home.php';
    }

    require_once 'app/view/footer.php';
?>