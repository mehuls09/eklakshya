<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Marks</title>
</head>
<body>
    <?php
    $m1=$_GET["m1"];
    $m2=$_GET["m2"];
    $m3=$_GET["m3"];
    if ($m=='' && $m2=='' && $m3=='' ){
    ?>

    <form action="student.php" method="get"> 
    Mark 1: <input type="number" name="m1"><br>
    Mark 2: <input type="number" name="m2"><br>
    Mark 3: <input type="number" name="m3"><br>
    <input type="submit" value="calculate">
    </form>

    <?php } ?>
    
    <?php 
    
    $sum=$m1+$m2+$m3;
    echo "<br>Sum is: ",$sum;
    $avg=$sum/3;
    echo "<br>Average is:",$avg,"<br>";
    if($avg>90){
        echo"Grade- A+";
    }
    else if($avg>80&&$avg<=90){
        echo"Grade- B";
    }
    else if($avg>70&&$avg<=80){
        echo"Grade- C";
    }
    else{
        echo"Grade- F";
    } 
    ?>   
</body>
</html>