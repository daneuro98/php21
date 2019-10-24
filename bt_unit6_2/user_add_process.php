<?php 

require_once("connection.php");
$data = $_POST;
// echo "<pre>";
// 	print_r($data);
// echo "</pre>";


 $query = "INSERT INTO users (name, email, avatar) VALUES ('".$data['name']."','".$data['email']."','".$data["avatar"]."')";
// var_dump($query);
// Thực thi câu lệnh
    $status = $conn->query($query);
    if ($status==true) {
    	header("Location: users.php");
    	# code...
    }else{
    	header("Location: users.php");
    }


 ?>