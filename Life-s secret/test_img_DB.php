<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>

<body >

<?php 
$conn = new mysqli("localhost","root","","AA");
$stmt = $conn->prepare("INSERT INTO `AA`.`st` (`ID`, `name`, `age`) VALUES (4, 'A', '55');");

$stmt->execute();

$r = $stmt->get_result();
/*
while ($row = $r->fetch_assoc()) {
	echo $row["name"]."<br>";
	echo $row["age"]."<br>";
	
			
}*/


 ?>


</body>
</html>