<?php
$indi = $valuet[0];
$statementrec = $connect->prepare("SELECT * FROM transactions WHERE id = :id ");
$statementrec->bindValue(':id', $indi);
$statementrec->execute();
$datatrans2 = $statementrec->fetchAll(PDO::FETCH_ASSOC);

foreach ($datatrans2 as $tran2 => $transk2) {
    include('includes/components/sr.php');
}
