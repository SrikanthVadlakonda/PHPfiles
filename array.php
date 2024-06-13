<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <h2>index array</h2>
   <?php
//creating index array
   $cars=array("volvo ","BMW ","Audi ","Toyota ");
   //adding index position to print the variable in aaray
   echo "$cars[0]",  "$cars[1]",  "$cars[2]", "$cars[3]"."<br>"."<br>";

   //adding variables in array using loop
   $city=array("hyd","mumbai","delhi","bangolore");
   $length=count($cars);

   for($i=0;$i<$length;$i++)
   echo $city [$i]."<br>"."<br>";

   $digits=array("one","two","three","four","five","six","seven","eight","nine","ten");
  foreach($digits as $result){
  echo $result."<br>";
  }
   ?>
</body>
</html>