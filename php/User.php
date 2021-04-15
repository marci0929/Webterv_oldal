<?php

class User
{
    private $nev;
    private $profilKep;
    private $email;
    private $jelszo;

    function __construct($nev, $email, $profilkep, $jelszo)
    {
        $this->nev = $nev;
        $this->email = $email;
        $this->profilkep = $profilkep;
        $this->jelszo = $jelszo;
    }

    function getNev()
    {
        return $this->nev;
    }

    function getPassword()
    {
        return $this->jelszo;
    }

    function setProfilkep($ujProfilkep)
    {
        $this->profilkep = $ujProfilkep;
    }


}