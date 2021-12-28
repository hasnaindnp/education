
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DB Connection</title>
<style>

.body {
	height: 100%;
	width: 100%;
	margin-top: 100px;
}

</style>
</head>
<body class="body">
	<div>
		<?php
		include ('index.php')?>
<?php

//connecting to the database
$server= "localhost" ;
$username= "root" ;
$password= "" ;
$dbname= "education" ;
// create a connection
$conn = mysqli_connect($server , $username , $password , $dbname) ;
//to check connecton status

if($conn) {
	echo "connection is successful";
}
	else {
	echo "connection is missing";
	}
?>

	</div>

</body>
</html>