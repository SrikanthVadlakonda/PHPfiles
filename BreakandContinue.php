<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>breaka and continue</title>
</head>
<body>
    <!--break and continue can be used in switch or loops-->
<h1>break statement</h1>
<?php 
for($i=1;$i<=10;$i++){
    echo $i."<br>";
   
    if($i==7){
        echo "<h3>print stopped by the condition using break statement</h3>";
        break;
       
    }
}
?>

<h1>continue statement</h1>
<?php 
for($i=1;$i<=10;$i++){
   if($i==6){
     //to stop present iteration
     //used in loops only   
        continue;
   }
        echo $i."<br>";
       
}
?>
    
</body>
</html>
