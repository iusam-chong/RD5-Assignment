<?php

require_once('./includes/class-autoload.php');

$user = new UsersContr();
if (!$user->autoLogin()) {

    header('location: login');
    exit();
}

$cash = new Form();
if (isset($_POST['money'])) {
    
    # Send to form class to make them object
    $cash->setMoney($_POST['money']);
    
    # Should check format =D
    if ($user->cashOut($cash)) {
        header('location: main');
        exit();
    }
    
    # If transactions fail then will show up this page 
    header('location: transactionfail');
    die();
}

$view = new UsersView();
$view->cashOutPage();

?>