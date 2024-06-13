<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filehandeling</title>
</head>
<body>
<!--to store the out put perminently
1.open
2.read
3.write
.4.close
5.delete-->
<?php
$file=fopen("c://output.txt","W");
fwrite($file,"Hello World");
fclose($file);
echo  "successfully completed";
?>
    
</body>
</html>