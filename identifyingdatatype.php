<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doc</title>
    <style>
        .container{
            text-align: center;
            color: brown;
        }
        </style>
</head>
<body>
    <div class="container">
    <pre>
    <?php
    echo "<h1> Identifying the data types<h1>";
   $x=5;
   $y="hello";
   $z=5.23;
   $a="A";

   var_dump($x);
   var_dump($y);
   var_dump($z);
   var_dump($a);
   var_dump(true);
   var_dump([10,3,56]);

    ?>
    </pre>
    </div>
</body>
</html>