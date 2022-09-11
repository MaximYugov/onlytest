<?php

require_once(__DIR__ . "/../bootstrap.php");

class Auth
{
    public static function login(User $user)
    {
        //find user and return true or false
        $db = new Db();

        $authUser = $db->verifyUser($user);

        if (empty($authUser)) {
            return false;
        }

        $_SESSION['name'] = $authUser->name;
        $_SESSION['auth'] = true;

        return true;
    }
}