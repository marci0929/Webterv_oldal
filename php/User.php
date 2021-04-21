<?php

final class User
{
    private $nev;
    private $email;
    private $jelszo;

    function __construct($nev, $email, $jelszo)
    {
        $this->nev = $nev;
        $this->email = $email;
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

    function getEmail()
    {
        return $this->email;
    }



}