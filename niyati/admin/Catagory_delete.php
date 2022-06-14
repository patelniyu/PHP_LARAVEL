<?php
    session_start();
    if(!isset($_SESSION['Email']))
    {
        header("Location:login.php");
    }
?>
<html>
    <head>
        <title>Delete</title>
    </head>
    <body>
        <?php
            include('connection.php');
            $catagory_id = $_GET['catagory_id'];
            echo $catagory_id;
            $result = mysqli_query($conn, "DELETE FROM catagory WHERE catagory_id=$catagory_id");
            header("Location:Catagory_list.php");
        ?>
    </body>
</html>

