
<?php 
require_once('models/Connection.php');
	class User{
			var $connection_obj;
			function __construct(){
				$this->connection_obj = new Connection();
			}
			function getALL(){
				$connection_obj = new Connection();
			
			// Tạo kết nối đến CSDL
			
				$query = "SELECT * FROM users WHERE deleted_at is null ";
				$result = $connection_obj->conn->query($query);
				$users = array();
				while ($row = $result->fetch_assoc()) {
				    $users[] = $row;
				}
				return $users;
			}
			function find($id){
				$query = "SELECT * FROM users WHERE id =" .$id;
				$result = $this->connection_obj->conn->query($query);
			
				$row = $result->fetch_assoc();
				return $row;
			}
			function create($data){
				$query ="INSERT INTO users (name,email) VALUES ('".$data['name']."','".$data['email']."'); ";
				$status = $this->connection_obj->conn->query($query);
				return $status;
			}
			function update($data){
				$query ="UPDATE users SET name='".$data['name']."',email='".$data['email']."' ,updated_at ='".date('y-m-d h:i:s')."' WHERE id =".$data['id']."";
				
				

				$status = $this->connection_obj->conn->query($query);

				return $status;
			}
			function delete($data){
			$query ="UPDATE users SET deleted_at =' ".$data['deleted_at']."' WHERE id =".$data['id'];
		
			$status = $this->connection_obj->conn->query($query);
			return $status;
		}
}
 ?>
