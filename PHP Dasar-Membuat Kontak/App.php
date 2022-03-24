<?php 
require_once "Model/model.php";
require_once "Behaviour/showContact.php";
require_once "Behaviour/addContact.php";
require_once "Behaviour/removeContact.php";
require_once "Behaviour/showContact.php";
require_once "Utils/inputData.php";
require_once "Views/viewShowContact.php";
require_once "Views/viewAddContact.php";
require_once "Views/viewRemoveContact.php";

echo "Your Contact".PHP_EOL;
viewShowContact();

?>