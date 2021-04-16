<?php

if (!isset($_FILES['profile-pic']) || !isset($_SESSION['user'])) return;

$errors = [];

const EXTENSIONS = array("jpg", "png", "jpeg");
const MAX_SIZE = 16777216;
const MAX_SIZE_MB = MAX_SIZE / 1048576;

$extension = strtolower(pathinfo($_FILES['profile-pic']["name"], PATHINFO_EXTENSION));

if (in_array($extension, EXTENSIONS)) {
    if ($_FILES['profile-pic']["error"] === 0) {

        if ($_FILES['profile-pic']["size"] <= MAX_SIZE) {
            if(!is_dir("php/users/".strtolower($_SESSION['user']['username']))){
                mkdir("php/users/".strtolower($_SESSION['user']['username']));
            }

            $dest_dir = "php/users/" . strtolower($_SESSION['user']['username'] . '/' . $_FILES['profile-pic']["name"]);
            if (move_uploaded_file($_FILES['profile-pic']["tmp_name"], $dest_dir)) {
                return null;
            } else {
                array_push($errors, "A fájl elmentése nem sikerült!");
            }

        } else {
            array_push($errors, "A feltöltött fájl mérete túl nagy! (Max. " . MAX_SIZE_MB . "MB)");
        }
    } else {
        array_push($errors, "Hiba a fájl feltöltése közben!");
    }
} else {
    array_push($errors, "A fájl formátuma nem engedélyezett!");
}

?>