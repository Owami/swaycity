<?php 
session_start();
require('core/connect.php');
$perm = $_SESSION['u_level_func_twh'];
if ($perm == '100') {
    if (isset($_POST['delete'])) {
        $id = $_POST['user_id'];
        $stmt = $connect->prepare("DELETE FROM clients WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header('location:plist');
    }
    if (isset($_POST['update'])) {
        $id = $_POST['iden'];
        $sql = "UPDATE clients SET med_case = :med_case,name = :name,surname = :surname, cell = :cell, street_add = :street_add WHERE id = :id";
        $statement3 = $connect->prepare($sql);
        $statement3->bindValue( ':med_case', $_POST['meds']);
        $statement3->bindValue( ':name', $_POST['names']);
        $statement3->bindValue( ':surname', $_POST['surnames']);
        $statement3->bindValue(':cell', $_POST['cells']);
        $statement3->bindValue( ':street_add', $_POST['streets']);
        $statement3->bindValue(':id', $id);
        if ($statement3->execute()) {
            // $error[] = "well the data has been adjusted ";
            // $resp['msg']  = $error;
            // $resp['status']   = false;
            // echo json_encode($resp);
        }
        header('location:plist');
    }
} else {
    header('location:profile');
}
