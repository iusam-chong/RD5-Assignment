<?php

require_once('./includes/class-autoload.php');

$user = new UsersContr();

if ($user->autoLogin()) {
    $view = new UsersView();
    echo "auto login" ;
    //$view->showUser();
} else {
    $view = new UsersView();
    $view->loginPage();
}

$rgData = new Form();
$rgData->RegisterForm('myUserName21','myPassword','myName','myIdCard','myEmail','myPhoneNum') ;

$lgData = new Form();
$lgData->LoginForm('myUserName21','myPassword');

//$user->userRegister($rgData);

//$user->userLogin($lgData);

//$user->userLogout();

?>