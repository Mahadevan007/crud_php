<?php
	//get the index from URL
	$index = $_GET['index'];

	//get json data
	$data = file_get_contents('members.json');
	$data_array = json_decode($data);

	//assign the data to selected index
	$row = $data_array[$index];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on JSON File using PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="edit.styles.css">
</head>
<body>
<form method="POST">
	<a href="index.php">Back</a>
	<p>
		<label for="id">ID</label>
		<input type="text" id="id" name="Id" value="<?php echo $row->id; ?>">
	</p>
	<p>
		<label for="name">Name</label>
		<input type="text" id="name" name="Name" value="<?php echo $row->name; ?>">
	</p>
	<p>
		<label for="emailid">Email Id</label>
		<input type="text" id="emailid" name="Emailid" value="<?php echo $row->emailid; ?>">
	</p>
	<p>
		<label for="degree">Degree</label>
		<input type="text" id="Degree" name="Degree" value="<?php echo $row->degree; ?>">
	</p>
	<p>
		<label for="address">Address</label>
		<input type="text" id="Address" name="Address" value="<?php echo $row->address; ?>">
	</p>
	<p>
		<label for="phonenumber">Phn_number</label>
		<input type="text" id="phn_number" name="Phonenumber" value="<?php echo $row->phone_number; ?>">
	</p>
	<p>
		<label for="gender">Country</label>
		<input type="text" id="Country" name="Country" value="<?php echo $row->country; ?>">
	</p>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
	if(isset($_POST['submit'])){
		//set the updated values
		$input = array(
			'id' => $_POST['Id'],
			'name' => $_POST['Name'],
			'emailid' => $_POST['Emailid'],
			'degree' => $_POST['Degree'],
			'address' => $_POST['Address'],
			'phone_number'=> $_POST['Phonenumber'],
			'country'=> $_POST['Country']
		);

		//update the selected index
		$data_array[$index] = $input;

		//encode back to json
		$data = json_encode($data_array, JSON_PRETTY_PRINT);
		file_put_contents('Students.json', $data);

		header('location: index.php');
	}
?>
</body>
</html>