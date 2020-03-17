<?php

require('../modele/reservation_class.php');
require('../manager/reservation_manager.php');

$reservation = new reservation($_POST['nom'], $_POST['film'], $_POST['nb_place'], $_POST['3d']);
$manager = new Manager();
$manager->reservation($reservation);

?>
