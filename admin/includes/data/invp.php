<?php

$statement = $connect->prepare("SELECT * FROM inventory_2");
$statement->execute();
$datainvp = $statement->fetchAll(PDO::FETCH_ASSOC);
$invpcount = count($datainvp);
$items = array();
$cost2 = array();
$data2 = array();
foreach ($datainvp as $key => $value) {
    array_push($items, $value['quantity']);
    array_push($cost2, $value['costper']);
    $v = $value['costper'] * $value['quantity'];
    array_push($data2, $v);
}
$totalitems = array_sum($items);
$totalcost2 = array_sum($cost2);
$totalcost22 = array_sum($data2);
?>