<?php 
/* Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */


//var_dump(strlen($_GET["name"]) > 3);
//var_dump(strpos($_GET["mail"], "."));
//var_dump(strpos($_GET["mail"], "@"));
//var_dump(is_numeric($_GET["age"]));
//var_dump(empty($_GET["name"]));
//var_dump(empty($_GET["mail"]));
//var_dump(empty($_GET["age"]));



if (empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])){
    echo "ERROR";
} else {
    if( strlen($_GET["name"]) > 3 && strpos($_GET["mail"], ".") && strpos($_GET["mail"], "@") && is_numeric($_GET["age"])) {
        echo "Accesso Riuscito";
    }else {
        echo "Accesso Negato";
    };
};

?>
