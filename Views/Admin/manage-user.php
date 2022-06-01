<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/block.css">

    <title>Người dùng</title>
</head>
<body>
    <?php
require_once "block/header.php";
?>

  <section>

  <article>


        <div class="">



        <style>
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
 th, td {
  border-bottom: 1px solid;
  border-color: #ff6600;
  padding: 15px;
  align-items: center;
}
.tabletitle {
    font-size: medium;
    color: #fff;
    background-color: #ff6600;
    width: 150px;
    height: 40px;
    align-items: center;
    text-align:center;
    padding: 10px;
    border: #fff;
    border-radius: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    text-transform: uppercase;

}
/* manage button  */

.viewbutton {
    font-size: medium;
    color: #fff;
    background-color: rgb(69, 119, 226);
    width: 150px;
    height: 40px;
    align-items: center;
    padding: 10px;
    border: #fff;
    border-radius: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    text-transform: uppercase;
    text-align: center;
}

.editbutton {
    font-size: medium;
    color: #fff;
    background-color: #666;
    width: 150px;
    height: 40px;
    align-items: center;
    padding: 5px;
    border: #fff;
    border-radius: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    text-transform: uppercase;
    text-align: center;

}

.deletebutton {
    font-size: medium;
    color: #fff;
    background-color: rgb(255, 77, 77);
    width: 150px;
    height: 40px;
    align-items: center;
    padding: 5px;
    border: #fff;
    border-radius: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    text-transform: uppercase;
    text-align: center;

}
.deletebutton,
.viewbutton,
.editbutton{
    text-decoration:none
}
</style>
<div class="ct">Người dùng</div>

<table style="width:100%" class="">
    <tr class="tabletitle">
        <th>STT</th>
        <th>Họ và tên </th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Ngày sinh</th>
        <th>Sửa/ Xóa</th>
    </tr>

        <tr>
        <td><?php echo 1; ?></td>
        <td> <?php echo 'name' ; ?></td>

        <td><?php echo 'email'; ?></td>
        <td> <?php echo '0988268368' ; ?></td>
        <td><?php echo 'dob'; ?></td>
        <td>   <?php 
                $edit_icon = "<a href='edit-user.php' class='editbutton'> edit </a>";
                $delete_icon = " <a href='#' id='bin' class='deletebutton'> delete</a>";
                echo $edit_icon . $delete_icon;
            ?>
        </td>

     </tr>
    </table>



</div>

<div style="height:400px;">
    </div>
</article>
</section>


<?php
require_once "block/footer.php";
?>
    
    </body>
</html>