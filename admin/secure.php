<?php
session_start();
if (empty($_SESSION[ 'uname_main_twh'])) {
    header('location: login.php');
} else {
    echo 'Secure page!.';
    echo '<a href="/logout.php">logout</a>';
}
