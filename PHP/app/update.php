<?php 
    require 'connection.php';

    $id=$_GET['id'];
    $Fname=$_GET['Fname'];
    $Lname=$_GET['Lname'];
    $Email=$_GET['Email'];
    $Password=$_GET['Password'];
    $Address=$_GET['Address'];
    $Designation=$_GET['Designation'];
    $Gender=$_GET['Gender'];
    $file=$_GET["fileToUpload"]['name'];
    //$Hobbie=$_GET['Hobbie'];
    
    $qry="UPDATE students SET Fname='".$Fname."',Lname='".$Lname."' ,Email='".$Email."' ,Password='".$Password."',Address='".$Address."' ,Designation='".$Designation."',Gender='".$Gender."',file='".$file."'   WHERE id=$id";

    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
        //echo "Updated";
        header("location:view.php");
        exit();
    }
    else
    {
        echo "Error...";
    }
?>