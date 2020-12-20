<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap</title>
</head>
<body>
    <?php
     $num1=$_GET["num1"];
     $num2=$_GET["num2"];
    if($num1==''&&$num2==''){
    ?>
        <form action="swap.php" method="get">
        Enter number 1:<input type="text" name="num1">
        Enter number 2:<input type="text" name="num2">
        <input type="submit" value="submit">
        </form>

    <?php
    }
    ?>

    <?php
        echo "number 1: $num1 number 2: $num2 <br>";
        $temp=$num1;
        $num1=$num2;
        $num2=$temp;
        echo "Swapped :<br> number 1: $num1 number 2: $num2";
    ?>

    


    
</body>
</html>