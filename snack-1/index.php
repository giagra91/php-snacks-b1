<?php 
/**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e 
     * punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
     *  Olimpia Milano - Cantù | 55-60
     *
     */

    $array = [
        [
            "homeTeam" => "Olimpia Milano",
            "homeTeamPoints" => "55",
            "guestTeam" => "Cantù",
            "guestTeamPoints" => "33",
        ],
        [
            "homeTeam" => "Olimpia Milano",
            "homeTeamPoints" => "55",
            "guestTeam" => "Cantù",
            "guestTeamPoints" => "33",
        ],
        [
            "homeTeam" => "Olimpia Milano",
            "homeTeamPoints" => "55",
            "guestTeam" => "Cantù",
            "guestTeamPoints" => "33",
        ],
        [
            "homeTeam" => "Olimpia Milano",
            "homeTeamPoints" => "55",
            "guestTeam" => "Cantù",
            "guestTeamPoints" => "33",
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First snack</title>
</head>
<body>

    <ul> 
        <?php for ($i = 0; $i < count($array) ; $i++){ ?>
            <li> <?php echo $array[$i]["homeTeam"]; ?> - <?php echo $array[$i]["guestTeam"]; ?> 
            | <?php echo $array[$i]["homeTeamPoints"] . " - " . $array[$i]["guestTeamPoints"]; ?>
            </li>
        <?php } ?>
    </ul>
    
</body>
</html>