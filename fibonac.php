<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fib</title>
</head>
<body>
    <?php
    $n=$_GET["n"];
    if($num1==''){
    ?>    
    <form action="fibonac.php" method="get">
    <input type="number" name="n">
    <input type="submit" value="submit">
    </form>
    <?php
    }
    ?>

    <?php
        function fibonac($n){
        $num1=0;
        $num2=1;
        echo "Fibonacci series:$num1 $num2";
        for($i=2;$i<$n;$i++){
            $num3=$num1+$num2;
            echo" $num3";
            $num1=$num2;
            $num2=$num3;
        }
    }    
    fibonac($n);
    ?>
</body>
</html>