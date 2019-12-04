<?php 
	require_once('models/Post.php');
	require_once('models/Category.php');
	
	class PostController{
		var $model_obj;
		var $model_cate_obj;

		function __construct(){
			$this->model_obj = new Post();
			$this->model_cate_obj = new Category();
		}
		function add(){
			require_once('views/posts/add.php');
		}
		function detail(){
			$id = $_GET['id'];
			$posts = $this->model_obj->find($id);
			require_once('views/home/detail.php');
		}
		function store(){

			$data = $_POST;
			
			$file_name = $this->file_upload("public/home/img/blog-img","thumbnail",500000,array('JPG','jpg', 'png'));

			$data['thumbnail'] = "/".$file_name;
			$status=$this->model_obj->create($data);
			if ($status == TRUE) {
				setcookie('msg','Đăng mới thành công',time() +5);
			}else{
				setcookie('msg','Đăng mới Không thành công',time() +5);
			}	
			header("Location: index.php?mod=admin&act=index");
		}
		function list(){
			$model_obj = new Post();
			$Posts = $this->$model_obj->getALL();
			require_once('views/home/users/list.php');
		}
		function list_ms(){


			$categories = $this->model_cate_obj->getAll();
			
			$posts = $this->model_obj->ALL_myself();
			require_once('views/posts/list.php');

		}
		function edit(){
			$id = $_GET['id'];
			$post = $this->model_obj->find($id);
			require_once('views/posts/edit.php');
		}

		function update(){
			$data = $_POST;
			$status = $this->model_obj->update($data);
			if($status == TRUE){
				setcookie('msg','Update thành công',time() + 5);
			}else{
				setcookie('msg','Update thất bại',time() + 5);
			}
			header("Location: index.php?mod=posts&act=list");
		}

		function delete(){
			
			$uid = $_GET['id'];
			$status = $this->model_obj->delete($uid);
			if($status == TRUE){
				setcookie('msg','Xóa thành công',time() + 5);
			}else{
				setcookie('msg','Xóa thất bại',time() + 5);
			}
			header("Location: index.php?mod=post&act=list_ms");
		}

		function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
		$target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$error_arr =array();
		
		// Check if file already exists
		if (file_exists($target_file)) {
		    $error_arr[] = "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES[$input_name]["size"] > $max_size) {
		    $error_arr[] = "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if(!in_array($imageFileType, $formats_allowed_array)) {
		    $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
		    $uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $error_arr[] = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
		        return $_FILES[$input_name]["name"];
		    } else {
		        $error_arr[] = "Sorry, there was an error uploading your file.";
		    }
		}
		return $error_arr;
	}

		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>