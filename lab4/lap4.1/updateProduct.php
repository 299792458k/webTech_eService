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
        <p style="font-size: 24px; color: blue">Select product we just sold:</p>
        <?php
        include_once './mysql.php';
        $SQLcmd = "SELECT * FROM $table_name";
        print $SQLcmd;
        if ($connect->connect_error) {
            die ("Cannot connect to $server using $user");
        } else {
            $result = $connect->query($SQLcmd);
            if($result->num_rows > 0){
                echo "<form action='updateProduct2.php'>";
                while($row = $result->fetch_assoc()) {
                    $nameProduct = $row['Product_desc'];
                    echo "<label>$nameProduct</label>";
                    echo "<input type='radio' name='name' value='$nameProduct'><br>";
                    
                }
                echo "<input type='submit' value='submit'>";
                echo "<input type='reset' value='reset'>";
                echo "</form>";
            }
        }
        print "<br><br>";
        include_once './display.php';
        ?>
    </body>
</html>

