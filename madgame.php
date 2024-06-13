<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>madgame</title>
    <style>
        form{
            height: 180px;
            width:300px;
            border: black solid;
            border-radius: 15px;
            padding: 10px;
            color: brown;

        }
        input[type]{
            width: 200px;
            background-color: cyan;
            color: green;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size:  25px;
            border-radius: 10px;
        }
       
        </style>
</head>
<body>
    <h1>Mad game</h1>
    <p>adding content to stored data by user input</p>
    <form action="madgame.php" method="GET">
        Color:<input type="text" name="color"><br><BR>
        Plural Noun:<input type="text" name="pluralNoun"><br><br>
        Celebrity:<input type="text" name="celebrity"><br><br>
        <input type="submit" style="background-color: burlywood;">
    <br><br>
    <?php
    $Color=$_GET["color"];
    $PluralNoun=$_GET["pluralNoun"];
    $Celebrity=$_GET["celebrity"];

    echo "Roses are $Color <br>";
    echo "$PluralNoun is blue <br>";
    echo "I love $Celebrity <br>";
    ?>
    
</body>
</html>