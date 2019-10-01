<!DOCTYPE html>
<html>
<head>
	<title>View from database</title>
</head>
<link rel="stylesheet" type="text/css" href="view.styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
	<div id="table-div">
	<a href="insert_form.html">Insert another data</a>
	<table width="1000" border="5" align="center" cellpadding="10px">
		<caption>View from database</caption>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email ID</th>
			<th>Degree</th>
			<th>Country</th>
			<th>Phone Number</th>
			<th>Address</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
		<?php include('C:\xampp\htdocs\phptask\db&php\table.php')?>
	</table>
	</div>
</body>
</html>