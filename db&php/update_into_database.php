<?php
		$Connection=mysqli_connect('127.0.0.1','root',''); 
		$Selected=mysqli_select_db($Connection,'record'); 
	if(isset($_POST["Submit"])){
		$Update_id =$_GET["Update_id"];
		$Name = $_POST["Name"];
		$Email = $_POST["Email"];
		$Degree = $_POST["Degree"];
		$Country = $_POST["Country"];
		$Phn_number = $_POST["Phonenumber"];
		$Address = $_POST["Address"];
		$Query = "UPDATE stu_db
				SET name='$Name',emailid='$Email',degree='$Degree',address='$Address',phone_number='$Phn_number',country='$Country'
				WHERE id = '$Update_id'";
				  $Execute = mysqli_query($Connection,$Query);
		if($Execute){
			echo "<h1>Record has added</h1>";
		}
		header("location:view.php");

	}
?>