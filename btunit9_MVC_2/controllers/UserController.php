<?php 
		require_once('models/User.php');
	class UserController{
		var $Model_obj;
		function __construct(){
			// echo "<br> QUẢN LÝ DANH MỤC BÀI VIẾT - user IN Controller";
			$this->Model_obj = new User();
		}
		function list(){
			$Model_obj = new User();
			$users = $Model_obj->getALL();
			require_once('views/user/list.php');
		}
		function detail(){
			$uid = $_GET['id'];
			$user = $this->Model_obj->find($uid);
			require_once('views/user/detail.php');
		}
		function add(){
			require_once('views/user/add.php');
		}
		function store(){
			$data = $_POST;
			$status=$this->Model_obj->create($data);
			if ($status == TRUE) {
				setcookie('msg','Thêm mới thành công',time() +5);
			}else{
				setcookie('msg','Thêm mới Không thành công',time() +5);
			}	
			header("Location: index.php?mod=user&act=list");
		}
		function edit(){
			$uid = $_GET['id'];
			$user = $this->Model_obj->find($uid);
			require_once('views/user/edit.php');
		}
		function update(){
			$data = $_POST;
			$status=$this->Model_obj->update($data);
			if ($status == TRUE) {
				setcookie('msg','Update thành công',time() +5);
			}else{
				setcookie('msg','Update Không thành công',time() +5);
			}	
			header("Location: index.php?mod=user&act=list");
		}
		function delete(){
			$data = $_GET;
			$data['deleted_at'] = date('y-m-d h:i:s');
			$status = $this->Model_obj->delete($data);
			if($status == TRUE){
				setcookie('msg','Xóa thành công',time() + 5);
			}else{
				setcookie('msg','Xóa thất bại',time() + 5);
			}
			header("Location: index.php?mod=user&act=list");
		}
		function error(){
			echo "<br> >>> ACT 404";
		}
	}
 ?>
