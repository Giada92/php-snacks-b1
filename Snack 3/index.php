<?php 
/* Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

/* $randomNumber = rand(1, 50);
echo $randomNumber;
 */
$newArray = [];

while(count($newArray) < 15) {
    $randomNumber = rand(1, 50);
    if(!in_array($randomNumber, $newArray)) {
        $newArray[] = $randomNumber;
    }
}
var_dump($newArray);
?>
