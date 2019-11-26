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
    //vùng làm việc của php
    echo "xin chào";
    //biến trong php
    $tenBien;
    //kiểu dữ liệu trong php: số nguyên, số thực, chuỗi, logic, mảng, đối tượng
    //1. số nguyên:
    $soNguyen = 10;
    echo $soNguyen;
    //2. số thực:
    $soThuc = 3.4;
    echo $soThuc;
    //3. chuỗi:
    $chuoi = "xin chào các bạn";
    echo $chuoi;
    //4. logic:
    $logic = 5 > 3; //true -> 1 là 1 biểu thức
    echo $logic;
    //5. toán gán và nối:
    $abc = "vietpro";
    echo "xin chào các bạn".$abc;
    //6. hằng:
    define('ABC', 6.7);
    echo ABC;
    //7. toán tử so sánh:
    //(!5<3) -> true
    // toán tử
    $a = 10;
    $b = $a++; //-> 10
    $b = ++$a; //-> 11
    echo $b = ++$a; //-> 12
    ?>
</body>
</html>