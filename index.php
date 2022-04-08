<?php
/* Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/
$frase = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore quod ipsa adipisci et non molestias ut deserunt ipsam, porro consequatur dolorem libero id vel pariatur provident aut cupiditate aliquam velit?';
$bad_word = $_GET['word'];
$censured_frase = str_replace( $bad_word, '***', $frase)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mariano Maselli">
    
    
    <title>XXX</title>
</head>
<body>
    <h2>Original</h2>
    <span><?php echo $frase ?> </span>
    <p>La lunghezza del paragrafo è <?php echo strlen($frase) ?> </p>
    
    <h2>Redacted</h2>
    <span><?php echo $censured_frase ?> </span>
    <p>La lunghezza del paragrafo è <?php echo strlen($censured_frase) ?> </p>
</html>