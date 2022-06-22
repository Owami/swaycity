<?php
session_start();
require('core/connect.php');
$perm = $_SESSION['u_level_func_twh'];
if ($perm == '100') {
    if (isset($_POST['delete'])) {
        $id = $_POST['user_id'];
        $stmt = $connect->prepare("DELETE FROM inventory_1 WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header('location:inv');
    }
    if (isset($_POST['update'])) {
        $id = $_POST['iden'];
        $sql = "UPDATE inventory_1 SET strain = :strain,cat = :cat,quantity = :quantity, pricepg = :pricepg WHERE id = :id";
        $statement3 = $connect->prepare($sql);
        $statement3->bindValue(':strain', $_POST['surnames']);
        $statement3->bindValue(':cat', $_POST['names']);
        $statement3->bindValue(':quantity', $_POST['genders']);
        $statement3->bindValue(':pricepg', $_POST['contacts']);
        $statement3->bindValue(':id', $id);
        if ($statement3->execute()) {
            // $error[] = "well the data has been adjusted ";
            // $resp['msg']  = $error;
            // $resp['status']   = false;
            // echo json_encode($resp);
        }
        header('location:inv');
    }
} else {
    header('location:profile');
}
