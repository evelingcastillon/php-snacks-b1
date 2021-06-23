<?php

#Passare come parametri GET name, mail e age e verificare
/* $_GET['name'];
$_GET['mail'];
$_GET['age']; */
$pattern = '/.+@.+\.[A-z]*/m';
if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    
}
#(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
#che mail contenga un punto e una chiocciola e che age sia un numero.
#Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

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

    <form action="">
        <input type="email" name="email" id="email" required>
        <input type="text" name="nome" id="nome">
    </form>
</body>
</html>