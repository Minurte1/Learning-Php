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
    echo "Người này không phải tên phúc"
}
?>
</body>
</html>



