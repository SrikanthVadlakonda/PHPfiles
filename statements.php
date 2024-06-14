<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statements</title>
    <style>
        .con1{
            height: 200px;
            width: 350px;
            background-color: burlywood;
            border-radius: 10px;
            text-align: center;
            padding-top:50px;
            margin-left: 300px;
        }

        .con2{
            height: 300px;
            width: 450px;
            background-color: aqua;
            border-radius: 10px;
            text-align: center;
            padding-top: 50px;
            margin-left: 300px;
        }
        </style>
</head>
<body>
    <div class="con1">
    <h4><u>conditional statements</u></h4>
    <?php
//i wake up
//if I'm hungry i eat breakfast


//if it is cloudly i'll take umbrella
//otherwise i'll take sunglasses
$isMale=true;
if($isMale){
    echo "you are male"."<br><br>";
}else{
echo "your are not male"."<br><br>";
}
?>
    </div>


 
 <div class="con2">

<h3><u>finding possible out comes using ifelse and else</u></h3>
 <?php
 $isMale=false;
 $isTall=true;
 if($isMale && $isTall){
    echo "you are a tall male";

 }elseif ($isMale && !$isTall){
echo "you are a short male";

 }elseif(!$isMale && $isTall){
 echo "you are not male, but you are tall";

 }else{
    echo "you are not male not tall";
 }
 ?>
 <p style="color:blue"> here two statements exicuted using multple conditions</p>
</div>
<?php
   $isrich=true;
   $iscandrive=true;
    if($isrich && $iscandrive){
        echo "can buy a new car";
    }else{
        echo "can't buy a new car";
    }
 ?>
</body>
</html>