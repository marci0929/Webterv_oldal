<?php


abstract class Validator
{
    protected $data;                                                    // A POST-ból érkező adat
    protected $errors = [];                                             // Hibákat gyűjtő tömb
    protected static $fields = [];                                      // Az elvárt mezőneveket tároló tömb

    public function __construct($formData)
    {
        $this->data = $formData;
    }

    public abstract function validate();

    /**
     * Hibaüzenet hozzáadása
     * @param string $key Mezőnév, amihez a hiba tartozik
     * @param string $value A hibaüzenet
     */
    protected function addError($key, $value)
    {
        $this->errors[$key] = '* ' . $value;
    }

    /**
     * Leellenőrzi, hogy az összes elvárt mezőt
     * tartalmazza-e az adat.
     */
    protected function checkFields()
    {
        foreach (self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error("$field mező nem található!");
                die();
            }
        }
    }
}