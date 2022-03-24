<?php 
require_once "./Model/model.php";
require_once "./Behaviour/removeContact.php";
require_once "./Behaviour/showContact.php";

showContact();
removeContact(3);
showContact();
?>