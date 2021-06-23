<?php 
//Utilizzare questo array: https://pastebin.com/CkX3680A.
//Stampiamo il nostro array mettendo gli insegnanti in
//un rettangolo grigio e i PM in un rettangolo verde.

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
    <title>Document</title>
    <style>
        .gray{
            background-color: gray;
        }
        .green{
            background-color: green;
        }
    </style>
</head>
<body>
    <?php foreach ($db as $key => $value) {
        //var_dump($key);?>

        <div class="<?php echo $key === 'pm' ? 'green' : 'gray'?>">

            <?php for ($i=0; $i < count($value); $i++) { 
                //var_dump($value[$i]['name']); ?>
            <p>Nome: <?php echo $value[$i]['name']; ?></p>
            <p>Cognome: <?php echo $value[$i]['lastname']; ?></p>
            <?php
        } ?>
        </div>
    
    <?php
    }?>
</body>
</html>