<?php

$statement = $connect->prepare("SELECT * FROM clients");
$statement->execute();
$dataclients = $statement->fetchAll(PDO::FETCH_ASSOC);
$clientcount = count($dataclients);
$males = array();
$females = array();



$mcount = count($males);
$fcount = count($females);
