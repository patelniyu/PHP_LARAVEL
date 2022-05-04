<html>
    <head>
        <title>Registration Form</title>
		<link rel="stylesheet" href="style.css">
		<linl rel="javascript" href="script.js">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			


//Reg Ex Declaration - Globaly.
var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
var $LNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
var $PasswordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,12}$/;

var TxtFirstnameFlag=false,
    TxtLastnameFlag=false,
    TxtEmailIdFlag=false,
    TxtPasswordFlag=false,
    TxtAddressFlag=false,
    TxtDesignationFlag=false,
    TxtGenderFlag=false,
    TxtFileFlag=false;

$(document).ready(function() 
{
    $("#Fname").blur(function() 
    {
        TxtFirstnameFlag = false;
        $("#FnameValidation").empty();
        if ($(this).val() == "") 
        {
            $("#FnameValidation").html(" * First name Required..!!");
            // alert("#FnameValidation");
        } 
        else 
        {
            if (!$(this).val().match($FNameLNameRegEx)) 
            {
                $("#FnameValidation").html(" * Invalid First Name..!!");
                // alert("#FnameValidation");
            } 
            else 
            {
                TxtFirstnameFlag = true;
            }
        }
    });
});
$("#BtnSubmit").click(function() 
{
    TxtFirstnameFlag = false;
    $("#FnameValidation").empty();
    if ($("#Fname").val() == "") 
    {
        $("#FnameValidation").html(" * First Name Required..!!");
    } 
    else 
    {
        if (!$("#Fname").val().match($FNameLNameRegEx)) 
        {
            $("#FnameValidation").html(" * Invalid First Name..!!");
        } 
        else 
        {
            TxtFirstnameFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Lname").blur(function() 
    {
        TxtLastnameFlag = false;
        $("#LnameValidation").empty();
        if ($(this).val() == "") 
        {
            $("#LnameValidation").html(" * Last name Required..!!");
            // alert("#LameValidation");
        } 
        else 
        {
            if (!$(this).val().match($FNameLNameRegEx)) 
            {
                $("LnameValidation").html(" * Invalid Last Name..!!");
                // alert("#LnameValidation");
            } 
            else 
            {
                TxtLastnameFlag = true;
            }
        }
    });
});
$("#BtnSubmit").click(function() 
{
    TxtLastnameFlag = false;
    $("#LnameValidation").empty();
    if ($("#Lname").val() == "") 
    {
        $("#LnameValidation").html(" * Last Name Required..!!");
    } 
    else 
    {
        if (!$("#Lname").val().match($FNameLNameRegEx)) 
        {
            $("#LnameValidation").html(" * Invalid Last Name..!!");
        } 
        else 
        {
            TxtLastnameFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Lname").blur(function() 
    {
        TxtLastnameFlag = false;
        $("#LnameValidation").empty();
        if ($(this).val() == "") 
        {
            $("#LnameValidation").html(" * Last name Required..!!");
            // alert("#LameValidation");
        } 
        else 
        {
            if (!$(this).val().match($FNameLNameRegEx)) 
            {
                $("LnameValidation").html(" * Invalid Last Name..!!");
                // alert("#LnameValidation");
            } 
            else 
            {
                TxtLastnameFlag = true;
            }
        }
    });
});
$("#BtnSubmit").click(function() 
{
    TxtEmailIdFlag = false;
    $("#EmailValidation").empty();
    if ($("#Email").val() == "") 
    {
        $("#EmailValidation").html(" * Email Required..!!");
    } 
    else 
    {
        if (!$("#Email").val().match($EmailIdRegEx)) 
        {
            $("#Emaildation").html(" * Invalid Email..!!");
        } 
        else 
        {
            TxtEmailIdFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Email").blur(function() 
    {
        TxtEmailIdFlag = false;
        $("#EmailValidation").empty();
        if ($(this).val() == "") 
        {
            $("#EmailValidation").html(" * Email Required..!!");
            // alert("#EmailValidation");
        } 
        else 
        {
            if (!$(this).val().match($EmailIdRegEx)) 
            {
                $("EmailValidation").html(" * Invalid Email..!!");
                // alert("#EmailValidation");
            } 
            else 
            {
                TxtEmailIdFlag = true;
            }
        }
    });
});

$("#BtnSubmit").click(function() 
{
    TxtPasswordFlag = false;
    $("#PasswordValidation").empty();
    if ($("#Password").val() == "") 
    {
        $("#PasswordValidation").html(" * Password Required..!!");
    } 
    else 
    {
        if (!$("#Password").val().match($PasswordRegEx)) 
        {
            $("#PasswordValidation").html(" * Invalid Password..!!");
        } 
        else 
        {
            TxtPasswordFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Password").blur(function() 
    {
        TxtPasswordFlag = false;
        $("#PasswordValidation").empty();
        if ($(this).val() == "") 
        {
            $("#PasswordValidation").html(" * Password Required..!!");
            // alert("#PasswordValidation");
        } 
        else 
        {
            if (!$(this).val().match($PasswordRegEx)) 
            {
                $("PasswordValidation").html(" * Invalid Password..!!");
                // alert("#PasswordValidation");
            } 
            else 
            {
                TxtPasswordFlag = true;
            }
        }
    });
});

$("#BtnSubmit").click(function() 
{
    TxtAddressFlag = false;
    $("#AddressValidation").empty();
    if ($("#Address").val() == "") 
    {
        $("#AddressValidation").html(" * Address Required..!!");
    } 				
});

$(document).ready(function() 
{
    $("#Address").blur(function() 
    {
        TxtAddressFlag = false;
        $("#AddressValidation").empty();
        if ($(this).val() == "") 
        {
            $("#AddressValidation").html(" * Address Required..!!");
            // alert("#AddressValidation");
        } 
    });
});

$("#BtnSubmit").click(function() 
{
    TxtDesignationFlag = false;
    $("#DesignationValidation").empty();
    if ($("#Designation").val() == "") 
    {
        $("#DesignationValidation").html(" * Designation Required..!!");
    } 
    
});

$(document).ready(function() 
{
    $("#Designation").blur(function() 
    {
        TxtDesignationFlag = false;
        $("#DesignationValidation").empty();
        if ($(this).val() == "") 
        {
            $("#DesignationValidation").html(" * Designation Required..!!");
            // alert("#DesignationValidation");
        } 
    });
});

		</script>
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
					if($FileType != "pdf" && $FileType != "docx" && $FileType != "xml" ) 
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
            			window.location.href='login.php'</script>";
        			}
        			else
        			{
            			echo "<script>alert('Try Again');</script>";
        			}						
				}
			?>
			
			<h2> Registration Form</h2>

    		<div>
    			<label>Firstname: </label>
    			<input type="text" placeholder="Enter Your Firstname Here..." name="Fname" required="" id="Fname">
    			<small id="FnameValidation"></small>
    		</div><br>

    		<div>
    			<label>Lastname: </label>
    			<input type="text" placeholder="Enter Your Lastname Here..." name="Lname" required="" id="Lname">
    			<small id="LnameValidation"></small>
    		</div><br>
                    
    		<div>
    			<label>Email: </label>
    			<input type="text" placeholder="Enter Your Email Here..." name="Email" required="" id="Email">
    			<small id="EmailValidation"></small>
    		</div><br>
    
			<div>
    			<label>Password: </label>
    			<input type="password" placeholder="Enter Your Password Here..." name="Password" required="" id="Password">
    			<small id="PasswordValidation"></small>
    		</div><br>
           
			<div>
    			<label>Address: </label>
				<input type="text" placeholder="Enter Your Address Here..." name="Address" required="" id="Address">
    			<small id="AddressValidation"></small>
    		</div><br>

    		<div>                    
        		<label>Designation: </label>
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
    			<lable>Gender: </lable>
        		<input type="radio" name="Gender" value="0"> Male
        		<input type="radio" name="Gender" value="1"> Female
    		</div><br>
	
			<div>
				<lable>Select File to Upload</lable> 
				<input type="file" name="fileToUpload" id="fileToUpload" required=""><br>Only xlsx/pdf/docx are allowed.<br>
			</div><br>

			<div>
				<lable>Hobbie:</lable>
				<input type="checkbox" name="Hobbie[]" value="Reading"/> Reading <br>
				<input type="checkbox" name="Hobbie[]" value="Travelling"/> Travelling <br>
				<input type="checkbox" name="Hobbie[]" value="Playing"/> Playing <br>
				<input type="checkbox" name="Hobbie[]" value="Watching Movie"/> Watching Movie <br><br>
			</div>
            
    		<button type="submit" name="submit" class="btn btn-success" id="BtnSubmit" >Submit</button></td>
			<a href="logout.php">Log Out</a>
		</form>
	</body>
</html>

