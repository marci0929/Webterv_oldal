<?php

require_once('php/Validator.php');

/**
 * Kapcsolatok űrlapot validáló osztály.
 */
final class KapcsolatValidator extends Validator
{
    protected static $fields = ['name', 'kor', 'mirol', 'bsza', 'faj', 'uzi'];

    const MSG_MIN = 25; const MSG_MAX = 255;
    const KOR_MIN = 7;  const KOR_MAX = 99;

    public function validate()
    {
        $this->checkFields();
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
                'min_range' => self::KOR_MIN,
                "max_range" => self::KOR_MAX
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
        $uzi = $this->data['uzi'];

        if (strlen($uzi) <= self::MSG_MIN) {
            $this->addError('uzi', 'Minimum ' . self::MSG_MIN . ' karaktert írj be!');
        } else if (strlen($uzi) >= self::MSG_MAX) {
            $this->addError('uzi', 'Maximum ' . self::MSG_MAX . ' karakter hosszú lehet az üzenet!');
        }
    }
}