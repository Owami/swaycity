<?php
$statementrec = $connect->prepare("SELECT * FROM transactions");

$statementrec->execute();
$datatrans = $statementrec->fetchAll(PDO::FETCH_ASSOC);

$staffcount = count($datatrans);
$invr1 = array();
$s = array();
$y = array();
foreach ($datatrans as $key => $value) {
    array_push($invr1, $value);
}



foreach ($invr1 as $key => $value) {
    $x = array($value['id'] => $value['sale_type']);
    foreach ($x as $x2 => $x3) {

        $xc = json_decode($x3);
        array_unshift($xc, $x2);
        // $key1 = array_search("Cash",$xc);
        if (in_array("Credit", $xc)) {

            array_push($s, $xc);
        } elseif (in_array("Cash", $xc)) {
            array_push($y, $xc);
        } 
    }
}
$counts = count($s);
$county = count($y);
?>