<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/block.css">

    <title>Chi tiết hóa đơn</title>
</head>
<body>
    <?php
require_once "block/header.php";
?>

  <section>
      <div><style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  width: 100%;
  height: 100vh;
  align-items: center;
  justify-content: center;
  background: #e6e6e6;
}
::selection{
  background: #fee6eb;
}
body:before{
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  clip-path: circle(55% at right 30%);
  background: #e6e6e6;
  background-image: linear-gradient( 0deg,  #d0f9fb 10%, #10b3bc 100%);
}
.container{
  display: flex;
  max-width: 750px;
  background: #fff;
  border-radius: 12px;
  justify-content: space-between;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
  position: relative;
}
.container::before{
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  clip-path: circle(65% at right 35%);
}
.container .box.one{
  padding: 35px 5px 0px 35px;
}
.box.one .details .topic{
  font-size: 30px;
  font-weight: 500;
}
.box.one .details p{
  color: #737373;
  font-size: 13px;
  font-weight: 500;
}
.box.one .rating{
  color: #fd9bb0;
  font-size: 14px;
  margin-top: 10px;
}
.box.one .price-box{
  margin-top: 16px;
}
.box.one .discount{
  font-size: 20px;
  margin: 10px 0 0 12px;
  position: relative;
  color: #737373;
}
.box.one .discount:before{
  content: '';
  position: absolute;
  height: 1px;
  width: 100px;
  background: #737373;
  top: 50%;
  left: -8px;
}
.box.one .price{
  color: #fc6989;
  font-size: 30px;
}
.box.one .button1{
  margin-top: 55px;
}
.box.one .button1 button{
  outline: none;
  border:none;
  padding: 8px 16px;
  border-radius: 6px;
  font-size: 18px;
  font-weight: 500;
  color: #fff;
  background: #00e6e6;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button1 button:hover{
  transform: scale(0.98);
}
.container .box.two .image{
  position: relative;
  right: 0
  top: 0;
  height: 340px;
  width: 430px;
}
.image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.container .box.two .image-box{
  position: relative;
  text-align: right;
  right: 0;
  bottom: 27px;
}
.box.two .image-box .info{
  margin: 0 35px 0 0;
}
.box.two .info .brand{
 font-size: 17px;
 font-weight: 600;
 color: #c9032e;
}
.box.two .info .name{
 font-size: 20px;
 font-weight: 500;
 color: #fff;
}
.box.two .info .shipping{
 font-size: 14px;
 font-weight: 400;
 color: #000;
}
.box.two .button2{
  margin: 17px 0;
}
.button2 button{
  outline: none;
  color: #fff;
  border: 1px solid #fff;
  border-radius: 12px;
  padding: 8px 17px;
  background: transparent;
  font-size: 15px;
  font-weight: 400;
  cursor: pointer;
}

</style>

  <div class="container">
    <div class="box one">
      <div class="details">
        <div class="topic">Mã Đơn BP1058</div>
        <p>Khách hàng: anhsao123 </p>
            <p>SĐT: 0987654321</p>
            <p>Địa chỉ: Số 10 Vũ Trọng Phụng</p>
            <p>Thời gian: 16/7/2022 13:40:00</p>
            <p>Sản phẩm:</p>
            <p>1. Pizza Hawaiian. SL: 1. 110000 </p>
            <p>2. Pizza Thập Cẩm. SL: 1. 130000 </p>
            <p>3. Pizza Pepperoni. SL: 2. 220000 </p>
            <p>4. Pizza Rau Củ (Xốt Cà Chua). SL: 2. 160000 </p>
            <p>Voucher: Giảm 80000</p>
            <p>Tổng</p>

        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
          <div class="price-box">
            <div class="discount">$620000</div>
            <div class="price">Còn: $540000</div>
          </div>
      </div>
      <div class="button1">
        <button>Xác nhận</button>
        <button>Hủy</button>
      </div>
    </div>

  </div>

                            
        </div>        <div style="height:220px;"></div>
</section>


<?php
require_once "block/footer.php";
?>
    
    </body>
</html>