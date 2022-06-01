<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/block.css">

    <title>Cập nhật sản phẩm</title>
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

body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}

</style>
    <div class="ct">Cập nhật sản phẩm</div>



            <div class="container-xl px-4 mt-4">

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Ảnh chụp</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile  mb-2" src="images/p-2.jpg" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG hoặc PNG </div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Tải ảnh lên</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputName">Tên sản phẩm</label>
                            <input class="form-control" id="inputName" type="text" placeholder="Nhập tên sản phẩm" value="Cake">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputCode">Mã sản phẩm</label>
                            <input class="form-control" id="inputCode" type="text" placeholder="Nhập mã sản phẩm" value="123456">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPrice">Giá sản phẩm</label>
                                <input class="form-control" id="inputPrice" type="text" placeholder="Nhập mã sản phẩm" value="50000">
                            </div>
                            <!-- Form Group (last name)-->
    
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Cập nhật</button>

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