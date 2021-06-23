<?php

$paragrafoPrincipale = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, deleniti molestiae reiciendis doloribus minima, a vitae error totam sapiente sunt, illo placeat necessitatibus magni. Voluptatibus dolorem ex, aliquam libero veniam asperiores quod a tempore fuga eaque ipsa omnis repellendus, corrupti excepturi, ducimus suscipit praesentium alias quo quaerat sunt nisi. Itaque id ullam officiis natus in iusto rerum distinctio dolore dolorum accusamus mollitia vitae, provident perferendis minima, officia minus nesciunt aspernatur atque voluptatibus laudantium doloribus, quod dignissimos rem accusantium. Mollitia quos atque, ea ut dignissimos necessitatibus? Labore et repudiandae vel qui? Fugiat doloribus recusandae voluptatem dolore fugit hic amet quam unde.';

$paragrafi = explode(".", $paragrafoPrincipale);

var_dump($paragrafi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Paragrafo principale:</h3>
    <p><?php echo $paragrafoPrincipale ?></p>


    <h3>Paragrafi:</h3>
    <?php for ($i=0; $i < count($paragrafi) ; $i++) { 
        $parag = $paragrafi[$i]; ?>
        
        <p> <?php echo $parag; ?></p>
    <?php } ?>
</body>
</html>