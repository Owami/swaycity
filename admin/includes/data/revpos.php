<?php
include('../../core/connect.php');
$query = '';
$date = date('Y');
$output = array();
$query = "SELECT * FROM cart ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
//
foreach ($result as $key => $value) {

    if (strpos($value['timestamp'], $date) !== false) {
        array_push($data, $value);
    }
}

//

$jan = array();
$feb = array();
$mar = array();
$apr = array();
$may = array();
$jun = array();
$jul = array();
$aug = array();
$sep = array();
$oct = array();
$nov = array();
$dec = array();
//
$filtered_rows = $statement->rowCount();
foreach ($data as $key => $value) {

    if (strpos($value['timestamp'], 'January') !== false) {
        array_push($jan, $value['total']);
    }

    if (strpos($value['timestamp'], 'February') !== false) {
        array_push($feb, $value['total']);
    }

    if (strpos($value['timestamp'], 'March') !== false) {
        array_push($mar, $value['total']);
    }

    if (strpos($value['timestamp'], 'April') !== false) {
        array_push($apr, $value['total']);
    }

    if (strpos($value['timestamp'], 'May') !== false) {
        array_push($may, $value['total']);
    }

    if (strpos($value['timestamp'], 'June') !== false) {
        array_push($jun, $value['total']);
    }

    if (strpos($value['timestamp'], 'July') !== false) {
        array_push($jul, $value['total']);
    }

    if (strpos($value['timestamp'], 'August') !== false) {
        array_push($aug, $value['total']);
    }

    if (strpos($value['timestamp'], 'September') !== false) {
        array_push($sep, $value['total']);
    }

    if (strpos($value['timestamp'], 'October') !== false) {
        array_push($oct, $value['total']);
    }

    if (strpos($value['timestamp'], 'November') !== false) {
        array_push($nov, $value['total']);
    }

    if (strpos($value['timestamp'], 'December') !== false) {
        array_push($dec, $value['total']);
    }
}


$totals = array(
    array_sum($jan),
    array_sum($feb),
    array_sum($mar),
    array_sum($apr),
    array_sum($may),
    array_sum($jun),
    array_sum($jul),
    array_sum($aug),
    array_sum($sep),
    array_sum($oct),
    array_sum($nov),
    array_sum($dec),
);
$dates = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
);

$chart = array(
    'date' => $dates,
    'total' => $totals
);



echo json_encode($chart);
