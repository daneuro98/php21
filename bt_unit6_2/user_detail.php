<?php 
	require_once("connection.php");
	$id =$_GET["id"];
	$query = "SELECT * FROM categories where id=".$id;
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	print_r($row);
 ?>