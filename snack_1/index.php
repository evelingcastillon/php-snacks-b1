<?php
    #Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
$partite = [
    [
        'squadraCasa' => 'Olimpia Milano',
        'squadraOspite' => 'Cantù',
        'puntiCasa' => '55',
        'puntiOspite' =>'60'
    ],
    [
        'squadraCasa' => 'Fortitudo Bologna',
        'squadraOspite' => 'Virtus Bologna',
        'puntiCasa' => '78',
        'puntiOspite' =>'50'
    ],
    [
        'squadraCasa' => 'Varese',
        'squadraOspite' => 'Treviso',
        'puntiCasa' => '75',
        'puntiOspite' =>'60'
    ],
    [
        'squadraCasa' => 'Stella Azzurra',
        'squadraOspite' => 'Mens Sana Siena',
        'puntiCasa' => '59',
        'puntiOspite' =>'80'
    ],
    [
        'squadraCasa' => 'Reggiana',
        'squadraOspite' => 'Juvecaserta',
        'puntiCasa' => '65',
        'puntiOspite' =>'68'
    ],
    [
        'squadraCasa' => 'Scandone Avellino',
        'squadraOspite' => 'Auxilium Torino',
        'puntiCasa' => '37',
        'puntiOspite' =>'64'
    ],
    [
        'squadraCasa' => 'Triestina',
        'squadraOspite' => 'Libertas Livorno',
        'puntiCasa' => '68',
        'puntiOspite' =>'62'
    ],
    [
        'squadraCasa' => 'Vanoli Cremona',
        'squadraOspite' => 'Petrarca',
        'puntiCasa' => '72',
        'puntiOspite' =>'61'
    ],
    [
        'squadraCasa' => 'Dinamo Sassari',
        'squadraOspite' => 'Partenope',
        'puntiCasa' => '59',
        'puntiOspite' =>'63'
    ],
    [
        'squadraCasa' => 'New Basket Brindisi',
        'squadraOspite' => 'Teramo Basket',
        'puntiCasa' => '60',
        'puntiOspite' =>'81'
    ],
    [
        'squadraCasa' => 'Aquila Trento',
        'squadraOspite' => 'Messina',
        'puntiCasa' => '75',
        'puntiOspite' =>'35'
    ]
    ];
    #Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    #Stampiamo a schermo tutte le partite con questo schema.
    #Olimpia Milano - Cantù | 55-60
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
    <?php for ($i=0; $i < count($partite) ; $i++) { 
        $partita = $partite[$i];
    ?>
        
        <div class="squadra">
            <span> <?php echo $partita['squadraCasa']; ?> </span> - <span> <?php echo  $partita['squadraOspite']; ?></span> | <span><?php echo $partita['puntiCasa'] ?></span>-<span><?php echo $partita['puntiOspite'] ?> </span>

        </div>

    <?php } ?>
</body>
</html>