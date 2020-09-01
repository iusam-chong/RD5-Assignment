<?php

require_once('./includes/class-autoload.php');

$user = new UsersContr();
if (!$user->autoLogin()) {

    header('location: login');
    exit();
} 

$view = new UsersView();
$view->transactionFailPage();

?>