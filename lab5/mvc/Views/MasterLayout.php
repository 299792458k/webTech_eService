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

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo $_POST['addTodo'];
            require_once './mvc/Models/ToDoModel.php';
            $model = new ToDoModel();
            $model->addTodo($_POST['addTodo']);
            header('Location: index.php');
        }
        ?>
        <form action= "/lab5/home/index" method="POST">
            <input type="text" name="addTodo" value=""/>
            <input type="submit" value="Add"/>
        </form>
        <div class="content">
            <?php
            while ($row = mysqli_fetch_array($data['todos'])) {
                echo $row['id'] . $row['name'] . "<br/>";
            }
            ?>
        </div>
    </body>
</html>
