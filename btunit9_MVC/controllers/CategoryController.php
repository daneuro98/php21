<?php 
		require_once('models/Category.php');
	class CategoryController{
		var $Model_obj;
		function __construct(){
			// echo "<br> QUẢN LÝ DANH MỤC BÀI VIẾT - CATEGORY IN Controller";
			$this->Model_obj = new Category();
		}
		function list(){
			$Model_obj = new Category();
			$categories = $Model_obj->getALL();
			require_once('views/category/list.php');
		}
		function detail(){
			$uid = $_GET['id'];
			$category = $this->Model_obj->find($uid);
			require_once('views/category/detail.php');
		}
		function add(){
			require_once('views/category/add.php');
		}
		function store(){
			$data = $_POST;
			$status=$this->Model_obj->create($data);
			if ($status == TRUE) {
				setcookie('msg','Thêm mới thành công',time() +5);
			}else{
				setcookie('msg','Thêm mới Không thành công',time() +5);
			}	
			header("Location: index.php?mod=category&act=list");
		}
		function edit(){
			$uid = $_GET['id'];
			$category = $this->Model_obj->find($uid);
			require_once('views/category/edit.php');
		}
		function update(){
			$data = $_POST;
			$status=$this->Model_obj->update($data);
			if ($status == TRUE) {
				setcookie('msg','Update thành công',time() +5);
			}else{
				setcookie('msg','Update Không thành công',time() +5);
			}	
			header("Location: index.php?mod=category&act=list");
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
			header("Location: index.php?mod=category&act=list");
		}
		function error(){
			echo "<br> >>> ACT 404";
		}
	}
 ?>