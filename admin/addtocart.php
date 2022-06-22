<?php
include('core/connect.php');
    session_start();
    $id=$_SESSION[ 'uname_main_twh'];
    $id2 = $_SESSION[ 'id_main_twh'];

   $error  = array();
   $res    = array();
    $time =  date( " d-F-Y h:i A");
 



if (isset($_POST['add'])) {
    $greencom = '0';
    switch ($_POST['cat']) {
        case 'Greenhouse':
            $greencom = $_POST['units'];
            break;
        
        default:
            $greencom = '0';
            break;
    }
    $total = $_POST['units'] * $_POST['cost'];
    $stmt = $connect->prepare( "INSERT INTO cart (session_id, item,ui, total, timestamp,cat,com,posuser) VALUES (:session_id, :item,:ui, :total, :timestamp,:cat,:com,:posuser)");
    $stmt->bindParam( ':session_id', $_POST['tokeni']);
    $stmt->bindParam(':item', $_POST['item']);
    $stmt->bindParam(':ui', $_POST['units']);
    $stmt->bindParam(':total', $total);
    $stmt->bindParam(':com', $greencom);
    $stmt->bindParam(':posuser', $id2);
    $stmt->bindParam(':cat', $_POST['catcart']);
    $stmt->bindParam(':timestamp', $time);

    if ($stmt->execute()) {

        $respinv2['userauth'] = $id;
        $respinv2['status']  = true;
        $respinv2['message']  = $_POST[ 'item'] . ' has been added to the cart';
        header('location:pos');
    } else {
        $error[] = "Something went wrong";
        $resp['msg']  = $error;
        $resp['status']   = false;
        echo json_encode($resp);
     }
} elseif(isset($_POST[ 'idcartitem'])) {
    //Our UPDATE SQL statement.
    $id = $_POST[ 'idcartitem'];
    $sql = "DELETE FROM cart  WHERE session_id = :session_id";

    //Prepare our UPDATE SQL statement.
    $statement = $connect->prepare($sql);

    //Bind our value to the parameter :id.
    $statement->bindValue(':session_id', $id);

    //Execute our Delete statement.
    $update = $statement->execute();
    unset($_SESSION[ 'posclient']);
    unset($_SESSION[ 'saletoken']);
    header('location:pos');
    }
else{
    $_SESSION['saletoken'] = $_POST['token'];
    $_SESSION['posclient'] = $_POST['client'];
    header('location:pos');
    
}


