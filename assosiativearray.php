<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AssociativeArray</title>
</head>
<body>
    <h1>Associative Array</h1>
    <?php
    $stu=array("Name"=>"Abhishek",
    "location"=>"hyd","age"=>26);
    foreach($stu as $res1=>$res2){
        echo $res1."=".$res2."<br>";
    }

    ?>
    
</body>
</html>