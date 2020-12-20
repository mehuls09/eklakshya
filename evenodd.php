<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenodd</title>
</head>
<body>
    <?php
        for($index=1; $index<=100;$index++){
            if($index %2 == 0){
                echo "even: $index <br>";
            }
            else{
                echo"odd: $index <br>";
            }
        }
    ?>
</body>
</html>