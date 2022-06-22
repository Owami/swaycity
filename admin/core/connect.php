<?php 
$uname = 'root';
$dbname = 'mysql:host=localhost; dbname=twh_negozio';
$pass = '';

try {
    $connect = new PDO($dbname, $uname, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected ";
} catch (PDOException $e) {
    echo "Unfortunate" . $e->getMessage();
}
    
?>