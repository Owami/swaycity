<?php
require('../../core/connect.php');
session_start();
$id = $_SESSION['name_main_twh'];

$datainv = array();

$error  = array();
$res    = array();
if (isset($_POST['terms']) == 'on') {

    $stmt = $connect->prepare( "INSERT INTO inventory_2 (p_name, cat,costper, tcost, quantity, auth, date) VALUES (:p_name, :cat,:costper, :tcost, :quantity, :auth, :date)");
    $stmt->bindParam( ':p_name', $_POST['product-name']);
    $stmt->bindParam(':cat', $_POST['category']);
    $stmt->bindParam( ':costper', $_POST['priceperitem']);
    $stmt->bindParam(':quantity', $_POST['quantity-purchased']);
    $stmt->bindParam(':auth', $_POST['auth']);
    $stmt->bindParam(':date', $_POST['date']);
    $stmt->bindParam(':tcost', $_POST['costp']);
    
    

    if ($stmt->execute()) {

        $respinv2['userauth'] = $id;
        $respinv2['status']  = true;
        $respinv2['message']  = $_POST[ 'product-name'] . ' has been added to the inventory';
        echo json_encode($respinv2);
        header('location:../../inv');
    } else {
        header('location:../../profile');
     }
}
