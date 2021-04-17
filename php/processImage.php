<?php

if (!isset($_FILES['profile-pic']) || !isset($_SESSION['user'])) return;

$extensions = array("jpg", "png", "jpeg");
const MAX_SIZE = 16777216;
const MAX_SIZE_MB = MAX_SIZE / 1048576;

$extension = strtolower(pathinfo($_FILES['profile-pic']["name"], PATHINFO_EXTENSION));

if (in_array($extension, $extensions)) {
    if ($_FILES['profile-pic']["error"] === 0) {

        if ($_FILES['profile-pic']["size"] <= MAX_SIZE) {
            if(!is_dir("php/users/".strtolower($_SESSION['user']['username']))){
                mkdir("php/users/".strtolower($_SESSION['user']['username']),0777,true);
            }

            //Régi kép törlése
            $files = glob("php/users/" . strtolower($_SESSION['user']['username'] . '/*'));
            foreach ($files as $file) if(is_file($file)) unlink($file);

            //Kép átmásolása
            $dest_dir = "php/users/" . strtolower($_SESSION['user']['username'] . '/' . "pic.".$extension);
            if (move_uploaded_file($_FILES['profile-pic']["tmp_name"], $dest_dir)) {
                return null;
            } else {
                echo "A fájl elmentése nem sikerült!";
            }

        } else {
            echo "A feltöltött fájl mérete túl nagy! (Max. " . MAX_SIZE_MB . "MB)";
        }
    } else {
        echo "Hiba a fájl feltöltése közben!";
    }
} else {
    echo "A fájl formátuma nem engedélyezett!";
}

?>