<?php 
	require_once('models/User.php');
	
	class UserController{
		var $model_obj;

		function __construct(){
			$this->model_obj = new User();
		}

		function list(){
			$model_obj = new User();
			$users = $model_obj->getALL();
			require_once('views/user/list.php');
		}
		function detail(){
			$id = $_SESSION['user']['id'];
			$users = $this->model_obj->find($id);
			require_once('views/home/users/list.php');
		}
		function delete(){
			
			$uid = $_GET['id'];
			$status = $this->model_obj->delete($uid);
			if($status == TRUE){
				setcookie('msg','Xóa thành công',time() + 5);
			}else{
				setcookie('msg','Xóa thất bại',time() + 5);
			}
			header("Location: index.php?mod=user&act=list");
		}
		function update(){
			$data = $_POST;
			$status = $this->model_obj->update($data);
			if($status == TRUE){
				setcookie('msg','Update thành công',time() + 5);
			}else{
				setcookie('msg','Update thất bại',time() + 5);
			}
			header("Location: index.php?mod=user&act=list");
		}
		function edit(){
			$uid = $_GET['id'];
			$user = $this->model_obj->find($uid);
			require_once('views/user/edit.php');
		}




		function login(){
			require_once("views/admin/login.php");
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>