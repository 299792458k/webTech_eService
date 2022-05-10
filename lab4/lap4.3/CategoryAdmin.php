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
        <font size="10" color="blue" >Category Administration<br></font>
        <form action="InsertCategory.php" method="POST">
            <table border='1' style='border-collapse:collapse'>
                <thead >
                    <th>CatID</th>
                    <th>Title</th>
                    <th>Description</th>
                </thead>
                <?php
                include './mysql.php';
                $connect = new mysqli($server, $user, $pass, $mydb);
                if ($connect->connect_error) {
                    die ("Cannot connect to $server using $user");
                } else {
                    $SQLcmd = "SELECT * FROM categories";
                    $result = $connect->query($SQLcmd);
                    if($result->num_rows > 0){
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>", $row['CategoryID'],"</td>";
                            echo "<td>", $row['Title'], "</td>";
                            echo "<td>", $row['Description'], "</td>";
                            echo "</tr>";
                        } 
                    }
                    echo "<tr>";
                    echo "<td><input type='text' name='id' size='40'>";
                    echo "<td><input type='text' name='title' size='40'>";
                    echo "<td><input type='text' name='description' size='40'>";
                    echo "<tr>";

                    $connect->close();
                }

                ?>
                
            </table>
            <input type='submit' value='Add Category'>
        </form>

    </body>
</html>
