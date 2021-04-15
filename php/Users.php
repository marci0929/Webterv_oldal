<?php
class Users{

  private static $users = [];
  

  function addUser($user){
    array_push($users, $user);
    $this->writeUsersToFile();
  }    

  function getNumberOfUsers():int{
    return count($users);
  }

  function writeUsersToFile(){
    $userlist = fopen("php/userlist.txt", "w")
    foreach ($users as $user) {
        fwrite($userlist, $user->getNev);
        fwrite($userlist, ' ');
        fwrite($userlist, $user->getPassword);
        fwrite($userlist, '\r\n');
    }

    fclose($userlist);
  }


}