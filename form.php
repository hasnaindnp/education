<!DOCTYPE html>
<html>
<head>
	<title>Admission Form</title>
<style>

.body {
	height: 100%;
	width: 100%;
	margin-top: 80px;
}
.maindiv {
	width: 100%;
	height: 100%;
	margin-top: 115px;
}
.heading {
	height: 40px;
	width: 50%;
	margin-top: 100px;
	background-color: 	#F0E68C;
	text-align: center;
	line-height: 40px;
	font-size: 20px;
	margin-left: 25%;
	margin-right: 25%;
	border-radius: 6px 6px 6px 6px;
}
#
.form {
	height: 50px;
	width: 90%;
	margin-top: 10px;
}
.inputform {
	width: 200px;
	height: 40px;
}
</style>
<?php          include('index.php')    ?>
</head>
<body>
	

	<div class="maindiv">
	<div class="heading">Student Admission Form</div>

	<div class="form">
	<form class="inputform" action="insert.php" method="post">
		<label>Name</label><input type="text" name="name">

		<label>Email</label><input type="email" name="email"><br>

		<label>Age</label><input type="text" name="age"><br>

		<label>Address</label><input type="text" name="address"><br>

		<button type="submit" name="submit">Submit</button>
	</form>
	</div>
</div>
</body>
</html>