<?php
$Connection=mysqli_connect('127.0.0.1','root','');
$Selected=mysqli_select_db($Connection,'record');
$Update_Record = $_GET["Update"];
$showQuery = "SELECT * FROM stu_db WHERE id='$Update_Record'";
$Execute=mysqli_query($Connection,$showQuery);
while($DataRows=mysqli_fetch_array($Execute)){
	$Name = $DataRows['name'];
	$Email = $DataRows['emailid'];
	$Degree = $DataRows['degree'];
	$Address = $DataRows['address'];
	$Phonenumber = $DataRows['phone_number'];
	$Country = $DataRows['country'];
}
?>
<!DOCTYPE>
<html>
<head>
	<title>Insert into database</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
	<div id="form">
		<h1>Insert Form</h1>
		<form action="update_into_database.php?Update_id=<?php echo $Update_Record?>" method="post">
			<fieldset>
				NAME:<br><input type="text" name="Name" value="<?php echo $Name?>"><br>
				EMAIL:<br><input type="text" name="Email" value="<?php echo $Email?>"><br>
				DEGREE:<br><input type="text" name="Degree" value="<?php echo $Degree?>"><br>
				COUNTRY:<br><input type="text" name="Country" value="<?php echo $Country?>"><br>
				PHN_NUMBER:<br><input type="number" name="Phonenumber" value="<?php echo $Phonenumber?>"><br>
				ADDRESS:<br><textarea name="Address"><?php echo $Address ?></textarea><br>
				<input type="submit" name="Submit" value="Submit">
			</fieldset>
		</form>
	</div>
</body>
</html>
