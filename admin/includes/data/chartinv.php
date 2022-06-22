<?php
include('../../core/connect.php');
$query = '';
$date = date('Y');
$output = array();
$query = "SELECT strain,quantity FROM inventory_1 ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$query = "SELECT p_name,quantity FROM inventory_2 ";
$statement = $connect->prepare($query);
$statement->execute();

$result2 = $statement->fetchAll();
$data = array();
$data2 = array();
//
foreach ($result as $key => $value) {
        
        array_push($data, $value['quantity']);

}
foreach ($result2 as $key => $value) {
    
    array_push($data2, $value['quantity']);
}

//

$s = array(
    array_sum($data),
    array_sum($data2),
);

$x = array(
    'Medicine',
    'Products',
);

$chart = array(
    'Product' => $x,
    'Quantity' => $s
);



echo json_encode($chart);
