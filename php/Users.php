<?php

class Users
{

    private static $users = [];

    static function addUser($user)
    {
        global $users;
        array_push(self::$users, $user);
        self::writeUsersToFile();
    }

    function getNumberOfUsers(): int
    {
        return count(self::$users);
    }

    static function writeUsersToFile()
    {
        foreach (self::$users as $user) {
            file_put_contents("php/userlist.txt", $user->getNev() . ' ' . $user->getPassword() . "\r\n", FILE_APPEND);
        }
    }

    static function isUsernameAlreadySet($username) : bool{
        foreach (self::$users as $user) {
            if(strcmp($user->getNev(),$username)==0){
                return true;
            }
        }
        return false;
    }

    public static function getUsers(): array
    {
        return self::$users;
    }

}