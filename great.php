<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $num3=$_GET["num3"];
    ?>
     <form action="great.php" method="get">
         Num 1<input type="number" name="num1">
         Num 2<input type="number" name="num2">
         Num 3<input type="number" name="num3">
         <input type="submit" value="submit">
</form>
<?php 
    $max = $num1>$num2 ? ($num1>$num3 ? $num1 : $num3) : ($num2>$num3 ? $num2 : $num3);
    echo "$max<br>";
    ?>
</body>
</html>