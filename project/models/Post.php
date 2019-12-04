<?php 
	require_once('models/Connection.php');

	class Post{
		var $connection_obj ;

		
		function __construct(){
			$this->connection_obj = new Connection();
		}
		function getALL(){


				$connection_obj = new Connection();
			
			// // Tạo kết nối đến CSDL
			
				$query = "SELECT * FROM posts WHERE deleted_at is null ";
				$result = $connection_obj->conn->query($query);
				
				
				$Posts = array();
				// while ($row = $result->fetch_assoc($result)) {
				//     $Posts[] = $row;
				// }
			
				

				while ($row = $result->fetch_assoc()) {
				    $Posts[] = $row;
				}
				return $Posts;
			}
		function create($data){

				$user_id = $_SESSION['user']['id'];
				$query ="INSERT INTO posts (title,description,thumbnail,content,slug,user_id,category_id) VALUES ('".$data['title']."','".$data['description']."','".$data['thumbnail']."','".$data['content']."','".$data['slug']."',$user_id,'".$data['category_id']."'); ";
				
				$status = $this->connection_obj->conn->query($query);
				return $status;
			}

		function All_myself(){
			$query = "SELECT * FROM posts WHERE user_id =".$_SESSION['user']['id']." ORDER BY id DESC";
			
			$result = $this->connection_obj->conn->query($query);
			$Posts = array();
			while ($row = $result->fetch_assoc()) {
				    $Posts[] = $row;
				}
				return $Posts;




		}
		function find($id){
			

			$query = "SELECT * FROM posts WHERE id =".$id;
			


			$result = $this->connection_obj->conn->query($query);

			$post = $result->fetch_assoc();


			return $post;
		}
		function update($data){
			$query ="UPDATE posts SET title='".$data['title']."',description='".$data['description']."' WHERE id =".$data['id'];
			$status = $this->connection_obj->conn->query($query);

			return $status;
		}

		function delete($id){
			$query ="DELETE FROM posts WHERE id =".$id;
			$status = $this->connection_obj->conn->query($query);

			return $status;
		}
		function get_post_cateid($category_id){
			$query = "SELECT * FROM posts WHERE category_id=".$category_id;

			$result = $this->connection_obj->conn->query($query);
			$Posts = array();

			while ($row = $result->fetch_assoc()) {
				    $Posts[] = $row;
				}
				return $Posts;

		}
		



	}
	
 ?>