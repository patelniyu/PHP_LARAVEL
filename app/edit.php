<?php
    require 'connection.php';

    $id = $_GET['id1'];
    echo $id;
    var_dump($_GET);
    $result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
    $row=mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Update Form</title>
        <link rel="stylesheet" href="style.css">
        <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <form method="get" action="update.php">
            <h2>Update Form</h2>
            <div>id
            <input type=" " name="id" value="<?php echo $id; ?>">
            </div><br>
    
            <div> 
                <label> Firstname: </label>
                <input type="text" placeholder="Firstname" name="Fname" value="<?php echo $row['Fname']?>" required="" id="Fname">
            </div><br>
            
            <div> 
                <label>Lastname: </label>
                <input type="text" placeholder="Lastname" name="Lname" value="<?php echo $row['Lname']?>" required="" id="Lname">
            </div><br>
                
            <div>
                <label>Email: </label>
                <input type="text" placeholder="Email" name="Email" value="<?php echo $row['Email']?>" required="" id="Email">
            </div><br>
                
            <div>
                <label>Password: </label>
                <input type="password" placeholder="Password" name="Password" value="<?php echo $row['Password']?>" required="" id="Password">
            </div><br>
                
            <div>
                <label> Enter your Address: </label>
                <input type="text" name="Address" value="<?php echo $row['Address']?>" required="" id="Address"><br>  
            </div><br> 
        
            <div>                    
                <label>Designation: </label>
                <select name="Designation" required="" id="Fname">
                <option value="">select </option>
                <option value="Project Manager" <?php if($row['Designation']=="Project Manager"){echo "selected";}?> >Project Manager</option>
                <option value="Jr. Developer" <?php if($row['Designation']=="Jr. Developer"){echo "selected";}?> >Jr. Developer </option>
                <option value="Sr. Developer" <?php if($row['Designation']=="Sr. Developer"){echo "selected";}?>>Sr. Developer </option>
                <option value="Humman resource" <?php if($row['Designation']=="Humman resource"){echo "selected";}?>>Humman resource</option>
                </select>
                <br><br>
            </div>

            <div>             
                <label>Gender: </label>
                <input type="radio" name="Gender" value="0" <?php if($row['Gender']=="0"){ echo "checked='checked'";}else{echo "checked='checked'";} ?>> Male          
                <input type="radio" name="Gender" value="1" <?php if($row['Gender']=="1"){ echo "checked='checked'";}else{echo "checked='checked'";} ?>> Female 
            </div><br>

            <div>
                <label> File: </lable>
                <input type="file" name="filetoupload" class="form-control"><br>
                Uploaded File: <?php echo $row['File']; ?>
                <!-- <p><file scr="uploads/<?php //echo $file; ?>"></p> -->
            </div>

            <button type="submit" name="update" class="btn btn-success " >Update</button></td>
                    
        </form>
    </body>
</html>
