<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentaa</title>
</head>
<body>
<?php
//cmt ne 
//ten bien
$ten = "Phuc ne";
$namsinh = 2003;
echo $ten . $namsinh ."hello <h1>worlkádasd</h1> ";
//hằng

define("tenn","phucne");
echo "In hằng ra" . tenn;

//step 11 Câu lệnh if else elseif
$a = 15;
if( $a <10){
    echo "a nho hon 10";
}
elseif ( $a<20){
    echo "a nho hon 20";
}
elseif ($a< 30){
    echo "a nho hon 30";
}else{
    echo "ulatr";
}

//step 12 Thực hành if else elseif

$ten_nguoi_dung = "phuc";
if($ten_nguoi_dung == "phuc"){
    echo "Người này tên là phúc";
}
else{
    echo "Người này không phải tên phúc";

}
//step 13 - Chuỗi
$Dodaicuachuoi ="Phucne";
echo strlen($Dodaicuachuoi); //đếm từng kí tự

$Demluongtu ="demluongtu ne";
echo str_word_count($Demluongtu); //đếm lượng từ

// step 14 - Kiểm tra kiểu dữ liệu
$checkKDL = "hihiphucne"; 
var_dump($checkKDL); // output string(10) "hihiphucne"

//Học PHP Bài 17 -Toán tử phần 2
$bien_a = 10;
$bien_b = 1;
if($bien_a >1 or $bien_b ==1){
    echo "Đúng"; //output Đúng
}

$noiA = "Phúc";
$noiB = "Nè";
$noiA .=$noiB;
echo $noiA;
// Step 19 - Câu lệnh Switch
$color = "màu đỏ";
switch ($color) {
    case 'màu đỏ':
    echo "Màu này màu đỏ";
    break;
    case 'màu đen':
        echo "Màu này màu đỏ";
    break;
    case 'màu xanh':
        echo "Màu này màu đỏ";
    break;    
    
    
}
// step 20 - Vòng lặp For
for($i=0; $i<=10 ;$i++){
    echo $i;
}
// step 20 - Vòng lặp while

$a = 1;
while ($a <= 10) {
    echo $a;
    $a++;
}
// step 21 - Vòng lặp Do While

$dowhile = 1;
do{
    echo $dowhile;
    $dowhile++;
}while($dowhile <=10);

// step 22 -  Vòng lặp Foreach

$tenne22 = array('Phúc nè', 'Chấn nè ', 'Khang nè');
foreach( $tenne22 as $valuene){
    echo $valuene;
}

// step 24 - Hàm isset()
$a24 = 23;
if(isset($a)){
    echo "biến a tồn tại";

}else{
    echo "bien a khong ton tai";
}
?>
</body>
</html>



