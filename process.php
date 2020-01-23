<?php

	include ("db.php");	

	$msg = "";
	if(isset($_POST["SUBMIT"]))
	{
		$name = $_POST["name"];
		$mobile = $_POST["mobile"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		
		$sql = "INSERT INTO billing(name, mobile, address, city) VALUES ('$name', '$mobile', '$address', '$city')";
		if (mysqli_query($db, $sql)) {
			echo "<script>";
				echo "alert('Record Added succesfully!!!')";
			echo "</script>";
			echo "<script>";
				echo "window.location.href='invoice.php'";
			echo "</script>";
			
			
		} else {
			echo "<script>";
				echo "alert('Sorry!!!')";
			echo "</script>";
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
		mysqli_close($db);
	
	}
?>