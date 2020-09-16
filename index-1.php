<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->

<?php

$partiteBasket = [
    [
        'squadraCasa' => 'Pall. Cantù',
        'squadraOspite' => 'Virtus Bologna',
        'punteggioCasa' => '15',
        'punteggioOspite' => '55'
    ],
    [
        'squadraCasa' => 'Virtus Roma',
        'squadraOspite' => 'Auxilium Torino',
        'punteggioCasa' => '50',
        'punteggioOspite' => '10'
    ],
    [
        'squadraCasa' => 'Mens Sana Siena',
        'squadraOspite' => 'Petrarca',
        'punteggioCasa' => '30',
        'punteggioOspite' => '60'
    ],
    [
        'squadraCasa' => 'Pirelli Milano',
        'squadraOspite' => 'Scafati Basket',
        'punteggioCasa' => '60',
        'punteggioOspite' => '30'
    ]
];

// var_dump ($partiteBasket);
// var_dump(count($partiteBasket));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calendario Basket</title>
    </head>
    <body>

        <?php for ($i = 0; $i < count($partiteBasket); $i++) {
            echo $partiteBasket[$i]['squadraCasa']; ?> - <?php echo $partiteBasket[$i]['squadraOspite']; ?>
            | <?php echo $partiteBasket[$i]['punteggioCasa']; ?> - <?php echo $partiteBasket[$i]['punteggioOspite']; ?> <br>

        <?php } ?>

    </body>
</html>
