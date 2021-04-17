<?php

class Users
{

    private static $numOfUsers = 0;

    static function addUser($user)
    {
        $file = fopen("php/userlist.txt", "a");
        fprintf($file,serialize($user->getNev()) . "\r\n");
        fprintf($file,serialize($user->getPassword()) . "\r\n");
        fprintf($file,serialize($user->getEmail()) . "\r\n");
        fclose($file);
        self::$numOfUsers++;
    }

    static function getNumberOfUsers(): int
    {
        return self::$numOfUsers;
    }

    static function isUsernameAlreadySet($username)
    {
        $users = fopen("php/userlist.txt", "r");
        while (!feof($users)) {
            if (unserialize(fgets($users)) == ($username)) {
                fclose($users);
                return true;
            }
        }
        fclose($users);
        return false;
    }

    static function getUser($username, $jelszo)
    {
        $users = fopen("php/userlist.txt", "r");

        while (!feof($users)) {
            $data = unserialize(fgets($users));

            if ($data == $username) {
                $passw = unserialize(fgets($users));
                $email = unserialize(fgets($users));

                if ($passw === $jelszo)
                return array('username' => $username, 'password' => $passw, 'email' => $email);
            }
        }
        fclose($users);
        return null;
    }


}