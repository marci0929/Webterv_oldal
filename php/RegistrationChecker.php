<?php

require_once('php/User.php');
require_once('php/Users.php');
require_once('php/Validator.php');

final class RegistrationChecker extends Validator
{

    protected static $fields = ['username', 'email', 'eletkor', 'password1', 'password2'];
    private $correctRegistration=1;

    public function validate()
    {
        $this->checkFields();
        $this->validateUsername();
        $this->validatePassword();
        $this->validateKor();
        $this->validateEmail();
        if($this->correctRegistration==1){
            $this->makeRegistration();
            $this->correctRegistration=0;
        }
        return $this->errors;
    }


    private function validateUsername()
    {
        $val = trim($this->data['username']);

        if (empty($val)) {
            $this->addError('username', 'Felhasználónév megadása kötelező!');
        } else {
            if (!preg_match('/^[A-Za-z0-9]+([A-Za-z0-9]+)$/', $val)) {
                $this->addError('username', 'Helytelen formátum! (csak kis és nagybetűket, valamint számot tartalmazhat, minimum hossz: 2)');
            }
            if(Users::isUsernameAlreadySet($val)){
                $this->addError('username', 'A felhasználónév már foglalt!');
                $this->correctRegistration=0;
            }
        }
    }

    private function validatePassword()
    {
        $pw1 = $this->data['password1'];
        $pw2 = $this->data['password2'];

        if (empty($pw1) || empty($pw2)) {
            $this->addError('password2', 'Mind a két mező kitöltése kötelező!');
        } else if ($pw1 !== $pw2) {
            $this->addError('password2', 'A jelszavak nem egyeznek!');
        }
    }

    private function validateKor()
    {
        $val = $this->data['eletkor'];

        if (empty($val)) {
            $this->addError('eletkor', 'Az életkor megadása kötelező!');
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

    private function makeRegistration()
    {
        $ujFelhasznalo = new User($this->data['username'], $this->data['email'], $this->data['password1']);
        Users::addUser($ujFelhasznalo);
    }
}