<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/block.css">

    <title>Trang chủ</title>
</head>
<body>
    <?php
require_once "block/header.php";
?>

  <section>
      <div><style>
.ct {
    font-size: 30px;
    text-align:center;
    margin-bottom: 10px;
    margin-top: 10px;
    text-transform: uppercase;

}

.cc {
    font-size: medium;
    background-color: white ;
    align-items: center;
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    text-align: center;
}
.cc li {
    list-style: none;
}

</style>
    <div class="ct">Tổng quan</div>

        <div class="cc">
        

        
            <ul >
                <li>Tổng số người dùng : 300</li>
            </ul>
        
            <ul>
                <li>Tổng số món ăn : 30</li>
            </ul>
        </div>


        </div>        <div style="height:220px;"></div>
</section>


<?php
require_once "block/footer.php";
?>
    
    </body>
</html>