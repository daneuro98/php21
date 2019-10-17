<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
         Select image to upload:

        <input type="file" name="avatar"/>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form>
    <?php 
  
    
    if (isset($_POST['uploadclick']))
    {
       
        if (isset($_FILES['avatar']))
        {
           
            if ($_FILES['avatar']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                
                move_uploaded_file($_FILES['avatar']['tmp_name'], './folder/'.$_FILES['avatar']['upload']);
                echo 'File Uploaded';
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
    
?>
</body>
</html>