<?php 
require_once "./Behaviour/showContact.php";
require_once "./Model/model.php";
require_once "./Utils/inputData.php";
require_once "./Views/viewAddContact.php";
require_once "./Views/viewRemoveContact.php";

function viewShowContact(){
    while(true){
        showContact();
        echo "MENU :".PHP_EOL;
        echo "1. Add Contact".PHP_EOL;
        echo "2. Remove Contact".PHP_EOL;
        echo "3. Close".PHP_EOL;
        $pilihan = input("Pilih menu : ");

        if ($pilihan == 1){
            viewAddContact();
        } else if ($pilihan == 2){
            viewRemoveContact();
        } else if ($pilihan == 3){
            break;
        } else {
            echo "Pilihan menu tidak dimengerti";
        }
    }
    echo "Sampai Jumpa";
}




?>