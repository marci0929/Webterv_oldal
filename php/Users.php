<?php

class Users
{

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

    static function getUser($username, $jelszo) {
        $users=fopen("php/userlist.txt","r");
        while(!feof($users)){
            if(fgets($users) == $username."\r\n"){
                if(fgets($users) == $jelszo."\r\n"){
                    return array('username' => $username, 'password' => $jelszo, 'email' => fgets($users));
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


}