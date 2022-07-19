<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/Admin/styles/style.css">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/Admin/styles/block.css">
        <link rel="stylesheet" href="/webTech_eService/mvc/Views/User/css/alertmessage.css">

        <title>Cập nhật sản phẩm</title>
    </head>
    <body>
        <?php
        require_once "./mvc/Views/Blocks/admin/header.php";
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
                        height: fit-content;
                        width: 100%;
                        margin: 12px 0;
                    }
                    .right-side .input-box img,
                    .right-side .input-box select,
                    .right-side .input-box input,
                    .right-side .input-box textarea{
                        height: 100%;
                        width: 100%;
                        border: none;
                        outline: none;
                        font-size: 16px;
                        background: #F0F1F8;
                        border-radius: 6px;
                        padding: 15px 15px;
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
                    .right-side .input-box #image {
                        height: 25rem;
                        width: 50%;
                        object-fit: contain;
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
                            <!-- Thông báo -->
                            <?php
                                if (isset($_SESSION['status'])){
                                    $status = $_SESSION['status'];
                                    if ($status === "success") {
                                        echo '
                                            <div class="alert success">
                                                <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                                                Cập nhật thành công.
                                            </div>';
                                    } else if ($status === "fail") {
                                        echo '
                                            <div class="alert">
                                                <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                                                Không thành công.
                                            </div>';
                                    }
                                    unset($_SESSION['status']);
                                }

                                
                            ?>
                            <!-- end -->
                            <form id="form" action="/webTech_eService/product/update" method="POST" enctype="multipart/form-data">
                                <?php $product = mysqli_fetch_array($data['product']); ?>
                                <input type="hidden" id="id" name="id" value="<?php echo "" . $product["id"] ?>">

                                <div class="input-box">
                                    <img id="image" src="<?php echo $product["image"] ?>" alt="">
                                    <!-- Profile picture upload button-->
                                    <input id="image-input" class="button" onchange="loadImage(event)" accept="image/*" type="file" name="image-input" required>
                                </div>

                                <div class="input-box">
                                    <label class="small mb-1" for="inputCategory">Nhập tên sản phẩm:</label>
                                    <input type="text" placeholder="Nhập tên sản phẩm" name="name" value="<?php echo $product["name"] ?>" type="text" required>
                                </div>
                                <div class="input-box">
                                    <label class="small mb-1" for="inputCategory">Chọn loại món ăn:</label>
                                    <select class="form-control" id="inputCategory" name="category_id">
                                        <?php
                                        while ($row = mysqli_fetch_array($data['categories'])) {
                                            if ($row["id"] == $product["category_id"]) {
                                                echo "<option selected value='" . $row["id"] . "'>" . $row["title"];
                                            } else {
                                                echo "<option value='" . $row["id"] . "'>" . $row["title"];
                                            }
                                        }
                                        ?>

                                    </select>

                                </div>

                                <div class="input-box">
                                    <label class="small mb-1" for="inputStatus">Chọn loại trạng thái:</label>
                                    <select class="form-control" id="inputStatus" name="status_id">
                                        <?php
                                        while ($row = mysqli_fetch_array($data['status'])) {
                                            if ($row["id"] == $product["status_product_id"]) {
                                                echo "<option selected value='" . $row["id"] . "'>" . $row["status"];
                                            } else {
                                                echo "<option value='" . $row["id"] . "'>" . $row["status"];
                                            }
                                        }
                                        ?>

                                    </select>

                                </div>

                                <div class="input-box">
                                    <label class="small mb-1" for="inputCategory">Nhập giá tiền freesize (sản phẩm không có các size khác nhau):</label>
                                    <input id="inputPrice" name="price_free_size" value="<?php echo $product["price_free_size"] ?>" type="number" required>
                                </div>
                                <div class="input-box">
                                    <label class="small mb-1" for="inputCategory">Nhập giá tiền size S:</label>
                                    <input placeholder="Nhập giá tiền size S" id="inputPrice" name="price_s" value="<?php echo $product["price_s"] ?>" type="number" required>
                                </div>

                                <div class="input-box">
                                    <label class="small mb-1" for="inputCategory">Nhập giá tiền size M:</label>
                                    <input placeholder="Nhập giá tiền size M" id="inputPrice" name="price_m" value="<?php echo $product["price_m"] ?>" type="number" required>
                                </div>
                                <div class="input-box">
                                    <label class="small mb-1" for="inputCategory">Nhập giá tiền size L:</label>
                                    <input placeholder="Nhập giá tiền size L" id="inputPrice" name="price_l" value="<?php echo $product["price_l"] ?>" type="number" required>
                                </div>
                                <div class="input-box">
                                    <label class="small mb-1" for="inputCategory">Nhập mô tả sản phẩm:</label>
                                    <input placeholder="Nhập mô tả sản phẩm" id="inputDes" name="description" value="<?php echo $product["description"] ?>" required>
                                </div>
                                <div class="button">
                                    <input type="button" onclick="submitForm()" value="Cập Nhật" >
                                </div>
                                <div class="button">
                                    <input type="button" onclick="confirm_delete(<?php echo $product["id"]?>)" value="Xóa sản phẩm" >
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
        require_once "./mvc/Views/Blocks/admin/footer.php";
        ?>

<script>
    function submitForm() {
        document.getElementById('form').submit();
    }
    ;
    var loadImage = function (event) {
        var output = document.getElementById('image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src); // free memory
        }
    };
    function confirm_delete(href) {
        if (confirm("Bạn có chắc chắn muốn xóa?") == true) {
            window.location.href = "/webTech_eService/product/deleteProduct/" + href;
        } else {
//        text = "You canceled!";
        }
    }
</script>

</body>
</html>