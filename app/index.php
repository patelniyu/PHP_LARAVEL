<?php
    session_start();
    if(isset($_SESSION['Email']))
    {
        header("Location:view.php");
    }
?>
<html>
    <head>
        <title>Log In Form</title>
		<link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
		<script src="script.js"></script>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
        <?php
            include 'connection.php';
            if(!isset($_SESSION)) 
            {  
                session_start(); 
            } 
            if(isset($_REQUEST)&& count($_REQUEST)>0)
            {
                $Email = $_POST['Email'];
                $Password = $_POST['Password'];  
                $sql = "select * from students where Email = '$Email' and Password = '$Password'"; 
                $result = mysqli_query($conn, $sql); 
                if (mysqli_num_rows($result) > 0) 
                {
                    while($row = mysqli_fetch_assoc($result)) 
                    { 
                        $_SESSION['Email']=$Email; 
                        //session_unset();
                       // print_r($_SESSION);
                        header("Location:view.php"); 
                    } 
                } 
                else 
                {
                    echo "Email or Password Invalid."; 
                }
            }
        ?>


        

            <h2> Log In Form</h2>

            <div>
    			<label>Email: </label>
    			<input type="text" placeholder="Enter Your Email Here..." name="Email"  id="Email">
    			<small id="EmailValidation"></small>
    		</div><br>
    
			<div>
    			<label>Password: </label>
    			<input type="password" placeholder="Enter Your Password Here..." name="Password"  id="Password">
    			<small id="PasswordValidation"></small>
    		</div><br>

            <button type="submit" name="submit" class="btn btn-success" id="BtnSubmit" >Log In</button></td>
            <a href="registration.php">Register</a>
            
        </form>
    </body>
</html>