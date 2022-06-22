<?php

$statement = $connect->prepare("SELECT * FROM staff WHERE id = :id");
$statement->execute(array(':id' => $_SESSION[ 'id_main_twh']));
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement = $connect->prepare( "SELECT * FROM cart WHERE posuser = :posuser");
$statement->execute(array(':posuser' => $_SESSION['id_main_twh']));
$data2 = $statement->fetchAll(PDO::FETCH_ASSOC);
