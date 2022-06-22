<?php

$statement = $connect->prepare("SELECT id,name,surname,contact,status,position,gender,award,perf,u_level FROM staff");
$statement->execute();
$datastaff = $statement->fetchAll(PDO::FETCH_ASSOC);
$staffcount = count($datastaff);
$males = array();
$females = array();

foreach ($datastaff as $key => $value) {
    switch ($value['gender']) {
        case 'Female':
            array_push($females, $value['gender']);
            break;
        case 'Male':
            array_push($males, $value['gender']);
            break;
        
        default:
            # code...
            break;
    }
     
}

$mcount = count($males);
$fcount = count($females);

?>