<?php
class RegistrationChecker{

  private $data;
  private static $fields = ['username', 'email', 'kor', 'jelszo', 'jelszo2'];

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
        return $this->errors;
    }


    private function validateUsername()
    {
        $val = $this->data['username'];

        if (empty($val)) {
            $this->addError('username', 'Felhasználónév megadása kötelező!');
        } else {
            if (!preg_match('/[A-Za-z1-9]/', $val)) {
                $this->addError('username', 'Helytelen formátum! (csak kis és nagybetűket, valamint számot tartalmazhat)');
            }
        }
    }
}