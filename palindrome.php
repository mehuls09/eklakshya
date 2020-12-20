<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    <?php
    $string=$_GET["string"];
    if($string==''){
    ?>
        <form action="palindrome.php" method="get">
        Enter name: <input type="text" name="string">
        <input type="submit" value="submit">
        </form>
    <?php 
    }
    ?>
    <?php  
        $len=strlen($string);
        for($index=0; $index<=$len;$index++){
            if($string[$index]==$string[$len-1-$index]){
                echo"$string is Palindrome ";
                break;
            }
            else{
                echo"$string is not Palindrome";
                break;
            }
        }
    ?>    
</body>
</html>