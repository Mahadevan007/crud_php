<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on JSON File using PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.styles.css">
</head>
<body>
<a href="add.php" class="add-data">Add Data</a>
<table border="1">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Degree</th>
		<th>Address</th>
		<th>Phonenumber</th>
		<th>Country</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php
			//fetch data from json
			$data = file_get_contents('Students.json');
			//decode into php array
			$data = json_decode($data);

			$index = 0;
			foreach($data as $row){
				echo "
					<tr>
						<td>".$row->id."</td>
						<td>".$row->name."</td>
						<td>".$row->emailid."</td>
						<td>".$row->degree."</td>
						<td>".$row->address."</td>
						<td>".$row->phone_number."</td>
						<td>".$row->country."</td>
						<td>
							<a href='edit.php?index=".$index."'>Edit</a>
							<a href='delete.php?index=".$index."'>Delete</a>
						</td>
					</tr>
				";

				$index++;
			}
		?>
	</tbody>
</table>
</body>
</html>