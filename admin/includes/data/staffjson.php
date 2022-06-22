<?php
require('../../core/connect.php');
$id = $_SESSION['name_main_twh'];

$datastaff = array();

   $error  = array();
   $res    = array();



        $statement = $connect->prepare("SELECT name,surname,contact,status FROM staff" );
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(count($row)>0) {
            
            foreach ($row as $key => $value) {
                array_push($datastaff, $value);
            }
           
          $respstaff['data']    = $datastaff;
          $respstaff['userauth'] = $id;
          $respstaff['status']      = true; 
          $respstaff['count']   = count($datastaff);
          echo json_encode($respstaff);
          
              
       } else {
          $error[] = "No data to show";
        $respstaff['msg']  = $error;
        $respstaff['status']   = false;    
          echo json_encode( $respstaff);
         
     } 
?>