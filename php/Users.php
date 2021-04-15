<?php

class Users {

  private static $users = [];
  

  static function addUser($user){
    array_push(self::$users, $user);
    self::writeUsersToFile();
  }    

  function getNumberOfUsers() : int {
    return count(self::$users);
  }

  static function writeUsersToFile(){
    $userlist = fopen("php/userlist.txt", "w");
    foreach (self::$users as $user) {
        fwrite($userlist, $user->getNev());
        fwrite($userlist, ' ');
        fwrite($userlist, $user->getPassword());
        fwrite($userlist, '\r\n');
    }

    fclose($userlist);
  }


}