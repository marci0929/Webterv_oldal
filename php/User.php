<?php
class Users {
	private $nev;
	private $profilKep;
	private $email;
	private $jelszo;


	function __constructor($nev, $email, $profilkep, $jelszo){
		$this->nev = $nev;
		$this->email=$email;
		$this->profilkep=$profilkep;
		$this->jelszo=$jelszo;
	}

	function getNev() {
   		return $this->nev;
  	}

  	function getPassword(){
  		return $this->jelszo;
  	}

  	function setProfilkep($ujProfilkep) {
    	$this->profilkep=$ujProfilkep;
  	}


}