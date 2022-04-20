<?php 
/**
 * Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
 */

    $newArray = [];
    for ($i = 0 ; $i < 15 ; $i++){
        $number = rand(1, 100);
        if (!in_array($number, $newArray) || count($newArray) < 15){
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