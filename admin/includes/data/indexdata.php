<?php
include('../../core/connect.php');
$query = '';
$output = array();
$query = "SELECT * FROM cart ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();

$filtered_rows = $statement->rowCount();
foreach ($result as $row) {
  
    array_push($data, $row['total']);
}
$totalrev = array_sum($data);
$sutotal = array('totals' => $totalrev);
echo json_encode($sutotal);
