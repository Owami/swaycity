<?php
include('../../core/connect.php');
$query = '';
$date = date('Y');
$output = array();
$query = "SELECT costper,p_name,quantity FROM inventory_1 ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$query = "SELECT costper,p_name,quantity FROM inventory_2 ";
$statement = $connect->prepare($query);
$statement->execute();

$result2 = $statement->fetchAll();

$query = "SELECT costper,p_name,quantity FROM inventory_3 ";
$statement = $connect->prepare($query);
$statement->execute();

$result3 = $statement->fetchAll();
$data = array();
$data2 = array();
$data3 = array();
//
foreach ($result as $key => $value) {
        $v = $value['costper'] * $value[ 'quantity'];
        array_push($data, $v);
}
foreach ($result2 as $key => $value) {
    $w = $value['costper'] * $value['quantity'];
    array_push($data2, $w);
}
foreach ($result3 as $key => $value) {
    $w = $value['costper'] * $value['quantity'];
    array_push($data3, $w);
}
//
$s = array(
    array_sum($data),
    array_sum($data2),
    array_sum($data3),
);

$x = array(
    'Women',
    'Men',
    'Accessories'
);


$chart = array(
    'Product' => $x,
    'Quantity' => $s
);



echo json_encode($chart);
