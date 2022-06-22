<?php

$statement = $connect->prepare("SELECT * FROM inventory_1");
$statement->execute();
$datainv = $statement->fetchAll(PDO::FETCH_ASSOC);
$invcount = count($datainv);
$grams = array();
$cost = array();
$data = array();
foreach ($datainv as $key => $value) {
    array_push($grams, $value['quantity']);
    array_push($cost, $value['costper']);
    $w = $value['costper'] * $value['quantity'];
    array_push($data, $w);
}
$totalgrams = array_sum($grams);
$totalcost = array_sum($cost);
$totalcost1 = array_sum($data);
?>