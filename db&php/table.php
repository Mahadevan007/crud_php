<?php
	$Connection=mysqli_connect('127.0.0.1','root','');
	$Selected=mysqli_select_db($Connection,'record');
	$view_query = "SELECT * FROM stu_db";
	$Execute=mysqli_query($Connection,$view_query);
	while($DataRows=mysqli_fetch_array($Execute)){
		$Id=$DataRows['id'];
		$Name=$DataRows['name'];
		$Email = $DataRows['emailid'];
		$Degree = $DataRows['degree'];
		$Address = $DataRows['address'];
		$Phonenumber = $DataRows['phone_number'];
		$Country = $DataRows['country'];
	?>
	<tr>
	<td><?php echo $Id;?></td>
	<td><?php echo $Name;?></td>
	<td><?php echo $Email;?></td>
	<td><?php echo $Degree;?></td>
	<td><?php echo $Country;?></td>
	<td><?php echo $Phonenumber;?></td>
	<td><?php echo $Address?></td>
	<td><a href="Delete.php?Delete=<?php echo $Id;?>">Delete</a></td>
	<td><a href="Update.php?Update=<?php echo $Id;?>">Update</a></td>
	</tr>
<?php } ?>