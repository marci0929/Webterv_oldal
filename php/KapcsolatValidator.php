<?php


class KapcsolatValidator
{
    private $data;
    private $errors = [];
    private static $fields = ['name', 'kor', 'mirol', 'bsza', 'faj', 'uzi'];
    const MSG_LEN = 255;

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

        $this->validateName();
        $this->validateKor();
        $this->validateNem();
        $this->validateMirol();
        $this->validateBorok();
        $this->validateUzi();
        return $this->errors;
    }

    private function validateName()
    {
        $val = trim($this->data['name']);

        if (empty($val)) {
            $this->addError('name', 'A név megadása kötelező!');
        } else {
            if (!preg_match('/^[A-Za-z]+( [A-Za-z]+)+/', $val)) {
                $this->addError('name', 'Helytelen formátum! (elvárt: Vezetéknév Keresztnév)');
            }
        }
    }

    private function validateKor()
    {
        $val = $this->data['kor'];

        if (empty($val)) {
            $this->addError('kor', 'Az életkor megadása kötelező!');
            return;
        }

        $options = array(
            'options' => array(
                'min_range' => 7,
                "max_range" => 99
            )
        );

        if (!filter_var($val, FILTER_VALIDATE_INT, $options))
            $this->addError('kor', 'Kérlek valós életkort adj meg!');
    }

    private function validateNem()
    {
        if (!array_key_exists('nem', $this->data)) {
            $this->addError('nem', 'Kérlek válassz nemet!');
        }
    }

    private function validateMirol()
    {
        if (empty($this->data['mirol'])) {
            $this->addError('mirol', 'Kérlek válassz a lehetőségek közül!');
        }
    }

    private function validateBorok()
    {
        if (array_key_exists('borok', $this->data)) {
            if (count($this->data['borok']) >= 1) {
                return;
            }
        }
        $this->addError('borok[]', 'Legalább egy mezőt ki kell jelölni!');
    }

    private function validateUzi()
    {
        if (strlen($this->data['uzi']) >= self::MSG_LEN) {
            $this->addError('uzi', 'Maximum ' . self::MSG_LEN . ' karakter hosszú lehet az üzenet!');
        }
    }

    private function addError($key, $value)
    {
        $this->errors[$key] = '* ' . $value;
    }
}