<?php
include('core/connect.php');
$statement = $connect->prepare("SELECT * FROM inventory_1");
$statement2 = $connect->prepare("SELECT * FROM inventory_2");
$statement->execute();
$datadropini = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement2->execute();
$datadropini2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
$staffcount = count($datadropini);
$inv1 = array();
$inv2 = array();


foreach ($datadropini as $key => $value) {
    array_push($inv1, $value);
     
}




foreach ($datadropini2 as $key => $value) {
    array_push($inv2, $value);
}
$sumarray = array_merge($inv1, $inv2);

