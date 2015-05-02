<?php

namespace module;

class Manage {

    function login($username, $password) {
        $users = json_decode(file_get_contents('./data/_users.txt'), true);
        if (!isset($users[$username])) {
            return false;
        }
        if ($this->hashPassword($password) != $users[$username]) {
            return false;
        }
        $this->ctx->util->sessionPut('admin', 'true');
        return true;
    }
    
    function logout() {
        $this->ctx->util->sessionDel('admin');
    }
    
    function isAdmin() {
        return $this->ctx->util->sessionGet('admin') == 'true';
    }
    
    function hashPassword($password) {
        return hash('sha256', "pwdsalt-$password");
    }
    
}
