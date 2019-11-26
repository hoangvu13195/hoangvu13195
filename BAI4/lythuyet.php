<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //Phương thức POST
    //cú pháp: $_POST['name']; //name là giá trị ô input
    // if(isset($_POST['sbm'])){
    //     $user = $_POST['user'];
    //     $pass = $_POST['pass'];
    //     echo $user.'<br/>'.$pass;
    // }

    //Upload files
    // $name = $_FILES['giá_trị_ô_input_']['name']; //lấy được tên files
    // $_FILES['giá_trị_ô_input_']['size']; //lấy được kích cỡ files
    // $_FILES['giá_trị_ô_input_']['type']; //lấy được kiểu files
    // $_FILES['giá_trị_ô_input_']['error']; //lấy được files lỗi
    // $tmp_name = $_FILES['giá_trị_ô_input_']['tmp_name']; //thư mục tạm
    // move_uploaded_file($tmp_name, 'upload/'.$name);
    //ví dụ:
    if(isset($_POST['sbm'])){
        $file = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        if($error > 0){
            echo 'File upload bị lỗi!';
        }else{
            move_uploaded_file($tmp_name, 'upload/'.$file);
            echo 'Bạn đã upload thành công!'.'<hr/>';
        }
    }
    ?>
    <img src="<?php echo 'upload/'.$file; ?>" alt="" style="max-width: 30%;">
    <hr/>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Tải lên" name="sbm">
    </form>
    <!-- <form action="" method="POST">
        <input type="text" name="user">
        <input type="password" name="pass">
        <input type="submit" name="sbm">
    </form> -->
</body>
</html>