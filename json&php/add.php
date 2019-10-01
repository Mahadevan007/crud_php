<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on JSON File using PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="add.styles.css">
</head>
<body>
<p class="add-data">Add Data</p>
<form method="POST">
	<a href="index.php">Back</a>
	<p>
		<label for="id">ID</label>
		<input type="text" id="id" name="Id">
	</p>
	<p>
		<label for="name">Name</label>
		<input type="text" id="name" name="Name">
	</p>
	<p>
		<label for="emailid">Email Id</label>
		<input type="text" id="emailid" name="Emailid">
	</p>
	<p>
		<label for="degree">Degree</label>
		<input type="text" id="Degree" name="Degree">
	</p>
	<p>
		<label for="address">Address</label>
		<input type="text" id="Address" name="Address">
	</p>
	<p>
		<label for="phonenumber">Phn_number</label>
		<input type="text" id="phn_number" name="Phonenumber">
	</p>
	<p>
		<label for="gender">Country</label>
		<input type="text" id="Country" name="Country">
	</p>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
	if(isset($_POST['submit'])){
		//open the json file
		$data = file_get_contents('Students.json');
		$data = json_decode($data);

		//data in out POST
		$input = array(
			'id' => $_POST['Id'],
			'name' => $_POST['Name'],
			'emailid' => $_POST['Emailid'],
			'degree' => $_POST['Degree'],
			'address' => $_POST['Address'],
			'phone_number'=> $_POST['Phonenumber'],
			'country'=> $_POST['Country']
		);

		//append the input to our array
		$data[] = $input;
		//encode back to json
		$data = json_encode($data, JSON_PRETTY_PRINT);
		file_put_contents('Students.json', $data);

		header('location: index.php');
	}
?>
</body>
</html>