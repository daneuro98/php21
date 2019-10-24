<?php 
require_once("connection.php");

$query = "SELECT * FROM categories";

// Thực thi câu lệnh
$result = $conn->query($query);
$categories = array();

while($row = $result->fetch_assoc()) { 
	$categories[] = $row;
}
foreach ($categories as $item){
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
  <h2 style="left: 40%;">Products </h2>
  <a href="category_add.php" class="btn btn-success">them</a>
   <div class="container">
     <table class="table">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Giá tiền</th>
        <th>Số lượng</th>
        <th>#</th>
      
      </tr>
    </thead>
    <tbody>
      <?php foreach( $categories as $key => $row )  { ?>
      <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['thumbnail'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td>
        	<a href="category_detail.php?id=<?= $row['id'] ?>" class="btn btn-info">aa</a>
        	                     <a href="category_edit.php?id=<?= $row['id'] ?>" class="btn btn-default">Sửa</a>
                     <a href="category_delete.php?id=<?= $row['id'] ?>" class="btn btn-warning">Xóa</a>

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