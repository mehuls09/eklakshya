<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vowels</title>
</head>
<body>
    <?php
     $sentence=$_GET["sentence"];
    if($sentence==''){
    ?>
    
        <form action="vowel.php" method="get">
        Enter sentence: <textarea name="sentence"></textarea>
        <input type="submit" value="submit">
        </form>

    <?php
    }
    ?>

    <?php

        function vow($sentence){
            $count=0;
            for($i=0; $i<=strlen($sentence);$i++){
                if($sentence[$i]=="a" ||$sentence[$i]=="e" ||$sentence[$i]=="i" ||$sentence[$i]=="o" ||$sentence[$i]=="u"){
                $count++;
                }
            }
        return $count;    
        }
    $total=vow($sentence);
    echo("Total vowels are: $total");
    ?>

    


    
</body>
</html>