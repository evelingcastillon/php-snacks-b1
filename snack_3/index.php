<?php

#Creare un array di array.

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

/* for ($i=0; $i < count($posts) ; $i++) { 
    $post = $posts[$i];
    var_dump($post);
} */



var_dump($posts['10/01/2019'][1]);


#Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY
#es 01-01-2007 e come valore un array di post associati a quella data.
#Stampare ogni data con i relativi post.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <div class="post">
    <?php for ($i=0; $i < count($posts); $i++) { 
        $post = array_keys($posts)[$i]; ?>
        
        <div class="singularpost">
            <div class="data"> <?php echo $post; ?> </div>
        
            <?php for ($g=0; $g < count($posts[$post]); $g++) {
                $singolpost = $posts[$post][$g]; ?>

                <h1 class="title"> <?php echo $singolpost['title'];?></h1>
                <h3 class="title"> <?php echo $singolpost['author'];?></h3>
                <p class="text"> <?php echo $singolpost['text'];?></p>
            <?php } ?>
        
        </div>
         

    <?php } ?>

    </div>
</body>
</html>