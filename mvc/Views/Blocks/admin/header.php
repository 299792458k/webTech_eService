<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/Admin/styles/header.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body{
                min-height: 100vh;
            }
            nav{
                position: sticky;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                height: 70px;
                background: #fff;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                z-index: 99;
            }
            a:hover {
                color: #3E8DA8;
            }
            nav .navbar{
                height: 100%;
                max-width: 1250px;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin: auto;
                /* background: red; */
                padding: 0 50px;
            }
            .navbar .logo a{
                font-size: 30px;
                color: #666;
                text-decoration: none;
                font-weight: 600;
            }
            .navbar .logo a i{
                color: #ff6600;
            }
            nav .navbar .nav-links{
                line-height: 70px;
                height: 100%;
            }
            nav .navbar .links{
                display: flex;
            }
            nav .navbar .links li{
                position: relative;
                display: flex;
                align-items: center;
                justify-content: space-between;
                list-style: none;
                padding: 0 14px;
            }
            nav .navbar .links li a{
                height: 100%;
                text-decoration: none;
                white-space: nowrap;
                color: #ff6600;
                font-size: 15px;
                font-weight: 500;
            }
            .links li:hover .htmlcss-arrow,
            .links li:hover .js-arrow{
                transform: rotate(180deg);
            }

            nav .navbar .links li .arrow{
                /* background: red; */
                height: 100%;
                width: 40px;
                line-height: 70px;
                text-align: center;
                display: inline-block;
                color: #ff6600;
                transition: all 0.3s ease;
            }
            nav .navbar .links li .sub-menu{
                position: absolute;
                top: 70px;
                left: 0;
                line-height: 40px;
                background: #fff;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                border-radius: 0 0 4px 4px;
                display: none;
                z-index: 2;
            }
            nav .navbar .links li:hover .htmlCss-sub-menu,
            nav .navbar .links li:hover .js-sub-menu{
                display: block;
            }
            .navbar .links li .sub-menu li{
                padding: 0 22px;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
            .navbar .links li .sub-menu a{
                color: #ff6600;
                font-size: 15px;
                font-weight: 500;
            }
            .navbar .links li .sub-menu .more-arrow{
                line-height: 40px;
            }

            .navbar .links li .sub-menu .more-sub-menu{
                position: absolute;
                top: 0;
                left: 100%;
                border-radius: 0 4px 4px 4px;
                z-index: 1;
                display: none;
            }
            .links li .sub-menu .more:hover .more-sub-menu{
                display: block;
            }

            .navbar .search-box{
                position: relative;
                height: 40px;
                width: 40px;
            }
            .navbar .search-box i{
                position: absolute;
                height: 100%;
                width: 100%;
                line-height: 40px;
                text-align: center;
                font-size: 22px;
                color: #fff;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            .navbar .search-box .input-box{
                position: absolute;
                right: calc(100% - 40px);
                top: 80px;
                height: 60px;
                width: 300px;
                background: #3E8DA8;
                border-radius: 6px;
                opacity: 0;
                pointer-events: none;
                transition: all 0.4s ease;
            }
            .navbar.showInput .search-box .input-box{
                top: 65px;
                opacity: 1;
                pointer-events: auto;
                background: #3E8DA8;
            }
            .search-box .input-box::before{
                content: '';
                position: absolute;
                height: 20px;
                width: 20px;
                background: #3E8DA8;
                right: 10px;
                top: -6px;
                transform: rotate(45deg);
            }
            .search-box .input-box input{
                position: absolute;
                top: 50%;
                left: 50%;
                border-radius: 4px;
                transform: translate(-50%, -50%);
                height: 35px;
                width: 280px;
                outline: none;
                padding: 0 15px;
                font-size: 16px;
                border: none;
            }


            .navbar .nav-links .sidebar-logo{
                display: none;
            }
            .navbar .bx-menu{
                display: none;
            }
            @media (max-width:920px) {
                nav .navbar{
                    max-width: 100%;
                    padding: 0 25px;
                }

                nav .navbar .logo a{
                    font-size: 27px;
                }
                nav .navbar .links li{
                    padding: 0 10px;
                    white-space: nowrap;
                }
                nav .navbar .links li a{
                    font-size: 15px;
                }
            }
            @media (max-width:800px){
                .navbar .bx-menu{
                    display: block;
                    padding: 20px;
                }
                nav .navbar .nav-links{
                    position: fixed;
                    top: 0;
                    left: -100%;
                    display: block;
                    max-width: 400px;
                    width: 100%;
                    background:  #fff;
                    line-height: 40px;
                    padding: 20px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                    transition: all 0.5s ease;
                    z-index: 1000;
                }
                .navbar .nav-links .sidebar-logo{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }
                .sidebar-logo .logo-name{
                    font-size: 25px;
                    color: #ff6600;
                }
                .sidebar-logo  i,
                .navbar .bx-menu{
                    font-size: 25px;
                    color: #ff6600;
                }
                nav .navbar .links{
                    display: block;
                    margin-top: 20px;
                }
                nav .navbar .links li .arrow{
                    line-height: 40px;
                }
                nav .navbar .links li{
                    display: block;
                }
                nav .navbar .links li .sub-menu{
                    position: relative;
                    top: 0;
                    box-shadow: none;
                    display: none;
                }
                nav .navbar .links li .sub-menu li{
                    border-bottom: none;

                }
                .navbar .links li .sub-menu .more-sub-menu{
                    display: none;
                    position: relative;
                    left: 0;
                }
                .navbar .links li .sub-menu .more-sub-menu li{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }
                .links li:hover .htmlcss-arrow,
                .links li:hover .js-arrow{
                    transform: rotate(0deg);
                }
                .navbar .links li .sub-menu .more-sub-menu{
                    display: none;
                }
                .navbar .links li .sub-menu .more span{
                    /* background: red; */
                    display: flex;
                    align-items: center;
                    /* justify-content: space-between; */
                }

                .links li .sub-menu .more:hover .more-sub-menu{
                    display: block;
                }
                nav .navbar .links li:hover .htmlCss-sub-menu,
                nav .navbar .links li:hover .js-sub-menu{
                    display: block;
                }
                .navbar .nav-links.show1 .links .htmlCss-sub-menu,
                .navbar .nav-links.show3 .links .js-sub-menu,
                .navbar .nav-links.show2 .links .more .more-sub-menu{
                    display: block;
                }
                .navbar .nav-links.show1 .links .htmlcss-arrow,
                .navbar .nav-links.show3 .links .js-arrow{
                    transform: rotate(180deg);
                }
                .navbar .nav-links.show2 .links .more-arrow{
                    transform: rotate(90deg);
                }
            }
            @media (max-width:370px){
                nav .navbar .nav-links{
                    max-width: 100%;
                }
            }

        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <div class="navbar">
                <div class="logo"><a href="/webTech_eService/home/index"><i class="fas fa-utensils"></i>Food4U</a></div>
                <i class='bx bx-menu'></i>
                
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name">Food4U</span>
                        <i class='bx bx-x' ></i>
                    </div>
                    <ul class="links">
                        <!-- <li><a href="#">Trang chủ</a></li> -->

                        <li>
                            <a href="#">Sản phẩm</a>
                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                            <ul class="js-sub-menu sub-menu">
                                <li><a href="/webTech_eService/product/addhome">Thêm sản phẩm</a></li>
                                <li><a href="/webTech_eService/product/index">Danh sách sản phẩm</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="#">Đơn hàng</a>
                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                            <ul class="js-sub-menu sub-menu">
                                <li><a href="/webTech_eService/order/index">Danh sách đơn hàng</a></li>
                            </ul>
                            </a>
                        </li>
                        <li>
                            <a href="#">Admin</a>
                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                            <ul class="js-sub-menu sub-menu">
                                <li><a href="/webTech_eService/admin/edithome">Thông tin</a></li>
                                <li><a href="/webTech_eService/admin/logout">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <script src="/webTech_eService/mvc/Views/Admin/js/script.js"></script>
    </body>
</html>
