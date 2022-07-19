<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/chitietsp.css">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/style.css">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/alertmessage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title></title>
    </head>
    <body>
        <!-- food -->
        <?php require_once './mvc/Views/Blocks/user/Header.php'; ?>
        <form id="add_form" action="/webTech_eService/detail/addproduct" method="POST">
            <section class="food" id="food">
                <h1 class="heading">Chi tiết <span>sản phẩm</span></h1>
                <div id="alert" class="alert" style="display: none;">
                    <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span>
                    Hãy chọn đầy đủ thông tin.
                </div>
                <?php
                // if($mess = mysqli_fetch_array($data['message']))
                //    echo $mess;

                $product = mysqli_fetch_array($data['product']);
                echo '<input type="hidden" name="product_image" value="' . $product['image'] . '">';
                echo '<input type="hidden" name="product_name" value="' . $product['name'] . '">';
                echo '
                <div class="box-container">
                    <div class="box">
                         <img src="' . $product['image'] . '" alt="" class="images">
                    </div>

                    <div class="box">
                        <div class="information">
                            <h3>' . $product['name'] . '</h3>
                            <div class="infor">
                                <p>Mô tả: </p>
                                <p>' . $product['description'] . '</p>
                                ';
                if ((int) $product['price_free_size'] !== 0) {
                    echo '
                            <div class="cost">Đơn giá: ' . $product['price_free_size'] . ' đ</div>
                            <input type="hidden" name="product_price" value="' . $product['price_free_size'] . '">
                            <input id="product_size" type="hidden" name="product_size" value="free_size">
                    ';
                } else {
                    echo '
                            <div class="cost">
                                <ul class="ingredient">Đơn giá:
                                    <li>Size S: ' . $product['price_s'] . ' đ</li>
                                    <li>Size M: ' . $product['price_m'] . ' đ</li>
                                    <li>Size L: ' . $product['price_l'] . ' đ</li>
                                </ul>
                            </div>

                            <div class="size-container">
                                <p>Size:</p>
                                <div class="size">
                                    <input type="radio" id="product_price_s" name="product_price" value="' . $product['price_s'] . '" required>
                                    <label for="html">S</label><br>
                                </div>
                                <div class="size">
                                    <input type="radio" id="product_price_m" name="product_price" value="' . $product['price_m'] . '">
                                    <label for="html">M</label><br>
                                </div>
                                <div class="size">
                                    <input type="radio" id="product_price_l" name="product_price" value="' . $product['price_l'] . '">
                                    <label for="html">L</label><br>
                                </div>
                            </div>
                            <input id="product_size" type="hidden" name="product_size">
                    ';
                }
                ?>
                
                            <div class="quantity">
                                <label for="">Số lượng:</label>
                                <input type="number" id="quatity" name="quatity" min="1" required>
                            </div>

                        </div>

                        <div class="btn-container">
                            <button id="add-btn" onclick="submitAddForm()" class="btn" >Thêm vào giỏ</button>
                            <a href="" class="btn" id="buy-btn">Mua ngay</a>
                        </div>

                    </div>
                </div>
                
            </div>
            

            </section>
        </form>
        <!-- food ends -->
        <?php require_once './mvc/Views/Blocks/user/Footer.php'; ?>
        <!-- js file link -->
        <script>
            function submitAddForm() {
                var checked = false;
                var form = document.getElementById("add_form");
                if (document.getElementById("product_price_s").checked) {
                    document.getElementById("product_size").value = "S";
                    checked = true;
                } else if (document.getElementById("product_price_m").checked) {
                    document.getElementById("product_size").value = "M";
                    checked = true;
                } else if (document.getElementById("product_price_l").checked) {
                    document.getElementById("product_size").value = "L";
                    checked = true;
                }
                if (document.getElementById("quatity").value === "") checked = false;
                if (checked){
                    form.submit();
                }
                else{
                    document.getElementById("alert").style.display = 'block';
                }
            }
            ;
        </script>
    </body>
</html>
