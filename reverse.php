<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse</title>
</head>
<body>
    <?php
    $string=$_GET["string"];
    if($string==''){
    ?>
    
    <form action="reverse.php" method="get">
    Enter string: <input type="text" name="string">
    <input type="submit" value="submit">
    </form>
    <?php
    }
    ?>
    
    <?php
        function rev($string){
        $len=strlen($string);
        for($i=0,$j=$len-1; $i<$j; $i++,$j--){
           $temp=$string[$i];
           $string[$i]=$string[$j];
           $string[$j]=$temp;
        }
        return $string;        
    }
    $ans=rev($string);
    echo"Reverse: $ans ";
    ?>    
</body>
</html>