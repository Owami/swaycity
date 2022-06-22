<?php

$statement = $connect->prepare("SELECT * FROM inventory_3");
$statement->execute();
$datainva = $statement->fetchAll(PDO::FETCH_ASSOC);
$invacount = count($datainva);
$itemsa = array();
$cost2a = array();
$data2a = array();
foreach ($datainva as $key => $value) {
    array_push($itemsa, $value['quantity']);
    array_push($cost2a, $value['costper']);
    $v = $value['costper'] * $value['quantity'];
    array_push($data2a, $v);
}
$totalitemsa = array_sum($itemsa);
$totalcost2a = array_sum($cost2a);
$totalcost22a = array_sum($data2a);
?>