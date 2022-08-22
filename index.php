<?php /* PHP Badwords
nome repo: php-badwords
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

*/

$stringa;
$censura='***';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>PHP Badwords</h1>


    <p>
        <?php
        var_dump($_GET['badword']);
        $stringa='Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse unde voluptate doloremque sint sunt quod consequuntur quae quas, voluptatibus nesciunt voluptates pariatur tempora. Corrupti, aperiam mollitia! Nemo corrupti voluptas porro.';
        echo '<br>';
        echo str_replace($_GET['badword'], $censura, $stringa);
       

        ?>
    </p>

   
    
</body>
</html>