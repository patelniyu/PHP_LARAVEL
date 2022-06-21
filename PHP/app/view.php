<?php
       
           session_start();
           //print_r($_SESSION);
       
       if(!$_SESSION['Email'])
       {
           header("Location:index.php");
       }
       //print_r($_SESSION);
?>
<html>
    <head>
        <title>Form Details</title>
    </head>
    <body>
        <center><form method="POST" name="frm">
        <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
   	    <h2>Form Details</h2>
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">
                     
            <tr class="text-center">
                <th>ID</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Email</th>            
                <th>Password</th>             
                <th>Address</th>            
                <th>Designation</th>
                <th>Gender</th>             
                <th>Files</th>
                <th>Hobbie</th>
                <th>Update</th>  
                <th>Delete</th>
            </tr>
                     
            <?php
                include('connection.php');
                $sqlq="select * from students";
                $resq=mysqli_query($conn,$sqlq);
                while($rowq=mysqli_fetch_array($resq))
                {
            ?>

            <tr class="text-center">
                <td><?php echo $rowq['id'];?></td>
                <td><?php echo $rowq['Fname'];?></td>
                <td><?php echo $rowq['Lname'];?></td>
                <td><?php echo $rowq['Email'];?></td>
                <td><?php echo $rowq['Password'];?></td>
                <td><?php echo $rowq['Address'];?></td>
                <td><?php echo $rowq['Designation'];?></td>
                <td><?php echo $rowq['Gender'];?></td>
                <td><a href="uploads/<?php echo $rowq['File'];?>"><?=$rowq['File']?></a></td>
                <td><?php echo $rowq['Hobbie'];?></td>
                <!-- <td> <button type="submit" name="delete"  onclick="deleteRecord('</?php //echo $rowq['id'];?>')" >Delete</button> -->
                <td><a href="edit.php?id1=<?php echo $rowq['id'];?>" class="btn btn-info">Update </a></td>
                <!-- <a href="delete.php" class="btn btn-danger">Delete</a>-->
                <td>
                    <form action="deletefile.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $rowq['id']; ?>">
                        <input type="hidden" name="del_file" value="<?php echo $rowq['File']; ?>">
                        <button type="submit" name="delete_file" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
            <?php
                }
            ?>

            </tr>
                                                                         
            <?php
            
                if(isset($_POST['update']))
                {	                                 
                    $sql="update students set Fname='$Fname' ,Lname='$Lname',Email='$Email', Password='$Password',Address='$Address',Designation='$Designation',Gender='$Gender',Hobbie='$Hobbie' where id='$id'";
                    $r=mysqli_query($conn,$sql);									
                    header("Location:index.php");
                }
            ?>

            <script >
            function deleteRecord(no)
            {
                var f=document.frm;
                alert(no);  
                f.method="post";
                f.action='delete.php?id='+no;
                f.submit();
                
            }
   
            function updateRecord(no)
            {
                var f=document.frm;
                alert(no);  
                f.method="post";
                f.action='edit.php?id='+no;
                f.submit();
            }    
            </script>	
    
        </table>
        </form></center>
        <center><a href="logout.php" class="btn btn-success">Log Out</a></center>
    </body>
</html>     
                     
