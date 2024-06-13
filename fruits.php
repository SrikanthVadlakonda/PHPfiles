<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
</head>
<body>
    <h1>Choose fruits you want</h1>
    <form action="fruits.php" method="post">
   Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
   oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
   pears: <input type="checkbox" name="fruits[]" value="pears"><br>
<input type="submit" value="BUY">
    </form>
    <?php
    $fruits= $_POST["fruits"];
    echo $fruits[1];
    ?>
    
</body>
</html>