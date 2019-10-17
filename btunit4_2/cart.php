<?php 
	session_start();

  $products = array(

                    'SP01'=> array('SP01','iphone6',9000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP02'=> array('SP02','iphone7',10000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP03'=> array('SP03','iphone7+',9000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP04'=> array('SP04','iphone8',9000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP05'=> array('SP05','iphone8+',9000000,100,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
  );



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
   <a href="cart_detail.php" title=""><button type="button" class="btn btn-success">View cart>>>></button></a>

   <div class="container">
     <table class="table">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá tiền</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach( $products as $key => $row )  { ?>
      <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><img style="width: 20%;height: 10%;" src="<?php echo $row[4] ?>" ></td>

        <td>
        	<a href="addToCart.php?msp=<?php echo $row[0] ?>" title=""><button type="button" class="btn btn-primary">Add to card</button></a>
        </td>
      </tr>

    <?php } ?>
    </tbody>
  </table>
  <a href="cart_detail.php" title=""><button type="button" class="btn btn-info">thanh toan</button></a>
   </div>        
  
</div>

</body>
</html>