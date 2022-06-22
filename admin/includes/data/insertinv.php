<?php
require('../../core/connect.php');
session_start();
$id = $_SESSION['name_main_twh'];

$datainv = array();

   $error  = array();
   $res    = array();
    if (isset($_POST['validation-terms']) == 'on') {
        
        $stmt = $connect->prepare( "INSERT INTO inventory_1 (strain, cat,pricepg, tcost, quantity, auth, date) VALUES (:strain, :cat,:pricepg, :tcost, :quantity, :auth, :date)");
        $stmt->bindParam( ':strain', $_POST['validation-strain']);
        $stmt->bindParam( ':cat', $_POST['category']);
        $stmt->bindParam( ':pricepg', $_POST['validation-cost2']);
        $stmt->bindParam( ':quantity', $_POST['validation-grams']);
        $stmt->bindParam( ':auth', $_POST['auth']);
        $stmt->bindParam( ':date', $_POST['date']);
        $stmt->bindParam( ':tcost', $_POST['validation-cost']);
        
        
        if($stmt->execute()) {
            
          $respinv['userauth'] = $id;
          $respinv['status']  = true; 
          $respinv['message']  = $_POST['validation-strain'] . ' has been added to the inventory';
          echo json_encode( $respinv);
    header('location:../../inv');
              
       } else {
         
         
     }
    }



