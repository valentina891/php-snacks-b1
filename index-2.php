<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// passo i tre parametri a GET:
$nome = $_GET['name'];
$mail = $_GET['mail'];
$eta  = $_GET['age'];
// var_dump($mail);
// var_dump($eta);

// verifico che il nome sia almeno di tre caratteri con:
// strlen($nome) <= 3;
// verifico che la mail contenga un punto e una @ con:
// (strpos($mail,'@') !== false) && (strpos($mail,'.') !== false);
// verifico che age sia un numero con:
// is_numeric($eta)

if (strlen($nome) <= 3 || strpos($mail,'@') == false || strpos($mail,'.') == false || !is_numeric($eta)) {
    $text = 'Accesso negato';
} else if (empty($nome) || empty($mail) || empty($eta)) {
    $text = 'Accesso negato';
} else {
    $text = 'Accesso riuscito';
}

echo $text;

?>
