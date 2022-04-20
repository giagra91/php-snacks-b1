<?php 
/**
 * Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo 
 * in tanti paragrafi. Ogni punto un nuovo paragrafo.
 */

    $newParagraph = "Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo";
    $newArray = explode(".", $newParagraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinto snack</title>
</head>
<body>
    
        <?php for ($i = 0; $i < count($newArray) ; $i++) {?> 
            <p> 
                <?php echo $newArray[$i] ?> 
            </p>
        <?php }?>
    

</body>
</html>