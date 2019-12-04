<?php 
	require_once('models/Connection.php');

	class User{
		var $connection_obj ;
		
		function __construct(){
			$this->connection_obj = new Connection();
		}
		
		function login($email,$password){
			$query = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."' ";

			//echo "$query";

			$result = $this->connection_obj->conn->query($query);

			$user = $result->fetch_assoc();

			//var_dump($user);

			return $user;
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
			

			$query = "SELECT * FROM users WHERE id=".$id;
			


			$result = $this->connection_obj->conn->query($query);

			$users = $result->fetch_assoc();

			return $users;
		}
		function update($data){
			$query ="UPDATE users SET name='".$data['name']."',description='".$data['description']."' WHERE id =".$data['id'];
			$status = $this->connection_obj->conn->query($query);

			return $status;
		}

		function delete($id){
			$query ="DELETE FROM users WHERE id =".$id;
			$status = $this->connection_obj->conn->query($query);

			return $status;
		}



	}
	
 ?>