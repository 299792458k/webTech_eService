<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/alertmessage.css">

        <title>Lịch sử đặt hàng</title>
    </head>
    <body>
        <?php require_once './mvc/Views/Blocks/user/Header.php'; ?>
        <div><style>
                /* Google Font CDN Link */
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
                *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins',sans-serif;
                }
                body{
                    min-height: 100vh;
                    align-items: center;
                    justify-content: center;
                    background: whitesmoke;
                }
                
                section {
                    margin-top: 50px;
                }
                
                .content{
                    padding-top: 100px;
                    max-width: 1090px;
                    width: 100%;
                    margin: auto;
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }
                .content .card{
                    background: #fff;
                    width: calc(33% - 20px);
                    text-align: center;
                    padding: 15px 30px  30px 30px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                    margin-bottom: 30px;
                }
                .content .card .top{
                    height: 130px;
                    color: #fff;
                    padding: 12px 0 0 0 ;
                    clip-path: polygon(0 0, 100% 0, 100% 53%, 49% 100%, 0 53%);
                }

                .content .card .top .title{
                    font-size: 27px;
                    font-weight: 600;
                }
                .content .card .top .price-sec{
                    margin-top: -10px;
                    font-weight: 600;
                }
                .content .card .top .price{
                    font-size: 45px;
                }
                .content .card .info{
                    font-size: 16px;
                    margin-top: 20px;
                }
                .content .card .details .one{
                    margin-top: 25px;
                    font-size: 15px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    position: relative;
                }
                .content .card .details .one::before{
                    position: absolute;
                    content: "";
                    width: 100%;
                    background: #ddd;
                    height: 1px;
                    left: 0;
                    top: -12px;
                    border-radius: 25px;
                }
                .content .card .details .one i{
                    color: #2db94d;
                }
                .content .card .details i.fa-times{
                    color: #cd3241;
                }
                .content .card button{
                    outline: none;
                    border: none;
                    height: 42px;
                    color: #fff;
                    margin-top: 30px;
                    border-radius: 3px;
                    font-size: 18px;
                    width: 100%;
                    display: block;
                    transition: all 0.3s ease;
                    cursor: pointer;
                    letter-spacing: 1px;
                }
                .content .one .top,
                .content .one button{
                    background: #14eb6e;
                }
                .content .two .top,
                .content .two button{
                    background: #e87130;
                }
                .content .three .top,
                .content .three button{
                    background: #11BCC3;
                }
                .content button:hover {
                    filter: brightness(90%);
                }
                .content .one ::selection{
                    background: #8af5b6;
                }
                .content .two ::selection{
                    background:  #f2b08c;
                }
                .content .three ::selection{
                    background: #d0f9fb;
                }
                @media (max-width:1000px) {
                    .content .card{
                        background: #fff;
                        width: calc(50% - 20px);
                        margin-bottom: 30px;
                    }
                }
                @media (max-width:715px) {
                    .content .card{
                        width: 100%;
                    }
                }


            </style>       

            <section>
                <?php
                if (isset($_SESSION['status'])) {
                    $status = $_SESSION['status'];
                    if ($status === "success") {
                        echo '
                            <div class="alert success">
                                <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                                Đặt hàng thành công.
                            </div>';
                    } else if ($status === "fail") {
                        echo '
                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                                Không thành công.
                            </div>';
                    }
                    unset($_SESSION['status']);
                }
                ?>
                <div class="content">
                <?php
                foreach ($data['orders'] as $product) {
                    echo '
                        <div class="card three">
                            <div class="top">
                                <div class="title">Đã đặt</div>
                                


                            </div>
                            <div class="info">Thông tin hóa đơn</div>
                            <div class="details">
                                <div class="one">
                                  <span>Khách hàng: ' . $product['fullname'] . ' </span>
                                  <i class="fas fa-check"></i>
                                </div>
                                <div class="one">
                                  <span>SĐT: ' . $product['phonenumber'] . '</span>
                                  <i class="fas fa-check"></i>
                                </div>
                                <div class="one">
                                  <span>Thời gian: ' . $product['order_time'] . '</span>
                                  <i class="fas fa-times"></i>
                                </div>
                                <div class="one">
                                  <span>Địa chỉ: ' . $product['address'] . '</span>
                                  <i class="fas fa-times"></i>
                                </div>
                                <button><a href="/webTech_eService/order/billShowForUser/' . $product['id'] . '">Xem chi tiết</a></button>
                            </div>
                        </div>
                        ';
                }
                ?>
                </div>

            </section>
        </div>
<?php require_once './mvc/Views/Blocks/user/Footer.php'; ?>

    </body>
</html>