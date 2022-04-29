<html>
    <head>
        <title>Delete</title>
    </head>
    <body>
        <?php
            include('connection.php');

            $id = $_GET['id'];
            echo $id;
            $result = mysqli_query($conn, "DELETE FROM students WHERE id=$id");
            header("Location:view.php");
        ?>
    </body>
</html>

