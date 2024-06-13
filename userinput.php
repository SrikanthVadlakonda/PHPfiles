<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userinput</title>
    <style>
        body{
            height: 100vh;
            width: 100%;
            background:radial-gradient(aqua,lightgreen);
            background-position: center;
            background-size: cover;
           }
           .container{
            height: 250px;
            width: 350px;
            margin-top: 200px;
            margin-left: 400px;
            border: white solid;
            border-radius: 10px;
            text-align: center;
           }
           h1{
            color: brown;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
          font-size: 25px;
        }
        p{
            color: grey;
            font-size: 15px;
            padding-left: 200px;

        }
        </style>
</head>
<body>
    <div class=container>
<h1>Using get to add user input</h1>

    <form action="userinput.php" method="get">
        Name:<input type="text" name="name"> <br>
        <input type="submit">
    </form>
    <br>
   <?php
   echo $_GET["name"];
   ?>
   <p> !!your data submitted</p>
    </div>
</body>
</html>