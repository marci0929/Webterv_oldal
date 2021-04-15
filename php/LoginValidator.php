<?php


class LoginValidator
{
    private $data;
    private $errors = [];
    private static $fields = ['username','password'];

    public function __construct($loginData)
    {
        $this->data = $loginData;
    }

    public function validate() {
        foreach (self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error("$field mező nem található!");
                die();
            }
        }

        $this->validateUserName();
        $this->validatePassword();
        return $this->errors;
    }

    private function validateUserName() {
        $val = trim($this->data['username']);

        if (empty($val)) {
            $this->addError('username','A felhasználónév megadása kötelező!');
        }
    }

    private function validatePassword() {
        $val = $this->data['password'];

        if (empty($val)) {
            $this->addError('password','A jelszó megadása kötelező!');
        }
    }

    private function addError($key, $value)
    {
        $this->errors[$key] = '* ' . $value;
    }
 }