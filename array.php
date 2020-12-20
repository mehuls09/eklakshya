<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $name=$_GET["name"];
    if($name==''){
    ?>
     <form action="array.php" method="get">
     Enter name: <input type="text" name="string">
     <input type="submit" value="submit">
     </form>
    <?php 
    }
    ?>
    <?php 
    $usernames= array("Mehul","Raj","Rohan","Rajesh");
    for($index=0; $index<=3;$index++){
        if (in_array($name, $usernames, TRUE))
        {
            echo "Welcome $name"; 
                }
        else{
         echo "Wrong User";
        }
    }
    ?>
</body>
</html>