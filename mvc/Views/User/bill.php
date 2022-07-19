<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      <?php include './mvc/Views/User/styles/header.css' ?>
    </style>
    <script>
      <?php include './mvc/Views/User/js/scripts.js' ?>
    </script>

    <title>Chi tiết hóa đơn</title>
</head>
<body>
    <?php require_once './mvc/Views/Blocks/user/Header.php'; ?>
  <section>
      <div style="display:flex; justify-content:center; align-items:center; height: 80vh;">
        <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  font-size: 20px;
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
  justify-content: center;
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
  padding: 35px 35px 35px 35px;
}
.box.one .details .topic{
  font-size: 30px;
  font-weight: 500;
}
.box.one .details p{
  color: #737373;
  font-size: 16px;
  font-weight: 500;
  line-height: 30px;
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
  right: 0;
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
 font-size: 20px;
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
        <?php
          $sum = 0;
          foreach ($data['order'] as $product) {
            echo '
            <div class="topic">Mã Đơn: '.$product['id'].' </div>
            <p>Khách hàng:  '.$product['fullname'].'</p>
            <p>SĐT: '.$product['phonenumber'].'</p>
            <p>Địa chỉ: '.$product['address'].'</p>
            <p>Thời gian: '.$product['order_time'].'</p>
            <p>Sản phẩm:</p> '; 
          
            $items = [];
            if(array_key_exists($product['id'], $data['detail'])){
                $items = $data['detail'][$product['id']];
                foreach ($items as $item) {
                    $sum += $item['quatity'] * $item['product_price'];
                    echo '<p>'.$item['product_name']. " ---- SL: " .$item['quatity']."</p>";
                }
              }
            
            echo '
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
                  <p>Tổng: '.$sum.' vnđ</p>
                  </div>
                  
                  <div class="button1">
                    <button><a href="/webTech_eService/order/history" style="text-decoration: none;">Thoát</a></button>
                  </div>
            ';
          };
          

        ?>
    </div>

  </div>

                            
</section>
        <?php require_once './mvc/Views/Blocks/user/Footer.php'; ?>

<script>
    function confirm_delete(href) {
      if (confirm("Đã hoàn thành đơn hàng?") == true) {
        window.location.href = "http://localhost/webTech_eService/order/update/"+href;
      } else {
//        text = "You canceled!";
      }
    }
</script>
    
    </body>
</html>