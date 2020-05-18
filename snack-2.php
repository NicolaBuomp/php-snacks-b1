<?php

/**
 * Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = $_GET;

//Presenza valori

if (empty($data['name']) || empty($data['mail'])|| empty($data['age'])){
    echo 'Non sono presenti tutti i parametri';
}
// Name
elseif ( strlen($data['name']) <= 3){
    echo 'Accesso Negato';
}
// mail
elseif ( strpos($data['mail'], '@') === false ||  strpos($data['mail'], '.') === false){
    echo 'Accesso Negato';
}
// age
elseif ( ! is_numeric($data['age'])){
    echo 'Accesso Negato';
}
else{
    echo 'Accesso Riuscito';
}


?>