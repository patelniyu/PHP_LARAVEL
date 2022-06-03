<?php
    session_start();
    if(!isset($_SESSION['Email']))
    {
        header("Location:login.php");
    }
?>
<html>
    <head>
        <title>Create Form</title>
		<link rel="stylesheet" href="style.css">
		<linl rel="javascript" href="javascript.js">
		<!-- <link href="css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet" /> -->
	</head>
	<body>
		<form method="POST" enctype="multipart/form-data">
	
			<?php 
				include('connection.php');
				if(isset($_POST['submit']))
				{	
					$Name=$_POST['Name'];
        			$Catagory=$_POST['catagory_id'];
        			$Image=$_FILES['Image']['name'];
                    $Created_By_User_id=$_SESSION['Email'];
        			$Active=$_POST['Active'];

					$targetDir = "uploads/";
					$fileName = basename($_FILES["Image"]["name"]);
					$targetFilePath = $targetDir . $fileName;
					$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

					if(isset($_POST["submit"]) && !empty($_FILES["Image"]["name"])){
						// Allow certain file formats
						$allowTypes = array('jpg','png','jpeg','JPG','PNG','JPEG');
						if(in_array($fileType, $allowTypes)){
							// Upload file to server
							if(move_uploaded_file($_FILES["Image"]["tmp_name"], $targetFilePath)){
								// Insert image file name into database
								$statusMsg = "File is uploaded." ;
							}else{
								$statusMsg = "Sorry, there was an error uploading your file.";
							}
						}else{
							$statusMsg = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.';
						}
					}else{
						$statusMsg = 'Please select a file to upload.';
					}

					// Display status message
					echo $statusMsg;


					$sql="insert into product(Name,Catagory,Image,Created_By_User_id,Active)values('$Name','$Catagory','$Image','$Created_By_User_id','$Active')";
        			$r=mysqli_query($conn,$sql);
	
						if($r>=1)
						{
							echo "<script>
							window.location.href='Product_list.php'</script>";
						}
						else
						{
							echo "<script>alert('Try Again');</script>";
						}						
				}
			?>
            <h2> <b>Create Form</b></h2><br><br>
    		<div>
    			<label><b>Name: </b></label>
    			<input type="text" placeholder="Enter Name" name="Name" required="" id="Name">
    			<small id="FnameValidation"></small>
    		</div><br>			
                    
    		<div>
    			<label><b>Catagory: </b></label>
    			<select name="catagory_id" id="catagory_id" required="">
				<option>--Select--</option>
					<?php
						include('connection.php');
						$sql = "SELECT * FROM catagory WHERE active='Yes'";
						$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)>0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								?>
								<option value="<?php echo $row['catagory_id']?>"><?php echo $row['CName']?></option>
							<?php }
						}
					?>
				</select>
    		</div><br>
    
			<div>
    			<label><b>Image: </b></label>
    			<input type="file" name="Image" required accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG" id="Image">
    		</div><br>

            <div>
    			<label><b>Created By User ID: </b></label>
				<?php  if (isset($_SESSION['Email']))
						{
                    		echo $_SESSION['Email'];                
						} ?>	
				   		 	
    		</div><br>

			<div> 
    			<lable><b>Active: </b></lable>
        		<input type="radio" name="Active" value="Yes" > Yes
        		<input type="radio" name="Active" value="No"> No
    		</div><br>
            
    		<button type="submit" name="submit" class="btn btn-success" id="BtnSubmit" >Submit</button></td>
			<a class="btn btn-success" href="Product_List.php">Back</a>	
		</form>
	</body>
</html>