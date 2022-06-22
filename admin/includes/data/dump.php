<?php
include('../../core/connect.php');
// $keynew = $_GET['variable2'];
// $query = '';
// $year = $_GET['variable2'];;
//$province = $_GET['variable'];
$output1 = array();
$output2 = array();
$output3 = array();
$output4 = array();
////////////////////
$statement = $connect->prepare('SELECT item FROM cart');
$statement->execute();
$datacap = $statement->fetchAll(PDO::FETCH_ASSOC);
$capcount = count($datacap);
///////////////////
foreach ($datacap as $key => $value) {

    array_push($output2, $value['item']);
}
//////////////////
$outun2 = array_values(array_unique($output2));
//$outun4 = array_values(array_unique($output4));
$temp = array();
/////////////////
function addProv($item)
{
    include('../../core/connect.php');
    $sum = 0;
    $sum0 = 0;
    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;
    $city = array();
    $liaw = 0;
    $assets = 0;
    $lia = 0;
    $statement = $connect->prepare('SELECT timestamp,item,ui,total FROM cart WHERE item = :item');
    $statement->bindValue(':item', $item);
    $statement->execute();
    $data1 = $statement->fetchAll(PDO::FETCH_ASSOC);
    // $sum + $data1['total_assets'];
    foreach ($data1 as $item) {
         $sum += $item['ui'];
         $sum1 += $item['total'];
    }
    $t1 = array($sum => $sum1);
    $t2 = $sum1 / $sum;
    $sumx = array($t2 => $t1);
    //$ar = array($label => $sum);
    return $sumx;
}

function rand_color()
{
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}
// //
$color = array();
//

    foreach ($outun2 as $key2 => $value2) {
         $x = addProv($value2);
        // $y = rand_color();
         $t = array($value2 => $x);
        // array_push($color, $y);
         array_push($output3, $t);
        //print_r($value2);
    }



// //
// $y09 = array();
// $y10 = array();
// $y11 = array();
// $y12 = array();
// $y13 = array();
// $y14 = array();
// $y15 = array();
// $y16 = array();
// $y17 = array();
// $y18 = array();
// $y19 = array();
// $out = array();
// $out2 = array();
// $count = count($outun4);
// $supersum = array();
// foreach ($output3 as $key3 => $value3) {
//     // print_r($value3);
//     //$e = array_chunk($value3,$count);
//     //array_push($out,$value3);
//     foreach ($value3 as $value4 => $key4) {
//         array_push($out2, $value3);
//         array_push($out, $key4);
//         //$e = array_chunk($value4,$count);
//         switch ($value4) {
//             case '2009':
//                 array_push($y09, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2010':
//                 array_push($y10, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2011':
//                 array_push($y11, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2012':
//                 array_push($y12, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2013':
//                 array_push($y13, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2014':
//                 array_push($y14, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2015':
//                 array_push($y15, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2016':
//                 array_push($y16, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2017':
//                 array_push($y17, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2018':
//                 array_push($y18, $key4);
//                 array_push($supersum, $key4);
//                 break;
//             case '2019':
//                 array_push($y19, $key4);
//                 array_push($supersum, $key4);
//                 break;

//             default:
//                 # code...
//                 break;
//         };
//     }
// }
// $superarray = array_merge($y09, $y10, $y11, $y12, $y13, $y14, $y15, $y16, $y17, $y18, $y19);
// $y = array_chunk($superarray, $count);
// $u = array_unshift($y, $outun4);
// /////

// /////////////////////////////////////
// // Conditions
// ////////////////////////////////////
//$yeatbh = array();
// $tresult = round(array_sum($amountjson2) / array_sum($amountjson) * 100, 0);
// ////////////////////////////////////
// $chart = array(
//     'year' => $outun2,
//     'province' => $y,
//     'total' => number_format(array_sum($supersum))
// );
echo json_encode($output3);
//  print_r($chart);
