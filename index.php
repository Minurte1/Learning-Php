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
// step  25 - Function

function Step25(int $a25, int $b25 ){
$tongstep25 = $a25 + $b25;
return $tongstep25;
}

echo Step25(4,2);



// step  27 - Array cơ bản
$Namestep27 = array ("phuc", "hoang","ho");

echo $Namestep27[0] . $Namestep27[1] .$Namestep27[2];

$thongtinstep27  = array(
    array("thuong1","viet nam1","2003"),
    array("thuong2","viet nam2","2003"),
    array("thuong3","viet nam3","2003"),
);
foreach($thongtinstep27 as $valuene27){
   foreach ($valuene27 as $value27){
    echo $value27;
   }
   echo "<br>";
}

//step 28 - Làm việc với Array
$name28  = array("thuong3","viet nam3","2003");
//hienthiarray;
print_r($name28);
echo count($name28);
// them phan tu trong mang
$name28[2] = "phucne";
print_r($name28);
//xoa phan tu trong mang
unset($name28[2]);
print_r($name28);

//step 29 - Vòng lặp For với Array
$stepName29 = array("thuong3","viet nam3","2003");

for ($i29=0; $i29 <=2; $i29++) { 
  echo $stepName29[$i29];
  echo "<br>";
}
// step 30 - Vòng lặp For với Array p2
for ($i29=0; $i29 < count($stepName29); $i29++) { 
    echo $stepName29[$i29];
    echo "<br>";
  }
  // step  31 - Sắp xếp Array
  $mang31 = array(4, 2, 3);
  //sort sap xep theo thu tu tang dan
  sort($mang31);
  echo print_r($mang31);
  $mangchu31 = array("AWC","A","AB");
  sort($mangchu31);
  echo print_r($mangchu31);

  //rsort sap xep thu tu mang theo giam dan 
  rsort($mang31);
  echo print_r($mang31);
  rsort($mangchu31);
  echo print_r($mangchu31);

  // step 32 - String sang Array
  $a32= "27/01/2003";
  $mang32 = explode("/",$a32);
  var_dump($mang32);

  // step  33 - Array sang String
  $myArray33 = array("thuong3","viet nam3","2003");

  echo $Chuoi33 = implode(",",$myArray33);
header('location: xuly.php');
?>
</body>
</html>





