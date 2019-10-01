<?php
	if(isset($_POST["Submit"])){
		$Name = $_POST["Name"];
		$Email = $_POST["Email"];
		$Degree = $_POST["Degree"];
		$Country = $_POST["Country"];
		$Phn_number = $_POST["Phonenumber"];
		$Address = $_POST["Address"];
		$Connection=mysqli_connect('127.0.0.1','root',''); 
		$Selected=mysqli_select_db($Connection,'record'); 
		$Query = "INSERT INTO stu_db(name,emailid,degree,address,phone_number,country) 
				  VALUES('$Name','$Email','$Degree','$Address','$Phn_number','$Country')";
				  $Execute = mysqli_query($Connection,$Query);
		if($Execute){
			echo "<h1>Record has added</h1>";
		}
		header('location:view.php');
	}
?>