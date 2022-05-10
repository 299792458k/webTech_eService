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
        include './mysql.php';
        $SQLcmd = "SELECT * FROM $table_name";
        print '<font size="4" color="blue" >Products Data<br></font>';
        print ($SQLcmd);
        ?>
        <table border='1' style='border-collapse:collapse' >
            <thead>
                <th>Number</th>
                <th>Product</th>
                <th>Weight</th>
                <th>Cost</th>
                <th>Count</th>
            </thead>
        <?php       
        if ($connect->connect_error) {
            die ("Cannot connect to $server using $user");
        } else {
            $result = $connect->query($SQLcmd);
            if($result->num_rows > 0){
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>", $row['ProductID'],"</td>";
                    echo "<td>", $row['Product_desc'], "</td>";
                    echo "<td>", $row['Weight'], "</td>";
                    echo "<td>", $row['Cost'], "</td>";
                    echo "<td>", $row['Numb'], "</td>";
                    echo "</tr>";
                } 
            }
            $connect->close();
        }
        ?>
        </table>
    </body>
</html>
