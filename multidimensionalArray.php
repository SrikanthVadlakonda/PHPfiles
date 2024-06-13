<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensionalArray</title>
    <style>
        .body{
            color: aqua;
        }
        h1{
            color: brown;
        }
      
        </style>
</head>
<body>
    <h1>Multi Dimensional Array</h1>
    <!--storing arry in other array-->
    <!--can store any data type-->
    <?php 
    $emp=array(array(101,  " abhi ",  35000),
         array(102," tobi ",25000),
         array(103," den ",20000));
         
         for($row=0;$row<3;$row++){
            for($col=0;$col<3;$col++){

                echo $emp[$row] [$col]."    ";
            }
            echo "<br>";
         }
         ?>
         <h1>Using for each keyword</h1>
         <?php 
    $emp=array(array(01,  " jan", "usa"),
         array(2," late","uk"),
         array(3," nav ","japan"));

         foreach($emp as $detalis){
            foreach($detalis as $answer){
                echo $answer."  ";
            }
            echo "<br>";
         }
         

         ?>
    
</body>
</html>