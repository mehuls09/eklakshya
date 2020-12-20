<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $option=$_GET["select"];
    if($select==''){
    ?>
       
    <form action="climate.php" method="get">
    <select name="select">
	<option>select</option>
	<option>Sunny</option>
    <option>Windy</option>
	<option>Winter</option>
	<option>Rainy</option>
    </select>
    <input type="submit" value="suggest">   
    </form>

    <?php
    }
    ?>

    <?php
      switch($option){
        
        case 'Sunny';
            echo "Eat icecream. Go for swimming";
            break; 
        case 'Windy';
            echo "Enjoy Cycling and kite flying";
            break;
        case 'Winter';
            echo "Drink hot soup and sleephis is Cold";
            break; 
        case 'Rainy';
            echo "Drink Tea and samosa. Enjoy rain";
            break;          
      } 
    ?>    
</body>
</html>