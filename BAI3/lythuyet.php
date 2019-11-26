<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="lythuyet.php?name=Frank Lampard&age=41&address=England">Lampard</a><br>
    <a href="lythuyet.php?name=Ngolo Kante&age=28&address=France">Kante</a><br>
    <a href="lythuyet.php?name=Jorginho&age=26&address=Italy">Jorginho</a><br>
    <hr>
    <?php
    //phương thức GET
    //$_GET['tham_số'];
    //truyền tham số lên url: index.php?tham_số1=giá_trị1&tham_số1=giá_trị1&tham_số1=giá_trị1
    //isset($bien); => ktra sự tồn tại của biến >> trả về 2 giá trị true hoặc false

    if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['address'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $address = $_GET['address'];
        echo $name.'<br/>'.$age.'<br/>'.$address;
    }
    
    //mảng: vòng lặp foreach
    //2 cách khai báo
    //$array = array(giá_trị1, giá trị2, giá trị3, giá trị4,...);
    //$array = [giá_trị1, giá trị2, giá trị3, giá trị4,...];
    $array = [1,2,'ba','bốn',true,5.1,'bàn','ghế'];
        // echo '<pre>';
        // var_dump($array);
        // print_r($array);
        // echo '<pre/>';
        // echo $array[5];
        foreach ($array as $key => $value) {
            echo $key.'=>'.$value.'<br/>';
        }
    //json
    //cú pháp
    //đọc file json
        $data_json = file_get_contents('data.json');
    //chuyển file sang dạng mảng
        $result_json = json_decode($data_json, true);
    // print_r($result_json)
        foreach ($result_json as $key => $value) {
            echo $value.'<br/>';
        }
    //chuyển mảng vào json: dữ liệu cũ bị thay thế bằng dữ liệu mới
        $data_en_json = json_encode($result_json, JSON_UNESCAPED_UNICODE);
    //pull vào json
        file_put_contents('data.json', $data_en_json);
    ?>
</body>
    <!-- <form action="" method="GET">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="submit" name="sbm">
    </form> -->
</html>