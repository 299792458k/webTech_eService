<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      <?php include './mvc/Views/Admin/styles/block.css' ?>
    </style>
    <script>
      <?php include './mvc/Views/Admin/js/scripts.js' ?>
    </script>

    <title>Danh sách hóa đơn</title>
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
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: whitesmoke;
}
.content{
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

    <div class="content">
      <!-- <div class="card one">
        <div class="top">
          <div class="title">Đặt Thành Công</div>
          <div class="title">B1058</div>


        </div>
        <div class="info">Thông tin hóa đơn</div>
        <div class="details">
          <div class="one">
            <span>Khách hàng: anhsao123 </span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>SĐT: 0987654321</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Thời gian: 16/7/2022 13:40:00</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Tổng: 540000</span>
            <i class="fas fa-check"></i>
          </div>
          <button>Xem chi tiết</button>
        </div>
      </div>
      <div class="card two">
      <div class="top">
          <div class="title">Đã Hủy</div>
          <div class="title">B1055</div>


        </div>
        <div class="info">Thông tin hóa đơn</div>
        <div class="details">
          <div class="one">
            <span>Khách hàng: anhsao123 </span>
            <i class="fas fa-times"></i>
          </div>
          <div class="one">
            <span>SĐT: 0987654321</span>
            <i class="fas fa-times"></i>
          </div>
          <div class="one">
            <span>Thời gian: 16/7/2022 13:40:00</span>
            <i class="fas fa-times"></i>
          </div>
          <div class="one">
            <span>Tổng: 540000</span>
            <i class="fas fa-times"></i>
          </div>
          <button>Xem chi tiết</button>
        </div>
      </div> -->
      <?php
          foreach($data['orders'] as $product) {
            echo '
            <div class="card three">
            <div class="top">
                <div class="title">Chờ Xác Nhận</div>
                <div class="title">B1057</div>
      
      
              </div>
              <div class="info">Thông tin hóa đơn</div>
              <div class="details">
                <div class="one">
                  <span>Khách hàng: '.$product['fullname'].' </span>
                  <i class="fas fa-check"></i>
                </div>
                <div class="one">
                  <span>SĐT: '.$product['phonenumber'].'</span>
                  <i class="fas fa-check"></i>
                </div>
                <div class="one">
                  <span>Thời gian: '.$product['order_time'].'</span>
                  <i class="fas fa-times"></i>
                </div>
                <div class="one">
                  <span>Địa chỉ: '.$product['address'].'</span>
                  <i class="fas fa-times"></i>
                </div>
                <button><a href="/webTech_eService/order/billShow/'.$product['id'].'">Xem chi tiết</a></button>
              </div>
            </div>
            ';
          }
      ?>
      
    </div>


                            
        </div>        <div style="height:220px;"></div>
</section>


<?php
require_once "block/footer.php";
?>
    
    </body>
</html>