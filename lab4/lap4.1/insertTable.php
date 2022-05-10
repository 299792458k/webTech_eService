<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Table</title>
    </head>
    <body>
    <?php
        $server = 'localhost:3307';
        $user = 'root';
        $pass = '';
        $mydb = 'mydatabase';
        $table_name = 'Products';
        $connect = mysqli_connect($server, $user, $pass);
        if (!$connect) {
            die ("Cannot connect to $server using $user");
        } else {
            $des = $_GET['description'];
            $weight = $_GET['weight'];
            $cost = $_GET['cost'];
            $num = $_GET['number'];
            $SQLcmd = "INSERT INTO $table_name (Product_desc, Cost, Weight, Numb) VALUES('$des', $weight, $cost, $num)";
            print($SQLcmd);
            mysqli_select_db($connect, $mydb);
            if (mysqli_query($connect, $SQLcmd)){
                print "<br>The query is $SQLcmd";
                print "<br>Insert into $mydb was successfull";
            } else {
                die ("Table Create Creation Failed SQLcmd=$SQLcmd");
            }
            $connect->close();
        }
    ?>
    </body>
</html>
