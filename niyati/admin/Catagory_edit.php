<?php
    session_start();
    if(!isset($_SESSION['Email']))
    {
        header("Location:login.php");
    }
?>
<?php
    require 'connection.php';
    $catagory_id = $_GET['catagory_id1']; 
    $result = mysqli_query($conn, "SELECT * FROM catagory WHERE catagory_id=$catagory_id");
    $row=mysqli_fetch_array($result);
?>
<html>
    <head>
        <title><b>Edit Form</b></title>
        <link rel="stylesheet" href="style.css">
        <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <form method="get" action="Catagory_update.php">
        <h2><b>Edit Form</b></h2>
        <div><b>Id:</b>
        <input type=" " name="catagory_id" value="<?php echo $catagory_id; ?>">
        </div><br>
 
        <div> 
            <lable><b>CName:</b></lable>
            <input type="text" placeholder="Name" name="CName" value="<?php echo $row['CName']?>">
        </div><br>
         
        <div>             
            <lable><b>Active:</b> </lable>
            <input type="radio" name="Active" value="Yes" <?php if($row['Active']=="Yes"){ echo "checked='checked'";} ?>>Yes          
            <input type="radio" name="Active" value="No" <?php if($row['Active']=="No"){ echo "checked='checked'";}?>>No 
        </div><br>

        <button type="submit" name="update" class="btn btn-primary " >Update</button></td>
        <a class="btn btn-success" href="Catagory_List.php">Back</a>		
    </form>
    </body>
</html>