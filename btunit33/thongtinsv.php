<?php 
	session_start();
		if(isset($_POST['student_id'])&&isset($_POST['student_name'])&&isset($_POST['student_phone'])){
		$student_id = $_POST['student_id'];
		$student_name =$_POST['student_name'];
		$student_phone = $_POST['student_phone'];
		$student_email = $_POST['student_email'];
		$student_sex =$_POST['student_sex'];
		
		setcookie('msg','Đăng kí thành công',time()+3);
		echo "<h2>THÔNG TIN SINH VIÊN</h2>";
		echo "<br>Mã sinh viên :" .$student_id;
		echo "<br>Tên Sinh viên :" .$student_name;
		echo "<br>Số điện thoại :" .$student_phone;
		echo "<br>Email :" .$student_email;
		echo "<br>Sex :" .$student_sex;
		
		};

 ?>