<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/block.css">

    <title>Thông tin sản phẩm</title>
</head>
<body>
    <?php
require_once "block/header.php";
?>

  <section>
      <div><style>
/* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100%;
  width: 100%;
  background: #fff;
  align-items: center;
  justify-content: center;
}
.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: orange;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: orange;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: orange;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}



</style>

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Người làm</div>
          <div class="text-one">Admin12</div>
          <div class="text-two">Trần Văn B</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Thời gian</div>
          <div class="text-one">Thứ 4, 13/7/2022</div>
          <div class="text-two">14:30:00</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Địa điểm</div>
          <div class="text-one">Của hàng Pizza</div>
          <div class="text-two">Số 8 Đại Cồ Việt</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Thông tin sản phẩm</div>
        <p>Thay đổi thông tin sản phẩm.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Pizza Hải Sản Xốt Tiêu Đen">
        </div>

        <div class="input-box">
          <input type="text" placeholder="PZ1289">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Pizza Truyền Thống">
        </div>
        <div class="input-box">
          <input type="text" placeholder="130000">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Pizza Hải Sản Xốt Tiêu Đen bao gồm Tôm, Mực, Thanh Cua, Hành Tây, Thơm Phủ Xốt Tiêu Đen Thơm Nóng Và Phô Mai Mozzarella">
        </div>
        <div class="button">
          <input type="button" value="Cập Nhật" >
        </div>
        <div class="button">
          <input type="button" value="Xóa sản phẩm" >
        </div>
      </form>
    </div>
    </div>
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