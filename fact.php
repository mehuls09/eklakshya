<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    $num1=$_GET["num1"];
    if($num1==''){
    ?>
        <form action="fact.php" method="get">
        <input type="number" name="num1">
        <input type="submit" value="submit">
        </form>

    <?php
    }
    ?>

    <?php
        $fact=1;
        for($index=$num1; $index>=1;$index--){
            $fact=$fact*$index;
        }
        echo "Factorial: $fact";
    ?>
</body>
</html>