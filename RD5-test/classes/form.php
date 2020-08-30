<?php

class Form {
    // public $userName;
    // public $userPasswd;
    // public $customerName;
    // public $customerIdCard;
    // public $customerEmail;
    // public $customerPhoneNum;

    public function RegisterForm($userName,$userPasswd,$customerName,$customerIdCard,$customerEmail,$customerPhoneNum) {
        $this->userName = $userName;
        $this->userPasswd = $userPasswd;
        $this->customerName = $customerName;
        $this->customerIdCard = $customerIdCard;
        $this->customerEmail = $customerEmail;
        $this->customerPhoneNum = $customerPhoneNum;
    }

    public function LoginForm($userName,$userPasswd) {
        $this->userName = $userName;
        $this->userPasswd = $userPasswd;
    }


}

?>