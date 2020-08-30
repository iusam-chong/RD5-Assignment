<?php

class UsersView extends Users {

    public function showUser() {
        $result = $this->getUser();
        echo "Full name: " . $result['user_name'];
    }

    public function loginPage() {
        $this->title = "登入";
        require_once('./views/login.page.php');
    }

    public function registerPage() {
        $this->title = "註冊";
        require_once('./views/register.page.php');
    }
}

?>