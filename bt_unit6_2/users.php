<?php 
require_once("connection.php");

$query = "SELECT * FROM users";

// Thực thi câu lệnh
$result = $conn->query($query);
$users = array();

while($row = $result->fetch_assoc()) { 
	$users[] = $row;
}
foreach ($users as $item){
// 	echo "<pre>";

// print_r($item);
// echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="left: 40%;">Users </h2>
  <a href="user_add.php" class="btn btn-success">them</a>
   <div class="container">
     <table class="table">
    <thead>
      <tr>
        <th>Tên người dùng</th>
        <th>email</th>
        <th>avatar</th>
        <th>#</th>
      
      </tr>
    </thead>
    <tbody>
      <?php foreach( $users as $key => $row )  { ?>
      <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['avatar'] ?></td>
        <td>
        	<a href="user_detail.php?id=<?= $row['id'] ?>" class="btn btn-info">aa</a>
        	                     <a href="user_edit.php?id=<?= $row['id'] ?>" class="btn btn-default">Sửa</a>
                     <a href="user_delete.php?id=<?= $row['id'] ?>" class="btn btn-warning">Xóa</a>

        </td>

        <
      </tr>

    <?php } ?>
    </tbody>
  </table>
  <a href="cart_detail.php" title=""><button type="button" class="btn btn-info">thanh toan</button></a>
   </div>        
  
</div>

</body>
</html>