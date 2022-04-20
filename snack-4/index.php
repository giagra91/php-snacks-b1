<?php 
/**
 * Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
 */

    $newArray = [];
    while (count($newArray) < 15){
        $number = rand(1, 15);
        if (!in_array($number, $newArray)){
            $newArray[] = $number;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarto snack</title>
</head>
<body>
    <ul> 
        <?php for ($i = 0 ;$i < count($newArray) ; $i++) {?>
            <li> <?php echo $newArray[$i] ?></li>
        <?php }?>
    </ul>
</body>
</html>