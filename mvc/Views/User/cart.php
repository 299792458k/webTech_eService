<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Lịch sử đặt hàng</title>
    </head>
    <body>
       <?php require_once './mvc/Views/Blocks/user/Header.php'; ?>
        <div style="height:100px;"></div>

        <div>
            <style>
                :root {

                    /**
                     * Colors
                     */

                    --onyx:         hsl(0, 0%, 25%);
                    --azure:        hsl(219, 77%, 60%);
                    --white:        hsl(0, 0%, 100%);
                    --platinum:     hsl(0, 0%, 91%);
                    --gainsboro:    hsl(0, 0%, 90%);
                    --red-salsa:    hsl(0, 77%, 60%);
                    --dim-gray:     hsl(0, 0%, 39%);
                    --davys-gray:   hsl(0, 0%, 30%);
                    --spanish-gray: hsl(0, 0%, 62%);
                    --quick-silver: hsl(0, 0%, 64%);
                    --orange: #ff6600;

                    /**
                     * Typography
                     */

                    --fs-28: 28px;
                    --fs-24: 24px;
                    --fs-20: 20px;
                    --fs-18: 18px;
                    --fs-15: 15px;
                    --fs-14: 14px;

                    --fw-5: 500;
                    --fw-6: 600;
                    --fw-7: 700;

                    /**
                     * Others 
                     */

                    --px: 60px;
                    --radius: 5px;

                }





                /*-----------------------------------*\
                  #RESET
                \*-----------------------------------*/

                *, *::before, *::after {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                html {
                    font-family: 'Source Sans 3', sans-serif;
                }

                a {
                    color: inherit;
                    text-decoration: none;
                }

                button {
                    border: none;
                    background: none;
                    font: inherit;
                    cursor: pointer;
                }

                ion-icon, span {
                    display: inline-block;
                    font-size: large;
                }

                label, img {
                    display: block;
                }

                input {
                    font: inherit;
                    width: 100%;
                    border: none;
                    font-size: large;
                }
                .input-box{
                    margin-bottom: 15px;
                }

                input:focus {
                    outline: 2px solid var(--orange);
                }

                /**
                 * Remove number input up & down button
                 */
                input::-webkit-inner-spin-button,
                input::-webkit-outer-spin-button {
                    appearance:         none;
                    -webkit-appearance: none;
                    margin: 0;
                }

                /**
                 * Custom scrollbar style
                 */
                ::-webkit-scrollbar {
                    width: 8px;
                }

                ::-webkit-scrollbar-track {
                    background: transparent;
                }

                ::-webkit-scrollbar-thumb {
                    background: hsl(0, 0%, 80%);
                    border-radius: 10px;
                }

                ::-webkit-scrollbar-thumb:hover {
                    background: hsl(0, 0%, 70%);
                }





                /*-----------------------------------*\
                  #MAIN STYLE
                \*-----------------------------------*/

                /**
                 * main container 
                 */

                .container {
                    max-width: 1440px;
                    min-height: 100vh;
                    margin: auto;
                    display: flex;
                    flex-direction: column;
                }

                .heading {
                    font-size: var(--fs-28);
                    font-weight: var(--fw-6);
                    color: var(--onyx);
                    border-bottom: 1px solid var(--gainsboro);
                    padding: 20px var(--px);
                    display:     flex;
                    align-items: center;
                    gap: 20px;
                }

                .heading ion-icon {
                    font-size: 40px;
                }

                .item-flex {
                    display: flex;
                    flex-grow: 1;
                }



                /**
                 * cart section style
                 */

                .cart {
                    width: 100%;
                    display:         flex;
                    flex-direction:  column;
                    justify-content: center;
                }

                .cart-item-box {
                    margin-top: 20px;
                    margin-bottom: auto;
                }

                .product-card:not(:last-child) {
                    margin-bottom: 20px;
                }

                .product-card {
                    padding: 10px;
                    background-color: #fff;
                    border: 1px solid #ccc;
                }

                .product-card .card {
                    position: relative;
                    display:     flex;
                    align-items: flex-start;
                    gap: 20px;
                }

                .card .product-img {
                    border-radius: var(--radius);
                }

                .card .detail .product-name {
                    font-weight: var(--fw-6);
                    font-size: var(--fs-20);
                    color: var(--dim-gray);
                    margin-bottom: 10px;
                }

                .card .detail .wrapper {
                    display: flex;
                    gap: 20px;
                    align-items: center;
                }

                .product-qty {
                    display:     flex;
                    align-items: center;
                    gap: 10px;
                }

                .product-qty button {
                    background: var(--platinum);
                    width:  30px;
                    height: 30px;
                    display:         flex;
                    justify-content: center;
                    align-items:     center;
                }

                .product-qty button:active,
                .product-close-btn:active ion-icon {
                    transform: scale(0.95);
                }

                .product-qty button ion-icon {
                    --ionicon-stroke-width: 60px;
                    font-size: 15px;
                }

                .product-close-btn {
                    position: absolute;
                    top:   0;
                    right: 0;
                }

                .product-close-btn ion-icon {
                    font-size: 25px;
                    color: var(--quick-silver);
                }

                .product-close-btn:hover ion-icon {
                    color: var(--red-salsa);
                }

                .discount-token {
                    padding: 40px var(--px);
                    border-top:    1px solid var(--gainsboro);
                    border-bottom: 1px solid var(--gainsboro);
                }

                .wrapper-flex {
                    display:     flex;
                    align-items: center;
                    gap: 30px;
                }

                .wrapper-flex input {
                    padding: 12px 15px;
                    font-weight: var(--fw-6);
                    letter-spacing: 2px;
                }

                .detail .price {
                    position: relative;
                    top: 0;
                    left: 0;
                }

                .sum {
                    font-size: 24px;
                }

                .btn-outline {
                    padding: 10px 25px;
                    border: 1px solid var(--orange);
                    color: var(--orange);
                }

                .btn-outline:hover {
                    background: var(--orange);
                    color: var(--white);
                }

                .btn-outline2 {
                    padding: 10px 25px;
                    border: 1px solid var(--orange);
                    /*background: var(--orange);*/
                    color: #fff;
                    align-self: center;
                }

                .btn-outline2:hover {
                    background: var(--orange);
                    color: var(--white);
                }

                .amount {
                    padding: 40px var(--px);
                }

                .amount > div {
                    display:         flex;
                    justify-content: space-between;
                }

                .amount > div:not(:last-child) {
                    margin-bottom: 10px;
                }

                .amount .total {
                    font-size: var(--fs-20);
                    font-weight: var(--fw-7);
                    color: var(--onyx);
                }

                .input-box input {
                    padding: 5px 5px;
                }




                /*-----------------------------------*\
                  #RESPONSIVE
                \*-----------------------------------*/

                @media (max-width: 1200px) {

                    .item-flex {
                        flex-direction: column-reverse;
                    }

                    /**
                     * checkout section responsive 
                     */

                    .checkout {
                        width: 100%;
                        border-right: none;
                    }

                    .btn-primary {
                        width: 100%;
                    }

                    /**
                     * cart section responsive
                     */

                    .cart {
                        display: grid;
                        /* grid-template-columns: 1fr 1fr; */
                        width: 100%;
                        border-bottom: 1px solid var(--gainsboro);
                    }

                    .cart .wrapper {
                        margin-top: auto;
                    }

                    .cart .cart-item-box {
                        border-right: 1px solid var(--gainsboro);
                        margin-bottom: 0;
                    }

                    .discount-token {
                        border-top: none;
                    }

                }





                @media (max-width: 768px) {

                    :root {
                        --px: 40px;
                    }

                    .cart {
                        grid-template-columns: 1fr;
                    }

                    .discount-token {
                        border-top: 1px solid var(--gainsboro);
                    }

                    .wrapper-flex {
                        gap: 20px;
                    }

                }





                @media (max-width: 567px) {

                    :root {
                        --px: 20px;
                    }

                    .payment-method,
                    .input-flex {
                        flex-direction: column;
                        gap: 20px;
                    }

                    .payment-method .method {
                        width: 100%;
                    }

                    .input-flex .expire-date,
                    .input-flex .cvv {
                        width: 100%;
                    }

                    .expire-date .input-flex {
                        flex-direction: row;
                    }

                }
            </style>




            <div class="item-flex">
                <!--
                  - cart section
                  
                -->
                <section class="cart">
                    <h1 class="heading">
                        <ion-icon name="cart-outline"></ion-icon> Giỏ hàng
                    </h1>

                    <div class="cart-item-box">

                        <!-- <h2 class="section-heading" style="font-size:20px; padding:10px;">Thứ tự</h2> -->

                        <?php
                        foreach ($data['carts'] as $cart) {
                            echo '
                  <div class="product-card">

                    <div class="card">
            
                      <div class="img-box">
                        <img src="' . $cart['product_image'] . '" alt="Pizza hải sản" width="180px" class="product-img">
                      </div>
            
                      <div class="detail" >
            
                        <h4 class="product-name"><b>Tên sản phẩm: </b>' . $cart['product_name'] . '</h4>
            
                        <div class="wrapper">
            
                          <div class="product-qty">
                            <span id="quantity" style="font-size:18px; padding:10px;"><b>Số lượng: </b>' . $cart['quatity'] . '</span>
                          </div>
            
                          <div class="price">
                            $ <span id="price"><b>Giá: </b>' . $cart['product_price'] . '</span>
                          </div>
            
                        </div>
            
                      </div>
            
                      <button class="product-close-btn" onclick="confirm_delete(' . $cart['id'] . ')">
                        <ion-icon name="close-outline"></ion-icon>
                      </button>
            
                    </div>
                </div>

              ';
                        }

                        echo '  <div>
                      <h4 class="sum">Tổng: ' . $data['sum'] . '</h4>
                  </div>';
                        ?>
                    </div>
                </section>

            </div>


            <section class="cart">
                <h1 class="heading">
                    <ion-icon name="cart-outline"></ion-icon> Đặt hàng
                </h1>
                <div style="padding: 10px;">
                    <form action="/webTech_eService/order/add" method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Họ tên:</span>
                                <input type="text" name="fullname" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Địa chỉ:</span>
                                <input type="text" name="address" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Số điện thoại:</span>
                                <input type="text" name="phonenumber" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Ghi chú:</span>
                                <input type="text" name="note" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Thời gian nhận:</span>
                                <input type="date" name="order_time" required>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-outline2" type="submit">Đặt hàng</button>
                        </div>
                    </form>

                </div>
            </section>


        </div>        <div style="height:220px;"></div>

        <?php require_once './mvc/Views/Blocks/user/Footer.php'; ?>

        <script>
<?php include './mvc/Views/User/js/cart.js' ?>
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>