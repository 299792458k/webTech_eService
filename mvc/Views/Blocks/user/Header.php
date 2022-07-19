<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/style.css" type="text/css">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/header.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title></title>
    </head>
    <body>
        <!-- header starts -->
        <header>
            <a href="/webTech_eService/home/index" class="logo"><i class="fas fa-utensils"></i>Food4U</a>

            <div id="menu-bar" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="/webTech_eService/home/index">Trang chủ</a>
                <a href="/webTech_eService/home/index#speciality">Combo</a>
                <a href="/webTech_eService/home/index#popularity">Pizza</a>

                <?php
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="/webTech_eService/detail/index">Giỏ</a>';
                    echo '<a href="/webTech_eService/order/history">Lịch sử</a>';
                    echo '<a href="/webTech_eService/user/edithome">' . $_SESSION['user_name'] . '</a>';
                    echo '<a href="/webTech_eService/user/logout">Thoát</a>';
                } else if (isset($_SESSION['admin_id'])) {
                    echo '<a href="/webTech_eService/product/index">Quản lí</a>';
                    echo '<a href="/webTech_eService/admin/edithome">' . $_SESSION['admin_name'] . '</a>';
                    echo '<a href="/webTech_eService/admin/logout">Thoát</a>';
                } else {
                    echo '<a href="/webTech_eService/detail/index">Giỏ</a>';
                    echo '<a href="/webTech_eService/user/login">Đăng nhập</a>';
                }
                ?>

            </nav>
        </header>
        <!-- header ends -->
        <!-- scroll top -->
        <a href="#home" class="fas fa-angle-up" id="scroll-up"></a>
        <!-- scroll top ends -->
        <script src="/webTech_eService/mvc/Views/User/js/scripts.js"></script>
    </body>
</html>
