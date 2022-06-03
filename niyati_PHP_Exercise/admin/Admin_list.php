<?php
    session_start();
    if(!isset($_SESSION['Email']))
    {
        header("Location:login.php");
    }
?>
<html>
    <head>
        <title>Form Details</title>
    </head>
    <body>
        
        <form method="POST" name="frm">
        <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
        <center><h2>Form Details</h2></center>
           <div class="pull-right">
           <b>Logout: </b><a href="logout.php" value="testuser@kcsitglobal.com"><b>testuser@kcsitglobal.com</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="Admin_create.php">Add new admin</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="Catagory_list.php"> Catagory</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="Product_list.php"> Product</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <br><br>
            </div>
        <center><table  id="tabledata" class=" table table-striped table-hover table-bordered">
                     
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>            
                <th>Password</th>
                <th>Gender</th>
                <th>Hobbie</th>
                <th>Update</th>  
                <th>Delete</th>
            </tr>
                     
            <?php
                include('connection.php');
                $sqlq="SELECT * FROM admin";
                $resq=mysqli_query($conn,$sqlq);
                while($rowq=mysqli_fetch_array($resq))
                {
            ?>

            <tr class="text-center">
                <td><?php echo $rowq['id'];?></td>
                <td><?php echo $rowq['Name'];?></td>
                <td><?php echo $rowq['Email'];?></td>
                <td><?php echo $rowq['Password'];?></td>
                <td><?php echo $rowq['Gender'];?></td>
                <td><?php echo $rowq['Hobbie'];?></td>
                <td><a href="Admin_edit.php?id1=<?php echo $rowq['id'];?>" class="btn btn-info">Update </a></td>
                <td><button type="submit" class="btn btn-danger" name="delete"  onclick="deleteRecord('<?php echo $rowq['id'];?>')" >Delete</button>                    
            <?php
                }
            ?>

            </tr>
                                                                         
            <?php
            
                if(isset($_POST['update']))
                {	                                 
                    $sql="UPDATE admin SET Fname='$Name' ,Email='$Email', Password='$Password',Gender='$Gender',Hobbie='$Hobbie' WHERE id='$id'";
                    $r=mysqli_query($conn,$sql);									
                    header("Location:login.php");
                }
            ?>

            <script >
            function deleteRecord(no)
            {
                var f=document.frm;
                alert('Are you sure want to delete?');  
                f.method="post";
                f.action='Admin_delete.php?id='+no;
                f.submit();
                
            }
            </script>	
    
        </table></center>
        </form>
   
        
    </body>
</html>     
                     
