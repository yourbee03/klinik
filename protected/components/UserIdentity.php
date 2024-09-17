<?php

class UserIdentity extends CUserIdentity
{
    public function authenticate()
    {
        $user = User::model()->findByAttributes(array('username' => $this->username));
        
        if ($user === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif ($user->password !== md5($this->password)) { // Pastikan hashing konsisten
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->setState('role', $user->role);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
}
