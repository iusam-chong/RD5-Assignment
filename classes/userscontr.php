<?php

class UsersContr extends Users {
    
    public function userRegister($rgData) {
        if($this->createUser($rgData)) {
            return TRUE ;
        } else {
            return FALSE ;
        }
    }

    public function autoLogin() {
        if ($this->sessionLogin()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function userLogin($lgData) {
        if ($this->manualLogin($lgData)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function userLogout() {
        $this->logout();
    }

    public function findUser($userName) {
        if ($this->getUser($userName)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function cashIn($cash) {
        return $this->cashDeposit($cash) ? TRUE : FALSE ;
    }

    public function cashOut($cash) {
        return $this->cashDraw($cash) ? TRUE : FALSE ;
    }

}

?>