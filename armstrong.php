<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong</title>
</head>
<body>
    <?php
    $num1=$_GET["num1"];
    if($num1==''){
    ?>     
        <form action="arm.php" method="get">
        Enter Number :<input type="number" name="num1">
        <input type="submit" value="submit">
        </form>
    <?php 
    }
    ?>

    <?php      
     function arm($num1) {
        $tot=0;  
        $x=$num1;  
        while($x!=0)  
        {  
        $n=$x%10;  
        $tot=$tot+$n*$n*$n;  
        $x=$x/10;  
        }  
        if($num1==$tot)  
        {  
        echo "Armstrong number";  
        }  
        else  
        {  
        echo "Not Armstrong number";  
        }         
    }  
    arm($num1);    
    ?>
</body>
</html>