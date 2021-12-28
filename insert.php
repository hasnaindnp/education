<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert.php</title>
	<style>
.body{
	width: 100%;
	height: 1000px;
	margin-top:150px
}
	</style>
</head>
<body>
<div class="body">
	<?php

	include('connection.php')
?>
<?php

	if (isset ($_POST['submit'])) {

	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['address'])){ 

	$name = $_POST['name'] ;
	$email = $_POST['email'] ;
	$age = $_POST['age'] ;
	$address = $_POST['address'] ;

	$sql = "insert into student(name,email,age,address) values ('$name','$email','$age','$address')";

	$result = mysqli_query($conn,$sql) or die(mysqli_error());

		if ($result) {
			echo "form submitted successfully";
		}
		else {
			echo "form not submitted";
		}
}
	else {
		echo "all fields required";
	}
}

?>
</div>

</body>
</html>
