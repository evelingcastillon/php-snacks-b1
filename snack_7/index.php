<?php
//Creare un array contenente qualche alunno di un’ipotetica classe.
//Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
//Stampare Nome, Cognome e la media dei voti di ogni alunno.
$alunni = [
    [
        'nome' => 'Alessio',
        'cognome' => 'Montanari',
        'media' => '6'
    ],
    [
        'nome' => 'Andrea',
        'cognome' => 'Gavardi',
        'media' => '7'
    ],
    [
        'nome' => 'Marta',
        'cognome' => 'Giuliani',
        'media' => '7'
    ],
    [
        'nome' => 'Giulia',
        'cognome' => 'Salemi',
        'media' => '6'
    ],
    [
        'nome' => 'Tommy',
        'cognome' => 'Alvaro',
        'media' => '5'
    ],
    [
        'nome' => 'Antonio',
        'cognome' => 'Montanari',
        'media' => '8'
    ],
    [
        'nome' => 'Ricardo Guillermo',
        'cognome' => 'Jara Rubio',
        'media' => '4'
    ],
    [
        'nome' => 'Eveling',
        'cognome' => 'Castillon',
        'media' => '10'
    ],
    [
        'nome' => 'Mery',
        'cognome' => 'Gomez',
        'media' => '8'
    ],
    [
        'nome' => 'Matteo',
        'cognome' => 'Martani',
        'media' => '5'
    ],
    [
        'nome' => 'Fiorella',
        'cognome' => 'Giordano',
        'media' => '7'
    ],
    [
        'nome' => 'Stefano',
        'cognome' => 'Giussani',
        'media' => '5'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .alunni{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .card{
        min-width: 200px;
        background-color: black;
        color: white;
        margin: 1rem;
        padding: 1rem;
        line-height: 12px;
        border-radius: 1rem;
    }
    h2{
        text-align: center;

    }
    </style>
</head>
<body>

    <h2>ALUNNI</h2>
    <div class="alunni">
    <?php foreach ($alunni as $key => $value) {
        //var_dump($value['nome']); ?>
        <div class="card">
            <p>Nome: <?php echo $value['nome']; ?></p>
            <p>Cognome: <?php echo $value['cognome']; ?></p>
            <p>Media: <?php echo $value['media']; ?></p>
        </div>

    <?php
    } ?>
    </div>
</body>
</html>