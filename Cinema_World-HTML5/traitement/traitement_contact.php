<?php

require('../modele/modele_contact.php');
require('../manager/manager_contact.php');

$contact = new contact($_POST['nom'], $_POST['mail'], $_POST['message']);
$manager = new manager_contact();
$manager->contact($contact);

?>
