<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .header, .footer {
                background-color: coral;
                padding: 20px;
            }
            .content {
                background-color: yellow;
                padding: 10px;
            }
        </style>  
    </head>
    <body>
        <div class="header">
            <?php require_once './mvc/Views/Blocks/Header.php'; ?>
        </div>
        <div class="content">
            <?php
            while ($row = mysqli_fetch_array($data['sv'])) {
                echo $row['id'].$row['name'].$row['age']."<br/>";
            }
            ?>
        </div>
        <div class="footer">
            <?php require_once './mvc/Views/Blocks/Footer.php'; ?>
        </div>
    </body>
</html>
