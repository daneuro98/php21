<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 align="center">DevMind - Education And Technology Group</h3>
        <h3 align="center">List Categories</h3>
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

        <a href="?mod=category&act=add" class="btn btn-primary">Add new</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $key => $category) {
                    ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$category['name']?></td>
                        <td><?=$category['description']?></td>
                        <td>
                            <a href="?mod=category&act=detail&id=<?=$category['id']?>" class="btn btn-info">Detail</a>
                            <a href="?mod=category&act=edit&id=<?=$category['id']?>" class="btn btn-warning">Edit</a>
                            <a href="?mod=category&act=delete&id=<?=$category['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>