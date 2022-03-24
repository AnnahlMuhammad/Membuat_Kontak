<?php 

function input($info)
{
    echo "$info ";
    $result = fgets(STDIN);
    return trim($result);
}



?>