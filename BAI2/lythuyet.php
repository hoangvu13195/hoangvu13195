<?php
// //1.biểu thức điều kiện: if-if else - else if - switch case
// //if(biểu thức){
// //  thực thi 1 hành động (code)
// // }
// //vd:
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'đây là số nguyên dương';
// }
// //vd2:
// $a = 0;
// if($a == 0){
//     echo 'đây là a = 0';
// }
// //if else
// //cú pháp:
// // if(bt){
// // code 
// // }else{
// // code 
// // }
// //vd3:
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'đây là số nguyên dương';
// }else{
//     echo 'đây là số nguyên âm';
// }
// //vd4: kết quả khác 3 thì in ra sai, và ngược lại
// $a = 1;
// $b = 2;
// if($a + $b != 3){
//     echo 'sai';
// }else{
//     echo 'đúng';
// }
// //else if
// // if(bt){
// // code 
// // }else if(bt){
// // code
// // }else{
// // code
// // }
// //vd5:
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'đây là số nguyên dương';
// }else if($soNguyen < 0){
//     echo 'đây là số nguyên âm';
// }else{
//     echo 'đây là số 0';
// }
// //2.vòng lặp: while, for, do -while
// //while()
// //cú pháp
// // while(bt){
// //     code 
// // $a++
// // }
// //vd: in ra các số chạy từ 5 đến 9, và mỗi số tương ứng với 1 dòng
// $i = 5;
// while($i < 10){
//     echo $i.'<br/>';
//     $i++;
// }
// //vd: in ra các số từ 10 đến 1, và có dấu phẩy, dấu chấm sau số 1
// $so = 10;
// while($so > 0){
//     if($so > 1){
//         echo $so.',';
//     }else{
//         echo $so.'.';
//     }
//     $so--;
// }
// // for(khởi tạo bt; bt; tăng/giảm bt){
// //     code 
// // }
// //vd: dùng for để lấy ra các số chẵn từ 10 đến 0
// for($i = 10; $i >= 0; $i -= 2){
//     echo $i.',';
// }
// //vd: dùng for để tính tổng của dãy số từ 1 đến 100
// $tong = 0;
// for($i = 1; $i <= 100; $i++){
//     $tong +=$i;
// }
//     echo $tong;
for($i = 2; $i <= 9; $i++){
    for($a = 1; $a <= 10; $a++){
    echo $i.'x'.$a.'='.$i*$a.',';
    }
    echo '<br/>';
}
?>