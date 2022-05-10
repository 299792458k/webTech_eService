<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Business Listings</h1>
        <div id="content">
            <table border="1">
                <thead>
                    <tr>
                        <th><b>Click on a category to find business listings</b></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    include_once '../lap4.3/SelectCat.php';;
                    if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['CategoryID'];
                            $title = $row['Title'];
                            echo "<tr><td><a href='/Lap4/lap4.4/BusinessList.php?cat_id=$id'>$title</a></td></tr>";
                        }
                    }
                    $connect->close();
                ?>
                </tbody>
            </table>
        

                    <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'GET' && array_key_exists('cat_id', $_GET)) {
                            echo '<table border="1"><tbody>';
                            $connect = new mysqli($server, $user, $pass, $mydb);
                            if ($connect->connect_error) {
                                die ("Cannot connect to $server using $user");
                            } else {
                                $cat_id = $_GET['cat_id'];
                                $SQLcmd = 'SELECT B.*, C.CategoryID FROM business_service AS B, categories AS C, biz_categories AS BC '
                                        . "WHERE C.CategoryID = BC.CategoryID AND B.BusinessID = BC.BusinessID AND C.CategoryID = '$cat_id'";
                                $result = $connect->query($SQLcmd);
                                while ($row = $result->fetch_assoc()) {
                                    
                                    echo "<tr><td>", $row['BusinessID'], "</td>";                                   
                                    echo "<td>", $row['Name'], "</td>";                                
                                    echo "<td>", $row['Address'], "</td>";
                                    echo "<td>", $row['City'], "</td>";
                                    echo "<td>", $row['Telephone'], "</td>";
                                    echo "<td>", $row['URL'], "</td>";
                                    echo "<td>", $row['CategoryID'], "</td></tr>";

                                }
                            }
                            echo '</tbody>';
                        }
                    ?>
                
            </table>
        </div>

    </body>
</html>
