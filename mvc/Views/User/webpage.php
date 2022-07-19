<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Food4U</title>
                <!-- css file link -->
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/webpage.css">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/style.css">
        
    </head>
    <body>
    <?php require_once './mvc/Views/Blocks/user/Header.php'; ?>
    <!-- home starts -->

    <section class="home" id="home">
        <div class="content">
            <h3>Good food for you</h3>
            <p>Hân hạnh được gặp bạn. Chúng mình là Food4U, luôn đem đến những món ăn tươi ngon, tốt cho sức khỏe cho bạn. Hãy lựa chọn món ăn yêu thích và thưởng thức ngay thôi!!!</p>
            <a href="#gallery" class="btn">Order now</a>
        </div>

        <div class="image">
            <img src="/webTech_eService/mvc/Views/User/images/home-img.png" alt="">
        </div>
    </section>

    <!-- home ends -->

    <!-- speciality starts -->

    <section class="speciality" id="speciality">
        <h1 class="heading">Các món <span>Combo</span></h1>
        <div class="box-container">
            <?php 
            // if($mess = mysqli_fetch_array($data['message']))
            //    echo $mess;
            foreach($data['pizza'] as $pizza) {
                if ((int)$pizza['price_free_size'] !== 0) 
                    echo '<div class="price">'.$pizza['price_free_size'].' đ</div>';
                else 
                    echo '<div class="price">'.$pizza['price_s'].' đ</div>';
                echo '
                <a class="box" href="/webTech_eService/user/getProductInfo/'.$pizza['id'].'">
                    <img class = "image" src="'.$pizza['image'].'" alt="">
                    <div class="content">

                        <h3><img src="/webTech_eService/mvc/Views/User/images/s-1.png" alt="">'.$pizza['name'].'</h3>
                        <p>'.$pizza['description'].'</p>

                    </div>
                </a>
                ';
            }
            ?>
        </div>
    </section>
    
    <!-- speciality ends-->

    <!-- popularity starts -->
    <section class="popularity" id="popularity">
        <h1 class="heading">Các món <span>Pizza</span></h1>
        <div class="box-container">
            <?php 
            // if($mess = mysqli_fetch_array($data['message']))
            //    echo $mess;
            foreach($data['dessert'] as $dessert) {
                echo '
                <div class="box">
                    <img src="'.$dessert['image'].'" alt="" class="image">
                        ';
                if ((int)$dessert['price_free_size'] !== 0) 
                    echo '<div class="price">'.$dessert['price_free_size'].' đ</div>';
                else 
                    echo '<div class="price">'.$dessert['price_s'].' đ</div>';
                echo '
                    <h3>'.$dessert['name'].'</h3>
                    <p>'.$dessert['description'].'</p>
                    <a href="/webTech_eService/user/getProductInfo/'.$dessert['id'].'" class="btn">Chi tiết</a>
                </div>
                ';
            }
            ?>

        </div>
    </section>
    <!-- popularity ends -->

    <!-- gallery starts -->
    <section class="gallery" id="gallery">
        <h1 class="heading">Thực đơn <span>món ăn</span></h1>
        <div class="box-container">
            <?php 
            // if($mess = mysqli_fetch_array($data['message']))
            //    echo $mess;
            foreach($data['product'] as $product) {
                echo '
                <div class="box">
                    <div class="img">
                        <img src="'.$product['image'].'" alt="" class="image">';
                if ((int)$product['price_free_size'] !== 0) 
                    echo '<div class="price">'.$product['price_free_size'].' đ</div>';
                else 
                    echo '<div class="price">'.$product['price_s'].' đ</div>';
                echo '
                    </div>
                    <div class="content">
                        <h3>'.$product['name'].'</h3>
                        <p>'.$product['description'].'</p>
                        <a href="/webTech_eService/user/getProductInfo/'.$product['id'].'" class="btn">Chi tiết</a>
                    </div>
                </div>  
                ';
            }
            ?>
        </div>
    </section>
    <!-- gallery ends -->

    <!-- review starts -->
    <section class="review" id="review">
        <h1 class="heading"><span>Nhân viên</span> của cửa hàng</h1>
        <div class="box-container">
            <div class="box">
                <img src="/webTech_eService/mvc/Views/User/images/Vu.jpg" alt="" class="images">
                <h3>Nguyen Quang Vu</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe minima amet sint, reprehenderit cupiditate vel nobis, odit omnis illum et eum obcaecati. Aut aspernatur optio aliquam esse, odio vel sapiente?</p>
            </div>

            <div class="box">
                <img src="/webTech_eService/mvc/Views/User/images/Cuong.jpg" alt="" class="images">
                <h3>Le Manh Cuong</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe minima amet sint, reprehenderit cupiditate vel nobis, odit omnis illum et eum obcaecati. Aut aspernatur optio aliquam esse, odio vel sapiente?</p>
            </div>
           
            <div class="box">
                <img src="/webTech_eService/mvc/Views/User/images/Khang.jpg" alt="" class="images">
                <h3>Pham Cong Khang</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe minima amet sint, reprehenderit cupiditate vel nobis, odit omnis illum et eum obcaecati. Aut aspernatur optio aliquam esse, odio vel sapiente?</p>
            </div>

            <div class="box">
                <img src="/webTech_eService/mvc/Views/User/images/Huyen.jpg" alt="" class="images">
                <h3>Do Thi Ngoc Huyen</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe minima amet sint, reprehenderit cupiditate vel nobis, odit omnis illum et eum obcaecati. Aut aspernatur optio aliquam esse, odio vel sapiente?</p>
            </div>
        </div>
    </section>
    <!-- review ends -->
    
    <?php require_once './mvc/Views/Blocks/user/Footer.php'; ?>
    
    </body>
</html>
