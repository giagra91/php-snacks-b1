<?php 
/**
 * Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array 
 * mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 */

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sesto snack</title>
</head>
<body>

    <ul class="grey-box" >
        <?php
            $teachers = $db["teachers"];
            for ($i = 0 ; $i < count($teachers) ; $i++ ){ 
        ?>
        <li> <?php echo $teachers[$i]["name"] . ", " . $teachers[$i]["lastname"] ?> </li>
        <?php }?>
    </ul>

    <ul class="green-box" >
        <?php
            $pm = $db["pm"];
            for ($x = 0 ; $x < count($pm) ; $x++ ){ 
        ?>
        <li> <?php echo $pm[$x]["name"] . ", " . $pm[$x]["lastname"] ?> </li>
        <?php }?>
    </ul>

</body>
</html>