<?php


$id = $_SESSION['name_main_twh'];

$datacart = array();

   $error  = array();
   $res    = array();


if(isset( $_SESSION['saletoken'])){
  $statement = $connect->prepare("SELECT * FROM cart WHERE session_id = :session_id");
  $statement->bindValue(':session_id', $_SESSION['saletoken']);
  $statement->execute();
  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
  if (count($row) > 0) {

    foreach ($row as $key => $value) {
      array_push($datacart, $value);
    }
  } else {
    $error[] = "No data to show";
    $respstaff['msg']  = $error;
    $respstaff['status']   = false;
    echo json_encode($respstaff);
  }

}
         
?>