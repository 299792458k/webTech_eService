<?php
    include './mysql.php';
            $connect = new mysqli($server, $user, $pass, $mydb);
            if ($connect->connect_error) {
                die ("Cannot connect to $server using $user");
            } elseif (isset($_POST['id']) and isset($_POST['title']) and isset ($_POST['description'])) {                      
                $catID = $_POST['id'] ;
                $title = $_POST['title'];
                $des = $_POST['description'];
                if (strcmp($catID, "") != 0) {
                    $SQLcmd = "INSERT INTO categories VALUES ('$catID', '$title', '$des')";
                    $result = $connect->query($SQLcmd);           
                }
                $connect->close();
            }
    header("Location: CategoryAdmin.php");
    exit;
