<?php

$statement = $connect->prepare("SELECT * FROM cart");
$statement->execute();
$datarev = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement = $connect->prepare("SELECT * FROM clients");
$statement->execute();
$dataclient = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement = $connect->prepare( "SELECT * FROM inventory_1");
$statement->execute();
$datainvc1 = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement = $connect->prepare( "SELECT * FROM inventory_2");
$statement->execute();
$datainvc2 = $statement->fetchAll(PDO::FETCH_ASSOC);

$invc1 = array();
$invc2 = array();
$invw1 = array();
$proft;

$clientcount = count($dataclient);
$revcount = count($datarev);
$client = array();
$rev = array();

foreach ($datarev as $key => $value) {
    
    array_push($rev, $value['total']);
}

foreach ( $datainvc1 as $key1 => $value1) {

    array_push($invc1, $value1['tcost']);
    $x = $value1[ 'quantity'] * $value1['pricepg'];
    array_push($invw1,$x);
}

foreach ( $datainvc2 as $key2 => $value2) {

    array_push($invc2, $value2['tcost']);
    $x = $value2[ 'quantity'] * $value2['costper'];
    array_push($invw1,$x);
}

$costt = array_sum($invc1) + array_sum($invc2);




$totalrev = array_sum($rev);

$profresult = $totalrev - $costt;
$invw2 = array_sum($invw1);