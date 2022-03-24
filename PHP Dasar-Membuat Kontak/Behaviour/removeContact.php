<?php 
require_once "./Model/model.php";

function removeContact(int $number):bool
{
    global $dataKontak;
    if ($number > count($dataKontak)){
        return false;
    }

    for ($i = $number; $i > count($dataKontak); $i++){
        $dataKontak[$number] = $dataKontak[$number+1];
    }

    unset($dataKontak[count($dataKontak)]);
    return true;
}



?>