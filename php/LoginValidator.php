<?php

require_once('php/Validator.php');
require_once('php/Users.php');
require_once('php/User.php');

/**
 * Login űrlapot validáló osztály.
 */
final class LoginValidator extends Validator
{
    protected static $fields = ['username', 'password'];
    private $user = null;

    public function validate()
    {
        $this->checkFields();
        $this->validateUserName();
        $this->validatePassword();
        return $this->errors;
    }

    private function validateUserName()
    {
        $val = trim($this->data['username']);

        if (empty($val)) {
            $this->addError('username', 'A felhasználónév megadása kötelező!');
            return;
        }

        if (empty($this->data['password'])) return;

        $user = Users::getUser($val,$this->data['password']);
        if ($user != null) {
            $this->user = $user;
            return;
        }

        $this->addError('username','Hibás felhasználónév!');
    }

    private function validatePassword()
    {
        $val = $this->data['password'];

        if (empty($val)) {
            $this->addError('password', 'A jelszó megadása kötelező!');
            return;
        }

        if (empty($this->data['username']) || isset($this->user)) return;

        $this->addError('password', 'Hibás jelszó!');
    }

    public function getUser()
    {
        if ($this->user instanceof User) return $this->user;
        return null;
    }

}