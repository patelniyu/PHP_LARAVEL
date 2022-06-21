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
        <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
        <form method="POST" name="frm">
        <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
        <center><h2>Catagory Details</h2></center>
            <div class="pull-right">
            <b>Logout: </b><a href="logout.php"><b><?php if($_SESSION['Email']){ echo $_SESSION['Email'];} ?></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                     
