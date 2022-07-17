<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chitietsp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Lịch sử đặt hàng</title>
</head>
<body>
    <!-- header starts -->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food4U</a>
            
        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Trang chủ</a>
            <a href="#speciality">Đặc biệt</a>
            <a href="#popularity">Phổ biến</a>
            <a href="#gallery">Thực đơn</a>
            <a href="#review">Đánh giá</a>
            <a href="#order">Giỏ</a>
            <a href="">Đăng nhập</a>
        </nav>
    </header>

  <section>
<div style="height:100px;"></div>

      <div><style>
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

html { font-family: 'Source Sans 3', sans-serif; }

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

ion-icon, span { display: inline-block; }

label, img { display: block; }

input {
  font: inherit;
  width: 100%;
  border: none;
}

input:focus { outline: 2px solid var(--orange); }

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
::-webkit-scrollbar { width: 8px; }

::-webkit-scrollbar-track { background: transparent; }

::-webkit-scrollbar-thumb {
  background: hsl(0, 0%, 80%);
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover { background: hsl(0, 0%, 70%); }





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

.heading ion-icon { font-size: 40px; }

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
  justify-content: flex-end;
}

.cart-item-box {
  padding: 40px var(--px);
  margin-bottom: auto;
}

.product-card:not(:last-child) { margin-bottom: 20px; }

.product-card .card {
  position: relative;
  display:     flex;
  align-items: flex-start;
  gap: 20px;
}

.card .product-img { border-radius: var(--radius); }

.card .detail .product-name {
  font-weight: var(--fw-6);
  font-size: var(--fs-20);
  color: var(--dim-gray);
  margin-bottom: 10px;
}

.card .detail .wrapper {
  display: flex;
  gap: 20px;
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
.product-close-btn:active ion-icon { transform: scale(0.95); }

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

.product-close-btn:hover ion-icon { color: var(--red-salsa); }

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
  background: var(--orange);
  color: var(--white);
}

.btn-outline2:hover {
  background: var(--orange);
  color: var(--white);
}

.amount { padding: 40px var(--px); }

.amount > div {
  display:         flex;
  justify-content: space-between;
}

.amount > div:not(:last-child) { margin-bottom: 10px; }

.amount .total {
  font-size: var(--fs-20);
  font-weight: var(--fw-7);
  color: var(--onyx);
}





/*-----------------------------------*\
  #RESPONSIVE
\*-----------------------------------*/

@media (max-width: 1200px) {

  .item-flex { flex-direction: column-reverse; }

  /**
   * checkout section responsive 
   */

  .checkout {
    width: 100%;
    border-right: none;
  }

  .btn-primary { width: 100%; }

  /**
   * cart section responsive
   */

  .cart {
    display: grid;
    grid-template-columns: 1fr 1fr;
    width: 100%;
    border-bottom: 1px solid var(--gainsboro);
  }

  .cart .wrapper { margin-top: auto; }

  .cart .cart-item-box {
    border-right: 1px solid var(--gainsboro);
    margin-bottom: 0;
  }

  .discount-token { border-top: none; }

}





@media (max-width: 768px) {

  :root { --px: 40px; }

  .cart { grid-template-columns: 1fr; }

  .discount-token { border-top: 1px solid var(--gainsboro); }

  .wrapper-flex { gap: 20px; }

}





@media (max-width: 567px) {

  :root { --px: 20px; }

  .payment-method,
  .input-flex {
    flex-direction: column;
    gap: 20px;
  }

  .payment-method .method { width: 100%; }

  .input-flex .expire-date,
  .input-flex .cvv { width: 100%; }

  .expire-date .input-flex { flex-direction: row; }

}
</style>


<h1 class="heading">
  <ion-icon name="cart-outline"></ion-icon> Giỏ hàng
</h1>

<div class="item-flex">




  <!--
    - cart section
  -->
  <section class="cart">

    <div class="cart-item-box">

      <!-- <h2 class="section-heading" style="font-size:20px; padding:10px;">Thứ tự</h2> -->

      <div class="product-card">

        <div class="card">

          <div class="img-box">
            <img src="./images/p-1.jpg" alt="Pizza hải sản" width="180px" class="product-img">
          </div>

          <div class="detail" >

            <h4 class="product-name">Pizza hải sản</h4>

            <div class="wrapper">

              <div class="product-qty">
                <button id="decrement">
                  <ion-icon name="remove-outline"></ion-icon>
                </button>

                <span id="quantity" style="font-size:18px; padding:10px;">2</span>

                <button id="increment">
                  <ion-icon name="add-outline"></ion-icon>
                </button>
              </div>

              <div class="price">
                $ <span id="price">150000</span>
              </div>

            </div>

          </div>

          <button class="product-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

      </div>

      <div class="product-card">

        <div class="card">

          <div class="img-box">
            <img src="images/g-1.jpg" alt="Product1" width="180px" class="product-img">
          </div>

          <div class="detail">

            <h4 class="product-name">Hamburger gà</h4>

            <div class="wrapper">

              <div class="product-qty">
                <button id="decrement">
                  <ion-icon name="remove-outline"></ion-icon>
                </button>

                <span id="quantity" style="font-size:20px; padding:10px;">1</span>

                <button id="increment">
                  <ion-icon name="add-outline"></ion-icon>
                </button>
              </div>

              <div class="price">
                $ <span id="price">30000</span>
              </div>

            </div>

          </div>

          <button class="product-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

      </div>

    </div>

    <div class="wrapper">

      <div class="discount-token">



        <div class="wrapper-flex">

          <input type="text" name="discount-token" id="discount-token" class="input-default" placeholder="Nhập mã giảm giá" >

          <button class="btn btn-outline" style="width:160px;">Áp dụng</button>

        </div>

      </div>

      <div class="amount" style="font-size:16px; ">

        <div class="subtotal" >
          <span>Sản phẩm</span> <span><span id="subtotal">330000</span></span>
        </div>

        <div class="tax">
          <span>Thuế (5%)</span> <span><span id="tax"></span>0</span>
        </div>

        <div class="shipping">
          <span>Tiền vận chuyển</span> <span> <span id="shipping">0</span></span>
        </div>

        <div class="total">
          <span>Tổng</span> <span><span id="total">415000</span></span>
        </div>

      </div>

    </div>
    

  </section>
  

</div>


<div style="   position: absolute;
  right: 0px;
  width: 50%;
  padding: 10px;">
<button class="btn btn-outline2" >Đặt hàng</button>

</div>


                         
        </div>        <div style="height:220px;"></div>
</section>

    <!-- footer starts -->
    <section class="footer" id="footer">
        <a href="" class="logo">
            <i class="fas fa-utensils"></i>Food4U
            <h3>Hân hạnh được phục vụ <span>bạn!</span></h3>
        </a>
        <div class="content">
            <div class="website">
                <h1>Our <span>website:</span> </h1>
                <a href="" class="btn">facebook</a>
                <a href="" class="btn">instagram</a>
                
            </div>
        </div>
    </section>
    <!-- footer ends -->

    <!-- js file link -->
<!--
- custom js link
-->
<script src="js/cart.js"></script>

<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   </header>
</body>
</html>