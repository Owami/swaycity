<?php
include ('core/connect.php');
$statement = $connect->prepare( "SELECT * FROM transactions");

$statement->execute();
$datatrans = $statement->fetchAll(PDO::FETCH_ASSOC);

$staffcount = count( $datatrans);
$inv1 = array();
$inv2 = array();
$saletype = array();
$s = array();
$y = array();
foreach ( $datatrans as $key => $value) {
    array_push($inv1, $value);
}




foreach ($inv1 as $key => $value) {
    $x = array($value['id'] => $value['sale_type']);
    foreach ($x as $x2 => $x3) {

        $xc = json_decode($x3);
        array_unshift($xc, $x2);
        // $key1 = array_search("Cash",$xc);
        if (in_array("Credit", $xc)) {

            array_push($s, $xc);
        } else{
            array_push($y, $xc);
        }
    }
}

print_r($y);
