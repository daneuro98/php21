<?php 

require_once("connection.php");
$data = $_POST;
// echo "<pre>";
// 	print_r($data);
// echo "</pre>";


 $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";
// var_dump($query);
// Thực thi câu lệnh
    $status = $conn->query($query);
    if ($status==true) {
    	header("Location: categories.php");
    	# code...
    }else{
    	header("Location: categories.php");
    }


 ?>