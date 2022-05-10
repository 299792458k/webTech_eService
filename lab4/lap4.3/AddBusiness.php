<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Add business</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Business Registration</h1>
        <form action='AddBusiness.php' id="form" method="POST">
            <?php 
                if(array_key_exists("business_name", $_POST)) {
                    $business_id = $_POST["business_id"];
                    $business_name = $_POST["business_name"];
                    $business_address = $_POST["address"];
                    $business_city = $_POST["city"];
                    $business_tele = $_POST["tele"];
                    $business_url = $_POST["url"];
                    $hidden = true;
                } else {
                    $business_id = "";
                    $business_name = "";
                    $business_address = "";
                    $business_city = "";
                    $business_tele = "";
                    $business_url = "";
                    $hidden = false;
                }
            ?>
            <div id="cat-id">
                <p>Click on one, or control-click on multiple categories</p>
                <select name="cats[]" id="cats" multiple>
                    <?php 
                        include_once './SelectCat.php';
                        if ($result->num_rows > 0){
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['CategoryID'];
                                $title = $row['Title'];
                                echo "<option value='$id'>$title</option>";
                            }
                        }
                        $connect->close();
                    ?>
                </select>
                <?php 
                    if (!$hidden) 
                        echo '<input type="submit" value="Add business">';
                    else echo '<a href="AddBusiness.php">Add another business</a>'
                ?>

            </div>
            
            <div id="business">
                <table cellspacing="2">
                    <tbody>
                        <tr>
                            <td>Business ID:</td>
                            <td><input type="text" name="business_id" value="<?php echo $business_id;?>"></td>
                        </tr>
                        <tr>
                            <td>Business Name:</td>
                            <td><input type="text" name="business_name" value="<?php echo $business_name;?>"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" name="address" value="<?php echo $business_address;?>"></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input type="text" name="city" value="<?php echo $business_city;?>"></td>
                        </tr>
                        <tr>
                            <td>Telephone:</td>
                            <td><input type="number" name="tele" value="<?php echo $business_tele;?>"></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td><input type="text" name="url" value="<?php echo $business_url;?>"></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $hidden) {
            $connect = new mysqli($server, $user, $pass, $mydb);
            if ($connect->connect_error) {
                die ("Cannot connect to $server using $user");
            } else {     
                    $selected_cars = filter_input(
                    INPUT_POST,
                    'cats',
                    FILTER_SANITIZE_STRING,
                    FILTER_REQUIRE_ARRAY
                    );            
                    $bid = $_POST["business_id"];
                    $bname = $_POST["business_name"];
                    $baddress = $_POST["address"];
                    $bcity = $_POST["city"];
                    $btele = $_POST["tele"];
                    $burl = $_POST["url"];
                    $SQLcmd = "INSERT INTO business_service VALUES ('$bid', '$bname', '$baddress', '$bcity', '$btele', '$burl')";
                    if($connect->query($SQLcmd)) {
                        foreach ($selected_cars as $cat) {
                            $SQLcmd = "INSERT INTO biz_categories VALUES ('$bid', '$cat')";
                            $connect->query($SQLcmd);
                        }
                    }
                $connect->close();
            }
        }
        ?>
    </body>
</html>
