<!DOCTYPE>

<html>
	<head>
		<title>Connection</title>
	</head>
	<body>
		<?php 
		$Connection=mysqli_connect('127.0.0.1','root','');
		if($Connection){
			echo "database connected <br>";
		}else{
			error.mysqli_connect();
		}
		$Selected=mysqli_select_db($Connection,'record');
		if($Selected){
			echo "Database Selected";
		}else{
			error.mysqli_select_db();
		}
		?>
	</body>
</html>