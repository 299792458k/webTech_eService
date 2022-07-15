<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/block.css">

    <title>Danh sách sản phẩm</title>
</head>
<body>
    <?php
require_once "block/header.php";
?>

  <section>
      <div><style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
::selection{
  background: orange;
  color: #fff;
}
html,body{
  display: grid;
  height: 100%;
  background: whitesmoke;
}
.container{
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  padding: 20px;
}
.container .box{
  width: calc(33% - 10px);
  background: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px 30px;
  border-radius: 5px;
}
.box .quote i{
margin-top: 10px;
font-size: 45px;
color: #17c0eb
}
.container .box .image{
  margin: 10px 0;
  height: 150px;
  width: 150px;
  background: orange;
  padding: 3px;
  border-radius: 50%;
}
.box .image img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #fff;
}
.box p{
  text-align: justify;
  margin-top: 8px;
  font-size: 16px;
  font-weight: 400;
}
.box .name_job{
  margin: 10px 0 3px 0;
  color: orange;
  font-size: 18px;
  font-weight: 600;
}
.rating i{
  font-size: 18px;
  color: orange;
  margin-bottom: 5px;
}
.btns{
  margin-top: 20px;
  margin-bottom: 5px;
  display: flex;
  justify-content: space-between;
  width: 100%;
}
.btns button{
  background: orange;
  width: 100%;
  padding: 9px 0px;
  outline: none;
  border: 2px solid orange;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  font-weight: 400;
  color: orange;
  transition: all 0.3s linear;
}
.btns button:first-child{
  background: none;
  margin-right: 5px;
}
.btns button:last-child{
  color: #fff;
  margin-left: 5px;
}
.btns button:first-child:hover{
  background: orange;
  color: #fff;
}
.btns button:hover{
  color: #fff;
}
@media (max-width:1045px){
  .container .box{
    width: calc(50% - 10px);
    margin-bottom: 20px;
  }
}
@media (max-width:710px){
  .container .box{
    width: 100%;
  }
}


</style>

    <div class="container">
      <div class="box">
      <div class="image">
         <!-----<img src="img1.jpeg">------->
        </div>
        <div class="name_job">Pizza Thịt Và Xúc Xích</div>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p> Pizza Thịt Và Xúc Xích Thơm Ngon Và Giàu Protein Với Thịt Xông Khói, Xúc Xích, ThịT Bò, Giăm Bông Và Pepperoni.</p>
        <div class="btns">
          <button>Xem</button>
          <button>Xóa</button>
        </div>
      </div>
      <div class="box">
        <div class="image">
        <!------  <img src="img2.jpeg" alt="">--->
        </div>
        <div class="name_job">Pizza Thịt Và Xúc Xích</div>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p> Pizza Thịt Và Xúc Xích Thơm Ngon Và Giàu Protein Với Thịt Xông Khói, Xúc Xích, ThịT Bò, Giăm Bông Và Pepperoni.</p>
        <div class="btns">
          <button>Xem</button>
          <button>Xóa</button>
        </div>
      </div>
      <div class="box">
        <div class="image">
         <!---- <img src="img3.jpeg" alt="">---->
        </div>
        <div class="name_job">Pizza Thịt Và Xúc Xích</div>
          <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p> Pizza Thịt Và Xúc Xích Thơm Ngon Và Giàu Protein Với Thịt Xông Khói, Xúc Xích, ThịT Bò, Giăm Bông Và Pepperoni.</p>
        <div class="btns">
          <button>Xem</button>
          <button>Xóa</button>
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