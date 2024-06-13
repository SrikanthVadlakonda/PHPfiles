<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postvsget</title>
</head>
<body>
    <h1>using get method</h1>
    <form action="postvsget.php" method="post">
        name:<input type="text" name="name"><br>
        Password: <input type="password" name="pass">
        <br>
        <input type="submit">
    </form>
    <br><br>
    <?php 
    echo $_POST["name"]."<br>";
    echo $_POST["pass"];
    ?>
</body>
</html>
