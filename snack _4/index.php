<?php
//Creare un array con 15 numeri casuali,
//tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$newArray = [];

while (count($newArray) < 15) {
    
    $numeri = rand(99);

    if (!in_array($numeri, $newArray)) {
        $newArray[] = $numeri;
    }
}

var_dump($newArray)



?>
