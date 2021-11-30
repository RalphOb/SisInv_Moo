<?php
class UserSessionModel extends Mysql{
    public function getUser($username, $password){
        $sql = "SELECT * FROM sesion WHERE usuario = '{$username}' AND pass = '{$password}'";
        $result = $this->objeto($sql);
        return $result;
    }
}