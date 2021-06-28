<?php 
/* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$partite = [
    [
        "squadraCasa" => "Brescia",
        "squadraOspite" => "Pesaro",
        "puntiSquadraCasa" => 97,
        "puntiSquadraOspite" => 62
    ],
    [
        "squadraCasa" => "Virtus Bologna",
        "squadraOspite" => "Avellino",
        "puntiSquadraCasa" => 90,
        "puntiSquadraOspite" => 96
    ],
    [
        "squadraCasa" => "Milano",
        "squadraOspite" => "Pistoia Basket",
        "puntiSquadraCasa" => 107,
        "puntiSquadraOspite" => 83
    ],
    [
        "squadraCasa" => "Venezia",
        "squadraOspite" => "Varese",
        "puntiSquadraCasa" => 97,
        "puntiSquadraOspite" => 93
    ]
];
//var_dump($partite);

for ($i = 0; $i< count($partite); $i++){

    $cont = $partite[$i];
    //var_dump($partite[$i]);
    echo "<ul>";
    echo "<li>" .  $cont["squadraCasa"] . " - " .  $cont["squadraOspite"] . " | " .  $cont["puntiSquadraCasa"] . " - " .  $cont["puntiSquadraOspite"] . "</li>" . "<br>";
    echo "</ul>";
}

?>
