<?php
class Users {

  private $users = [];
  

  function addUser($user){
    array_push($this->users, $user);
    $this->writeUsersToFile();
  }    

  function getNumberOfUsers() : int {
    return count($this->users);
  }

  function writeUsersToFile(){
    $userlist = fopen("php/userlist.txt", "w");
    foreach ($this->users as $user) {
        fwrite($userlist, $user->getNev);
        fwrite($userlist, ' ');
        fwrite($userlist, $user->getPassword);
        fwrite($userlist, '\r\n');
    }

    fclose($userlist);
  }


}