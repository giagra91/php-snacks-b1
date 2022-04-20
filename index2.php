<?php 
/**
     * Secondo snack
     *
     *  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * - name sia più lungo di 3 caratteri,
     * - che mail contenga un punto e una chiocciola e 
     * - che age sia un numero.
     * 
     *  Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
     */
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second snack</title>
</head>
<body>

    <p> 
        <?php 
            $userInfos = $_GET;
            var_dump($userInfos);
            if ( (strlen($userInfos[`name`]) > 3) 
                && (strpos($userInfos[`mail`], "@") && strpos($userInfos[`mail`], ".")) 
                && (is_numeric($userInfos[`age`])) ){
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            };
        ?> 

    </p>

</body>
</html>