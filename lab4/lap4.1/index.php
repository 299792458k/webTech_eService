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
            $SQLcmd = "CREATE TABLE $table_name(
                            ProductID INT UNSIGNED NOT NULL
                                AUTO_INCREMENT PRIMARY KEY,
                            Product_desc VARCHAR(50),
                            Cost INT,
                            Weight INT,
                            Numb INT)";
            mysqli_select_db($connect, $mydb);
            if (mysqli_query($connect, $SQLcmd)){
                print '<font size="4" color="blue" >Created Table';
                print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
                print "<br>SQLcmd=$SQLcmd";
            } else {
                die ("Table Create Creation Failed SQLcmd=$SQLcmd");
            }
            mysqli_close($connect);
        }
    ?>
    </body>
</html>
