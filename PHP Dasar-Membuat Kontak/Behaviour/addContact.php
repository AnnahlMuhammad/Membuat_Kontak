<?php 
require_once './Model/model.php';

function addContact(string $name){
    global $dataKontak;
    $number = count($dataKontak) + 1;

    $dataKontak[$number] = $name;
}



?>