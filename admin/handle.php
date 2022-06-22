<?php 
session_start();
require('core/connect.php');
$perm = $_SESSION['u_level_func_twh'];
if ($perm == '100') {
    if (isset($_POST['delete'])) {
        $id = $_POST['user_id'];
        $stmt = $connect->prepare("DELETE FROM staff WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header('location:staff');
    }
    if (isset($_POST['update'])) {
        $id = $_POST['iden'];
        $sql = "UPDATE staff SET name = :name,surname = :surname,gender = :gender, contact = :contact, position = :position WHERE id = :id";
        $statement3 = $connect->prepare($sql);
        $statement3->bindValue(':name', $_POST['names']);
        $statement3->bindValue(':surname', $_POST['surnames']);
        $statement3->bindValue(':gender', $_POST['genders']);
        $statement3->bindValue(':contact', $_POST['contacts']);
        $statement3->bindValue(':position', $_POST['positions']);
        $statement3->bindValue(':id', $id);
        if ($statement3->execute()) {
            // $error[] = "well the data has been adjusted ";
            // $resp['msg']  = $error;
            // $resp['status']   = false;
            // echo json_encode($resp);
        }
        header('location:staff');
    }
} else {
    header('location:profile');
}
    
    
    
?>