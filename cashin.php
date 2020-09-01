<?php

require_once('./includes/class-autoload.php');

$user = new UsersContr();
if (!$user->autoLogin()) {

    header('location: main');
    exit();
} 

$cash = new Form();
if (isset($_POST['money'])) {
    
    # Send to form class to make them object
    $cash->setMoney($_POST['money']);
    
    # Should check format =D
    if ($user->cashIn($cash)) {
        header('location: main');
        exit();
    }

}

$view = new UsersView();
$view->cashInPage();

?>