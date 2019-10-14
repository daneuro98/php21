<?php 
	session_start();
		if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['phone'])){
		$id = $_POST['id'];
		$name =$_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$sex =$_POST['sex'];
		
		setcookie('msg','Đăng kí thành công',time()+3);
		echo "<h2>THÔNG TIN SINH VIÊN</h2>";
		echo "<br>Mã sinh viên :" .$id;
		echo "<br>Tên Sinh viên :" .$name;
		echo "<br>Số điện thoại :" .$phone;
		echo "<br>Email :" .$email;
		echo "<br>Sex :" .$sex;
		
		};

 ?>