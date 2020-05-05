<?php

require('../modele/modele_contact.php');
require('../manager/manager_contact.php');

$contact = new contact($_POST['pseudo'], $_POST['commentaire']);
$manager = new manager_contact();
$manager->contact($contact);

?>
