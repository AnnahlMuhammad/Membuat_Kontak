<?php 
require_once "./Behaviour/removeContact.php";
require_once "./Model/model.php";
require_once "./Behaviour/showContact.php";
require_once "./Utils/inputData.php";

function viewRemoveContact(){
    showContact();
    global $dataKontak;
    echo "===== Delete Contact =====".PHP_EOL;
    $pilihan = input("Hapus kontak nomor (99 untuk batal) :");
    if ($pilihan == 99){
        echo "Batal menghapus kontak".PHP_EOL;
    } else if ($pilihan > count($dataKontak)){
        echo "Kontak dengan nomor $pilihan tidak terdaftar.".PHP_EOL;
    } 
    else{
        removeContact($pilihan);
        echo "Berhasil menghapus kontak $pilihan dari dalam list.".PHP_EOL;
    }
}


?>