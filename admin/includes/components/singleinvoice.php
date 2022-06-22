<?php
$indi = $values[0];
$statementrec = $connect->prepare("SELECT * FROM transactions WHERE id = :id");
$statementrec->bindValue(':id', $indi);
$statementrec->execute();
$datatrans = $statementrec->fetchAll(PDO::FETCH_ASSOC);

foreach ($datatrans as $tran => $transk) {
    include('includes/components/si.php');
}
?>
