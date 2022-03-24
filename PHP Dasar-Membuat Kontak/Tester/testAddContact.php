<?php 
require_once "./Model/model.php";
require_once "./Behaviour/addContact.php";
require_once "./Behaviour/showContact.php";
require_once "./Behaviour/removeContact.php";

addContact("Annahl");
addContact("Sigit");
addContact("Ahnaf");
addContact("Julio");
showContact();
removeContact(3);
showContact();

?>