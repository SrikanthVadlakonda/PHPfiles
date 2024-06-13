<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forloop</title>
</head>
<body>
    <h1>Looping statements</h1>
    <?php
    for($i=1;$i<=10;$i++){
 echo $i."<br>";
    }
    ?>
    <?php
    $num=5;
    for($i=1;$i<=5;$i++){
        echo $num."X".$i."=".$num*$i."<br>";
    }
    ?>
    
</body>
</html>