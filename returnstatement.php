<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>returnstatement</title>
</head>
<body>
    <?php
    function demo($num){
        echo "hello";
        return $num*$num*$num;
        echo "retun statement break the function and doesnt print below data of it";
    }
    echo demo(4);
    ?>
</body>
</html>