<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        .try{
            display:flex;
            flex-direction: column;
            font-size: 25px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: chartreuse;

        }
        </style>
</head>
<body>

    <?php
    $friends=array("kevin  ","karen   ", "oscar  ","jim  ");
   foreach ($friends as $friend) {
    echo "<div class='try'>" . $friend . "</div>";
    }
    echo count($friends);

    ?>
    
    
</body>
</html>