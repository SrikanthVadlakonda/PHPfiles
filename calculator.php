<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="int1">
        <br>
        <input type="number" name="int2">
        <br>
        <input type="submit">
</form>
Answer: <?php echo $_GET["int1"]+ $_GET["int2"] ?>
    
</body>
</html>