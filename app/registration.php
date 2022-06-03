<?php
    session_start();
    if(isset($_SESSION['Email']))
    {
        header("Location:view.php");
    }
?>
<html>
    <head>
        <title>Registration Form</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<form method="POST" enctype="multipart/form-data">
			<?php 
				include('connection.php');
				if(isset($_POST['submit']))
				{	
					$Fname=$_POST['Fname'];
					$Lname=$_POST['Lname'];
        			$Email=$_POST['Email'];
        			$Password=$_POST['Password'];
        			$Address=$_POST['Address'];
					$Designation=$_POST['Designation'];
        			$Gender=$_POST['Gender'];
					$file=$_FILES["fileToUpload"]['name'];
					$Hobbie=$_POST['Hobbie'];
					$Hobbie=implode(", ", $_POST['Hobbie']);

					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					// Check if file already exists
					if (file_exists($target_file)) 
					{
  						echo "Sorry, file already exists.";
  						$uploadOk = 0;
					}

					// Check file size
					if ($_FILES["fileToUpload"]["size"] > 500000) 
					{
  						echo "Sorry, your file is too large.";
  						$uploadOk = 0;
					}
					
					// Allow certain file formats
					if($FileType != "pdf" && $FileType != "docx" && $FileType != "xml") 
					{
  						echo "Sorry, only pdf, docx, xml files are allowed.";
  						$uploadOk = 0;
					}

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) 
					{
  						echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
					} 
					else 
					{
  						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
						{
    						echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  						} 
						else 
						{
    						echo "Sorry, there was an error uploading your file.";
  						}
					}
					$sql="insert into students(Fname,Lname,Email,Password,Address,Designation,Gender,file,Hobbie)values('$Fname','$Lname','$Email','$Password','$Address','$Designation','$Gender','$file','$Hobbie')";
        			$r=mysqli_query($conn,$sql); 
	
        			if($r>=1)
        			{
            			echo "<script>
            			window.location.href='index.php'</script>";
        			}
        			else
        			{
            			echo "<script>alert('Try Again');</script>";
        			}						
				}
			?>
			
			<h2> Registration Form</h2>

    		<div>
    			<label><b> Firstname: </b></label>
    			<input type="text" placeholder="Enter Firstname" name="Fname" required="" id="Fname" autocomplete="off">
    			<small id="FnameValidation"></small>
    		</div><br>

    		<div>
    			<label><b> Lastname: </b></label>
    			<input type="text" placeholder="Enter Lastname" name="Lname" required="" id="Lname" autocomplete="off">
    			<small id="LnameValidation"></small>
    		</div><br>
                    
    		<div>
    			<label><b> Email: </b></label>
    			<input type="text" placeholder="Enter Email" name="Email" required="" id="Email" autocomplete="off">
    			<small id="EmailValidation"></small>
    		</div><br>
    
			<div>
    			<label><b> Password: </b></label>
    			<input type="password" placeholder="Enter Password" name="Password" required="" id="Password" autocomplete="off">
    			<small id="PasswordValidation"></small>
    		</div><br>
           
			<div>
    			<label><b> Address: </b></label>
				<input type="text" placeholder="Enter Address" name="Address" required="" id="Address" autocomplete="off">
    			<small id="AddressValidation"></small>
    		</div><br>

    		<div>                    
        		<label><b> Designation: </b></label>
        		<select name="Designation">
        			<option value="">select </option>
        			<option value="Project Manager" >Project Manager</option>
        			<option value="Jr. Developer" >Jr. Developer </option>
        			<option value="Sr. Developer" >Sr. Developer </option>
        			<option value="Humman resource" >Humman resource</option>
        		</select>
				<small id="DesignationValidation" class="text-danger"></small>
			</div><br>

			<div> 
    			<label><b> Gender: </b></label>
        		<input type="radio" name="Gender" value="0"> Male
        		<input type="radio" name="Gender" value="1"> Female
    		</div><br>
	
			<div>
				<label><b> Select File to Upload: </b></label> 
				<input type="file" name="fileToUpload" id="fileToUpload" required=""><br><b>Only xlsx/pdf/docx are allowed.</b> 	<br>
				
			</div><br>

			<div>
				<label><b> Hobbie: </b></label>
                <br />
				<input type="checkbox" name="Hobbie[]" value="Reading"/> Reading <br />
				<input type="checkbox" name="Hobbie[]" value="Travelling"/> Travelling <br />
				<input type="checkbox" name="Hobbie[]" value="Playing"/> Playing <br />
				<input type="checkbox" name="Hobbie[]" value="Watching Movie"/> Watching Movie <br />
			</div>
            
    		<button type="submit" name="submit" class="btn btn-success" id="BtnSubmit" >Submit</button></td>
			
		</form>
	</body>
</html>

