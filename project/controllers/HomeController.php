<?php 
	require_once('models/Category.php');
	require_once('models/Post.php');
	
	class HomeController{
		var $model_obj;
		var $model_cate_obj;

		function __construct(){
			$this->model_obj = new Post();
			$this->model_cate_obj = new Category();
		}

		function index(){

			
			$posts = $this->model_obj-> getALL();
			$categories = $this->model_cate_obj-> getALL();

			require_once('views/home/trangchu.php');
			
		}
		function get_cate(){
			if (isset($_GET['slug'])) {
				$slug=$_GET['slug'];
			}
			$categories =$this->model_cate_obj->category_slug($slug);
			$posts = $this->model_obj->get_post_cateid($categories['id']);
			require_once('views/home/danhmuc_slug.php');
		}
		function detail(){
			
			$id =  $_GET['id'];
			$post = $this->model_obj->find($id);
			
			require_once('views/home/detail.php');


			// require_once('views/home/Post.php');
		}
		function about_us(){
			require_once('views/home/about_us.php');
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>