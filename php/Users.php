<?php

class Users
{

    //public static $users = [];
    private static $numOfUsers=0;

    static function addUser($user)
    {
        file_put_contents("php/userlist.txt", $user->getNev() . "\r\n" . $user->getPassword() . "\r\n" . $user->getEmail() ."\r\n", FILE_APPEND);
        self::$numOfUsers++;
    }

    static function getNumberOfUsers(): int
    {
        return self::$numOfUsers;
    }
/*
    static function writeUsersToFile()
    {
            file_put_contents("php/userlist.txt", $user->getNev() . '\r\n' . $user->getPassword() . '\r\n' . $user->getEmail() ."\r\n", FILE_APPEND);
    }
    */

    static function isUsernameAlreadySet($username){
        $users=fopen("php/userlist.txt","r");
        while(!feof($users)) {
            if(fgets($users) == $username."\r\n"){
                fclose($users);
                return true;
            }
        }
        fclose($users);
        return false;
    }

    static function getUser($username, $jelszo) : User {
        $users=fopen("php/userlist.txt","r");
        while(!feof($users)){
            if(fgets($users) == $username."\r\n"){
                if(fgets($user) == $jelszo."\r\n"){
                    return new User($username, fgets($users), $jelszo);
                }
                else{
                    fgets($users);
                }
            }
            else{
                fgets($users);
                fgets($users);
            }
        }
        return null;
    }
    /*
    public static function getUsers(): array
    {
        return self::$users;
    }
    */

}