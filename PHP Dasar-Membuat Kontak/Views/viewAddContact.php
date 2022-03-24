<?php 
require_once "./Behaviour/addContact.php";
require_once "./Model/model.php";
require_once "./Behaviour/showContact.php";
require_once "./Utils/inputData.php";

function viewAddContact(){
    showContact();
    echo "===== Menambah Contact =====".PHP_EOL;
    $pilihan = input("Tambah Contact (99 untuk batal) :");

    if ($pilihan == 99){
        echo "Batal menambah kontak".PHP_EOL;
    }
    else {
        addContact($pilihan);
        echo "Berhasil menambahkan $pilihan ke dalam list.".PHP_EOL;
    }
}





?>