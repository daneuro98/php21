<?php
require ("sinhvien.php");


$data = array();
$errors = array();

$is_update_action = false;

if (!empty($_GET['id']))
{
    $data = getStudent($_GET['id']);
    $is_update_action  = true;
}

if (!empty($_POST['add']))
{

    // Lấy thông tin
    $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['student_name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['student_email'] = isset($_POST['email']) ? $_POST['email'] : '';

    // Validate
    if (empty($data['student_id'])){
        $errors['student_id'] = 'Ban chua nhap ID';
    }

    if (empty($data['student_name'])){
        $errors['student_name'] = 'Ban chua nhap name';
    }

    if (empty($data['student_email'])){
        $errors['student_email'] = 'Ban chua nhap Email';
    }

    //  Nếu dữ liệu hợp lệ thì thực hiện thao tác update thông tin
    // đồng thời redirect về trang danh sách
    if (empty($errors)){
        updateStudent($data['student_id'], $data['student_name'], $data['student_email']);
        header("Location:student-list.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <a href="student-list.php">BACK</a>
       <!--  <form method="post">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Id</td>
                    <td>
                        <input type="text" name="id" value="<?php echo !empty($data['student_id']) ? $data['student_id'] : ''; ?>" />
                        <?php echo !empty($errors['student_id']) ? $errors['student_id'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo !empty($data['student_name']) ? $data['student_name'] : ''; ?>" />
                        <?php echo !empty($errors['student_name']) ? $errors['student_name'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" value="<?php echo !empty($data['student_email']) ? $data['student_email'] : ''; ?>" />
                        <?php echo !empty($errors['student_email']) ? $errors['student_email'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="add_student" value="<?php echo ($is_update_action) ? "Cap nhat" : "Them moi"; ?>" /></td>
                </tr>
            </table>
        </form> -->

        <!DOCTYPE html>
        <html>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <title></title>
        </head>
        <body>
            <div class="container">

                <form action="danhsach.php" method="GET" >
                    <div class="form-group">
                        <label for="formGroupExampleInput">ID</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="id input" name="student_id">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Name </label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Name input" name="student_name">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Phone number</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="phone input" name="student_phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="student_email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2" style="display: block;">Sex</label> 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="male" name="sex">
                            <label class="form-check-label" for="inlineCheckbox1" >male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="female"name="sex">
                            <label class="form-check-label" for="inlineCheckbox2">female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="other" name="sex">
                            <label class="form-check-label" for="inlineCheckbox3" >other</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </body>
        </html>

    </body>
    </html>