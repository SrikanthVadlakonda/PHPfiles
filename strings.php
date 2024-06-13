<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <h1>String replace</h1>
    <?php
    //string replace
    $in="Giraffe Acadamy";
    $phrase="Giraffe Academy";
    $sub= "hello world";
    
    echo ("$in")."<br>";
    echo str_replace("Giraffe", "human", $phrase)."<br>";
   echo substr($sub,5,6);

    ?>
    
</body>
</html>