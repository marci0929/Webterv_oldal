<?php

class Users
{

    private static $users = [];

    static function addUser($user)
    {
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

    public static function getUsers(): array
    {
        return self::$users;
    }

}