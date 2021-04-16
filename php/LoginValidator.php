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

        foreach (Users::getUsers() as $user) {
            if ($user instanceof User && $user->getNev() == $val) {
                $this->user = $user;
                return;
            }
        }

        $this->addError('username','Hibás felhasználónév!');
    }

    private
    function validatePassword()
    {
        $val = $this->data['password'];

        if (empty($val)) {
            $this->addError('password', 'A jelszó megadása kötelező!');
            return;
        }

        if (empty($this->data['username'])) return;

        if (isset($this->user)) {
            if ($this->user->getPassword() === $val) {
                return;
            }
        }

        $this->addError('password', 'Hibás jelszó!');
    }
}