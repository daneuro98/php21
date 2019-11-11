<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <h3 align="center">List Users</h3>
        <hr>
         <?php
        if (isset($_COOKIE['msg'])) {
            ?>
            <div class="alert alert-success">
                <strong>Congratulations!</strong> <?=$_COOKIE['msg']?>
            </div>
        <?php } ?>
        <?php
        if (isset($_COOKIE['error'])) {
            ?>
            <div class="alert alert-danger">
                <strong>Opp!</strong> <?=$_COOKIE['error']?>
            </div>
        <?php } ?>

        <a href="?mod=user&act=add" class="btn btn-success">Thêm mới</a>
        <table class="table">
            <thead>
                <th> Name </th>
                <th> Email </th>
                <th>#</th>
            </thead>
        <?php foreach($users as  $user){ ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="?mod=user&act=detail&id=<?=$user['id'] ?>" class="btn btn-primary">Xem</a>
                     <a href="?mod=user&act=edit&id=<?=$user['id'] ?>" class="btn btn-default">Sửa</a>
                     <a href="?mod=user&act=delete&id=<?=$user['id'] ?>" class="btn btn-warning">Xóa</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>