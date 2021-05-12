<?php
$menu = $_POST['menu'];
$client = $_POST['client'];

//echo $client;
//echo $menu;

include_once "connection.php";
$sql = "INSERT INTO comenzi(client) VALUES ($client)";
if($conn->query($sql) == TRUE){
	echo "post succesful";
}
else{
	echo "not succesful";
}







//nu este valid, trebuie de schimbat logica
/*
include_once "connection.php";
session_start();
$user = $_SESSION['user'];
echo $user;
$nume =  $_POST['nume'];
$prenume = $_POST['prenume'];
$phone = $_POST['phone'];


$sql = "CREATE DATABASE $user";
if($conn->query($sql) == TRUE){
	echo("database craeted succesful");
	$conn = new mysqli($servername, $username, $password, $user);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		$sql = "CREATE TABLE user(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nume VARCHAR(30) NOT NULL,
		prenume VARCHAR(30) NOT NULL,
		phone VARCHAR(30) NOT NULL,
		userid VARCHAR(10) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		//tabelul a fost creat cu succes trebuie de introdus date in el
		$sql = "INSERT INTO user(nume, prenume, phone, userid) VALUES ('$nume', '$prenume', '$phone', '$user')";
		if($conn->query($sql) == TRUE){
			echo " "."Datele au fost inserate cu succes";
			//se creaaza al doilea tabel, de order
			$sql = "CREATE TABLE comanda(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			produs VARCHAR(50) NOT NULL,
			cantitate VARCHAR(10) NOT NULL,
			pret VARCHAR(10) NOT NULL
		)";
		if($conn->query($sql) == TRUE){
			$conn->query("INSERT INTO comanda(produs, cantitate, pret) VALUES('burger ton','2','50')");		}
		else{
			echo "tabel order nu a fost creat";
		}
	}
else{
	echo " "."Datele nu au fost inserate";
}
} else {
	echo "Error creating table: " . $conn->error;
}
}
}
else{
	echo "<br"."Error creating database: " . $conn->error;
}*/
?>