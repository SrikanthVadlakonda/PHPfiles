<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>decisionmaking</title>
</head>
<body>
    <style>
        .switch{
            height: 200px;
            width:350px;
            background:linear-gradient( to right,orange,aqua);
            margin-top: 200px;
            margin-left: 400px;
            text-align: center;
            align-items: center;
            padding-top: 50px;

        }
        </style>
    <div class="switch">
    <h5>getting result of user input using switch statement</h5>
    <form action="decisionmaking.php" method="post">
        Today is:
  <input type="text" name="day">
  <input type="submit" style="background-color: burlywood;">
    </form>
    <?php 
    $day= $_POST["day"];
    switch($day){
        case 1: echo "sunday";
                 break;

                 case 2: echo "monday";
                 break;
                 case 3: echo "tuesday";
                 break;
                 case 4: echo "wednesday";
                 break;
                 case 5: echo "thursday";
                 break;
                 case 6: echo "friday";
                 break;
                 case 7: echo "saturday";
                 break;
                 default: echo "enter correct value";

    }

    ?>
    </div>
    
</body>
</html>