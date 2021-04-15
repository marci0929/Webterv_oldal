<?php

require('php/User.php');
require('php/Users.php');

class RegistrationChecker{

  private $data;
  private static $fields = ['username', 'email', 'eletkor', 'password1', 'password2'];
  private $errors = [];

    public function __construct($kapcsolatData)
    {
        $this->data = $kapcsolatData;
    }

    public function validate()
    {
        foreach (self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error("$field mező nem található!");
                die();
            }
        }

        $this->validateUsername();
        $this->validatePassword();
        $this->validateKor();
        $this->validateEmail();
        $this->makeRegistration();
        return $this->errors;
    }


    private function validateUsername()
    {
        $val = trim($this->data['username']);

        if (empty($val)) {
            $this->addError('username','Felhasználónév megadása kötelező!');
        } else {
            if (!preg_match('/^[A-Za-z0-9]+([A-Za-z0-9]+)$/', $val)) {
                $this->addError('username', 'Helytelen formátum! (csak kis és nagybetűket, valamint számot tartalmazhat)');
            }
        }
    }

    private function validatePassword() {
        $pw1 = $this->data['password1'];
        $pw2 = $this->data['password2'];

        if (empty($pw1) || empty($pw2)) {
            $this->addError('password2','Mind a két mező kitöltése kötelező!');
        } else if($pw1 !== $pw2) {
            $this->addError('password2','A jelszavak nem egyeznek!');
        }
    }

    private function validateKor()
    {
        $val = $this->data['eletkor'];

        if (empty($val)) {
            $this->addError('eletkor','Az életkor megadása kötelező!');
            return;
        }

        $options = array(
            'options' => array(
                'min_range' => 16,
                "max_range" => 999
            )
        );

        if (!filter_var($val, FILTER_VALIDATE_INT, $options))
            $this->addError('eletkor', '16 éves kor alatt nem regisztrálhatsz!');
    }

    private function validateEmail()
    {
        $val = trim($this->data['email']);

        if (empty($val)) {
            $this->addError('email', 'Email cím megadása kötelező!');
        } else {
            if (!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $val)) {
                $this->addError('email', 'Helytelen formátum! (valós email címet adj meg!)');
            }
        }
    }

    private function makeRegistration(){
        
        if(empty($_FILES)){
            $val = fopen("./img/alapProfilkep.jpg", "r") or die("Unable to open file!");
        }
        else{
            $val = $this->data['profilkep'];
        }
         $ujFelhasznalo = new User($this->data['username'], $this->data['email'], $val, $this->data['password1']);
         Users::addUser($ujFelhasznalo);
    }

    private function addError($key, $value)
    {
        $this->errors[$key] = '* ' . $value;
    }
    

}