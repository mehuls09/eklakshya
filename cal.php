<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calulator</title>
</head>
<body>
<?php
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $option=$_GET["option"];
    if ($num=='' && $num2=='' && $num3=='' ){
    ?>
    <form action="cal.php" method="get"> 
    Number 1 :<input type="number" name="num1">
    Operation :<input type="text" name="option">
    Number 2 :<input type="number" name="num2">
    <input type="submit" value="submit">
    </form>
    <?php
    }
    ?>
    <?php
             switch($option)
             {
                case '+':
                    echo "Addition: ",$num1+$num2;
                    break;
                case '-':
                    echo "Subtration: ",$num1-$num2;
                    break;
                case '*':
                    echo "Multiplication: ",$num1*$num2;
                    break;
                case '/':
                    echo "Division: ",$num1/$num2;
                    break;    
             }
    ?>
</body>
</html>