<?php
    session_start();
    if(!isset($_SESSION['Email']))
    {
        header("Location:login.php");
    }
?>
<html>
    <head>
        <title>Catagory List</title>
        
    </head>
    <body>
        
        <form method="POST" name="frm">
        <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
        <center><h2>Catagory Details</h2></center>
            <div class="pull-right">
            <b>Logout: </b><a href="logout.php" value="testuser@kcsitglobal.com"><b>testuser@kcsitglobal.com</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="Catagory_create.php">Add new Catagory</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="Product_list.php"> Product</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="Admin_list.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <br><br>  
            </div>
        <center><table  id="tabledata" class=" table table-striped table-hover table-bordered">
                     
            <tr class="text-center">
                <th>Catagory ID</th>
                <th>CName</th>
                <th>Active</th>
                <th>Update</th>  
                <th>Delete</th>
            </tr>
                     
            <?php
                include('connection.php');
                $sqlq="SELECT * FROM catagory";
                $resq=mysqli_query($conn,$sqlq);
                while($rowq=mysqli_fetch_array($resq))
                {
            ?>

            <tr class="text-center">
                <td><?php echo $rowq['catagory_id'];?></td>
                <td><?php echo $rowq['CName'];?></td>
                <td><?php echo $rowq['Active'];?></td>
                <td><a href="Catagory_edit.php?catagory_id1=<?php echo $rowq['catagory_id'];?>" class="btn btn-info">Update </a></td>
                <td><button type="submit" class="btn btn-danger" name="delete"  onclick="deleteRecord('<?php echo $rowq['catagory_id'];?>')" >Delete</button>                    
            <?php
                }
            ?>

            </tr>
                                                                         
            <?php
            
                if(isset($_POST['update']))
                {	                                 
                    $sql="update catagory set CName='$CName',Active='$Active' where catagory_id='$catagory_id'";
                    $r=mysqli_query($conn,$sql);									
                    header("Location:Catagory_list.php");
                }
            ?>

            <script>
            function deleteRecord(no)
            {
                var f=document.frm;
                alert('Are you sure want to delete?');   
                f.method="post";
                f.action='Catagory_delete.php?catagory_id='+no;
                f.submit();
                
            }
            </script>	
    
        </table></center>
        </form>
            
        
    </body>
</html>     
                     
