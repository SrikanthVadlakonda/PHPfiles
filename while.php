<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whileloop</title>
</head>
<body>
    
    <h1>while loop</h1>
    <?php
    //when we don't know the number of iteraations 
    // we use while loop or do while loop
    $i=1;
    while($i<=100){
     echo $i."<br>";
    $i=$i*2;
    }
    ?>
    <h2>do while loop</h2>
    <?php
    //output will be generate atleast one time
    $i=1;
    do{
        echo $i."<br>";
        $i=$i*4;
    }while($i<=100);
    ?>
</body>
</html>