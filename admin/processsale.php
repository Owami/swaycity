<?php
include('core/connect.php');
session_start();
$id = $_SESSION['name_main_twh']. $_SESSION['surname_main_twh'];

$error  = array();
$res    = array();
$time =  date(" d-F-Y h:i A");
function calccom($val, $min, $max) {
  return ($val >= $min && $val <= $max);
}



if ($_POST[ 'validation-terms'] == 'on') {
    $totalsum= $_POST['totalsum'];
    $trans = $_POST['transaction-type'];
    $method = $_POST['transaction-type2'];
    $client = $_POST['client-name'];
    $discount = $_POST['client-discount'];
    $emp = $_POST[ 'validation-empname'];
    $saledate = $_POST['date-of-sale'];
    $tid = $_POST['transid'];
    $com = array_sum($_POST['com']);
    $methodcart = array($trans,$method);
    $cartsale = array_merge($_POST['itemc'], $_POST['amountc'], $_POST['sumc']);
    $cartjson = json_encode($cartsale);
    $methodjson = json_encode($methodcart);

    $stmt = $connect->prepare( "INSERT INTO transactions (pos_user, client,sale_type, date_of_sale, transaction_id,comm,items,totalsale) VALUES (:pos_user, :client,:sale_type, :date_of_sale, :transaction_id,:comm,:items,:totalsale)");
    $stmt->bindParam( ':pos_user', $id);
    $stmt->bindParam( ':client', $client);
    $stmt->bindParam( ':sale_type', $methodjson);
    $stmt->bindParam( ':date_of_sale', $saledate);
    $stmt->bindParam( ':transaction_id', $tid);
    $stmt->bindParam( ':comm', $com);
    $stmt->bindParam(':totalsale', $totalsum);
    $stmt->bindParam(':items', $cartjson);

    if ($stmt->execute()) {
        $statement = $connect->prepare("SELECT * FROM inventory_1");
        $statement2 = $connect->prepare("SELECT * FROM inventory_2");
        $statement->execute();
        $datadropini = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement2->execute();
        $datadropini2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
        $staffcount = count($datadropini);
        $inv1 = array();
        $inv2 = array();
        $tobeminused = $_POST['itemc'];
        $tobeminuseda =  $_POST['amountc'];
        $tbs1 = array_combine($tobeminused,$tobeminuseda);
        $tbs2 = array_combine($tobeminused, $tobeminuseda);
        $newdata = array();
        $newdata2 = array();
        

        foreach ($datadropini as $key => $value) {
            array_push($inv1, $value);
        }




        foreach ($datadropini2 as $key => $value) {
            array_push($inv2, $value);
        }
        $sumarray = array_merge($inv1, $inv2);

        foreach ($inv1 as $key => $value) {
            foreach ($tbs1 as $x => $xa) {
                if ($x == $value['strain']) {
                    $update1 = $value['quantity'] - $xa;
                    $t = array($x => $update1);
                    array_push($newdata, $t);
                }
            }
            
        }
        foreach ($inv2 as $key => $value) {
            foreach ($tbs2 as $x => $xa) {
                if ($x == $value['p_name']) {
                    $update2 = $value['quantity'] - $xa;
                    $t = array($x => $update2);
                    array_push($newdata2, $t);
                }
            }
        }
        
        foreach ($newdata as $n1 => $n2) {
            foreach ($n2 as $nw1 => $nw2) {
                $sql = "UPDATE inventory_1 SET quantity = :quantity WHERE strain = :strain";
                $statement3 = $connect->prepare($sql);
                $statement3->bindValue(':quantity', $nw2);
                $statement3->bindValue(':strain', $nw1);
                if ( $statement3->execute()) {
                    // $error[] = "well the data has been adjusted ";
                    // $resp['msg']  = $error;
                    // $resp['status']   = false;
                    // echo json_encode($resp);
                }
                
            }
        }

        foreach ($newdata2 as $n1r => $n2r) {
            foreach ($n2r as $nw1r => $nw2r) {
                $sqlr = "UPDATE inventory_2 SET quantity = :quantity WHERE p_name = :p_name";
                $statement3r = $connect->prepare($sqlr);
                $statement3r->bindValue(':quantity', $nw2r);
                $statement3r->bindValue(':p_name', $nw1r);
                if ($statement3r->execute()) {
                    $errorr[] = "well the data has been adjusted in inv2";
                    $respr['msg']  = $error;
                    $respr['status']   = false;
                    echo json_encode($respr);
                }
            }
        }
         print_r($newdata2);
        unset($_SESSION[ 'saletoken']);
        header('location:pos');
    } else {
        $error[] = "Something went wrong";
        $resp['msg']  = $error;
        $resp['status']   = false;
        echo json_encode($resp);
    }
} else {
    $default = 'TBD';
    $stmt = $connect->prepare("INSERT INTO cart (session_id, item,ui, total, timestamp) VALUES (:session_id, :item,:ui, :total, :timestamp)");
    $stmt->bindParam(':session_id', $_POST['token']);
    $stmt->bindParam(':item', $default);
    $stmt->bindParam(':ui', $default);
    $stmt->bindParam(':total', $default);
    $stmt->bindParam(':timestamp', $time);
    if ($stmt->execute()) {
        $_SESSION['saletoken'] = $_POST['token'];
        header('location:pos');
    }
}
