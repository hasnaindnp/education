<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>View Students</title>
<style>

.body {

	margin: 0px;
	padding: 0px;
}
.heading {
	height: 40px;
	width: 100%;
	margin-top: 80px;
	background-color: 	#F0E68C;
	text-align: center;
	line-height: 40px;
	font-size: 20px;
	border-radius: 6px 6px 6px 6px;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 98%;
  margin: auto;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: ;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1E90FF;
  color: white;
}
.addstudentbutton {
  background-color: #dcdcdc;
  color: black;
  padding: 6px;
  font-size: 14px;
  border: none;
  cursor: pointer;
  margin: 0px;
  border-radius: 6px;
}
.addstudentbutton a {
	color: white;
}
.addstudent {
	width: 100%;
	height: 40px;
	text-align: center;
	background-color: #F5F5F5;
}

</style>

</head>

<body>
	
<div class="maindiv">
	<?php          include('index.php')    ?>
	
	<div class="heading">Manage Students</div>
	<div class="addstudent"><button type="button" class="btn btn-success">Add Student</button></div>
		<table id="customers">
  		<thead>
  		<tr class="tr">
    	<th>#</th>
    	<th>Student Name</th>
    	<th>Email</th>
    	<th>Age</th>
    	<th>Address</th>
    	<th>#</th>
    	<th>Student Name</th>
    	<th>Email</th>
    	<th>Age</th>
    	<th>Address</th>
    	<th><input type="checkbox"></th>

  		</tr>
		</thead>	

<?php
include('connection.php')?>
<?php
//this is the query of slecting record from student table
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn,$sql);
// to find the number of record returned
$num= mysqli_num_rows($result);
echo "$num records found";
echo "<br>";

//Display the rows returned by the query
if ($num> 0) {
	//$row=mysqli_fetch_assoc($result);
	//echo var_dump ($row);
	while($row=mysqli_fetch_assoc($result)){
?>

		<tr class="tr">
    		<td><?php echo $row ['id'];?></td>
    		<td><?php echo $row ['name'];?></td>
    		<td><?php echo $row ['email'];?></td>
    		<td><?php echo $row ['age'];?></td>
    		<td><?php echo $row ['address'];?></td>
    		<td><?php echo $row ['id'];?></td>
    		<td><?php echo $row ['name'];?></td>
    		<td><?php echo $row ['email'];?></td>
    		<td><?php echo $row ['age'];?></td>
    		<td><?php echo $row ['address'];?></td>
  		</tr>


<?php

	}
}

?>

		</table>
<br><br><br>
</div><
</body>
</html>

