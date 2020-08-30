<?php

class UsersContr extends Users {
    
    public function userRegister($rgData) {
        //print_r($RgData) ;
        
        //echo $RgData->userName ;
        
        if($this->createUser($rgData)) {
            echo "register sucess !";
        } else {
            echo "username invalid !";
        }
    }

    public function autoLogin() {
        if ($this->sessionLogin()) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }

    public function userLogin($lgData) {

        if ($this->manualLogin($lgData)) {

            echo "manual logged in";

        } else {
            echo "username or password error;";
        }
        
    }

    public function userLogout(){
        $this->logout();
        echo "logout !";
    }

}

?>