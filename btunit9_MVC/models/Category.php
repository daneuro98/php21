
<?php 
require_once('models/Connection.php');
	class Category{
			var $connection_obj;
			function __construct(){
				$this->connection_obj = new Connection();
			}
			function getALL(){
				$connection_obj = new Connection();
			
			// Tạo kết nối đến CSDL
			
				$query = "SELECT * FROM categories WHERE deleted_at is null ";
				$result = $connection_obj->conn->query($query);
				$categories = array();
				while ($row = $result->fetch_assoc()) {
				    $categories[] = $row;
				}
				return $categories;
			}
			function find($id){
				$query = "SELECT * FROM categories WHERE id =" .$id;
				$result = $this->connection_obj->conn->query($query);
			
				$row = $result->fetch_assoc();
				return $row;
			}
			function create($data){
				$query ="INSERT INTO categories (name,description) VALUES ('".$data['name']."','".$data['description']."'); ";
				$status = $this->connection_obj->conn->query($query);
				return $status;
			}
			function update($data){
				$query ="UPDATE categories SET name='".$data['name']."',description='".$data['description']."' ,updated_at ='".date('y-m-d h:i:s')."' WHERE id =".$data['id']."";
				die($query);

				$status = $this->connection_obj->conn->query($query);

				return $status;
			}
			function delete($data){
			$query ="UPDATE categories SET deleted_at =' ".$data['deleted_at']."' WHERE id =".$data['id'];
		
			$status = $this->connection_obj->conn->query($query);
			return $status;
		}
}
 ?>
