<?php 
session_start();

  $products = array(

                    '01'=> array('01','Toán rời rạc'),
                    '02'=> array('02','Cấu trúc dữ liệu và giải thuật')
                );



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 style="left: 40%;">Document </h2>
		<a href="upload.php" title=""><button type="button" class="btn btn-success">Upload Document>>>></button></a>

		<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>name</th>

						<th>Action</th>
						<th>#</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach( $products as $key => $row )  { ?>
						<tr>
							<td><?php echo $row[0] ?></td>
							<td><?php echo $row[1] ?></td>

 
							<td>
								<a href="download.php?msp=<?php echo $row[0] ?>" title=""><button type="button" class="btn btn-primary"> Download</button></a>
							</td>
							<td>
								<a href="remove.php?msp=<?php echo $row[0] ?>" title=""><button type="button" class="btn btn-danger">Remove</button></a>
							</td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>        

	</div>

</body>
</html>