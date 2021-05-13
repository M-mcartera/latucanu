<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latucanu";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql = "select * from comenzi";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		echo $row['id'] . "." .$row['client'] . $row['meniu']. "<br>";
	}

?>