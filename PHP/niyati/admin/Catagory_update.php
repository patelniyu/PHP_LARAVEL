<?php
    session_start();
    if(!isset($_SESSION['Email']))
    {
        header("Location:login.php");
    }
?>
<?php 
    require 'connection.php';

    $catagory_id=$_GET['catagory_id'];
    $CName=$_GET['CName'];
    $Active=$_GET['Active'];
    //$Hobbie=$_GET['Hobbie'];
    
    $qry="UPDATE catagory SET CName='".$CName."',Active='".$Active."'   WHERE catagory_id=$catagory_id";

    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
        //echo "Updated";
        header("location:Catagory_list.php");
        exit();
    }
    else
    {
        echo "Error...";
    }
?>