<?php
	include('connection.php');
	
	if(isset($_POST['delete_file']))
	{
		$id = $_POST['delete_id'];
		$File = $_POST['del_file'];

		$query = "DELETE FROM students WHERE id='$id' ";
		$query_run = mysqli_query($conn,$query);

		if($query_run)
		{
			unlink("uploads/".$File);
			echo "File deleted successfully!!!";
			header("Location: view.php");
		}
		else
		{
			echo "File not deleted!!!";
			header("Location: view.php");
		}
	}
?>