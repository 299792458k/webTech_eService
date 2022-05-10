<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './mysql.php';
        $name = $_GET['name'];
        $SQLcmd = "UPDATE $table_name SET Numb=Numb-1 WHERE Product_desc='$name'";
                print $SQLcmd;
        if ($connect->connect_error) {
            die ("Cannot connect to $server using $user");
        } else {
            $result = $connect->query($SQLcmd);
        }
        echo "<br><br>";
        include_once './display.php';
        ?>
    </body>
</html>
