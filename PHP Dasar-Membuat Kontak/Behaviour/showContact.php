<?php 
require_once "./Model/model.php";

function showContact(){
    global $dataKontak;
    echo "====== Daftar Kontak ======".PHP_EOL;
    foreach ($dataKontak as $number => $value){
        echo "$number.  $value".PHP_EOL;
    }
}

// function showContact(){
//     global $dataKontak;
//     echo "===== Daftar Kontak =====".PHP_EOL;
//     foreach ($dataKontak as $key => $value){
//         echo "$key : $value" .PHP_EOL;
//     }

//     // for ($i = 1; $i <=count($dataKontak); $i++){
//     //     echo $i;
//     //     echo ". ";
//     //     echo $dataKontak[$i].PHP_EOL;
//     // }
    
// }



?>