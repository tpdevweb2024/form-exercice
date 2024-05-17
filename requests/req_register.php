<?php
$file = $_FILES["avatar"];
$maxSize = 8;
$allowedExtensions = ["jpg", "jpeg", "png"];


// Le nom  doit être sup ou égal à 2 caractères
if (strlen($_POST["last_name"]) < 2) {
    echo "Nom trop court";
    die;
}
// Le prénom doit doit être sup ou égal 2 caractères
if (strlen($_POST["first_name"]) < 2) {
    echo "Prénom trop court";
    die;
}
// Le mot doit faire 10 caractères de long
if (strlen($_POST["pwd"]) < 2) {
    echo "Mot de passe trop court";
    die;
}

// La date de naissance doit être entre 1895 et 2007
if ($_POST["birth_date"] < "1895-01-01" || $_POST["birth_date"] > "2007-01-01") {
    echo "La date de naissance c'est pas correcte";
    die;
}

// Au moins 2 hobbies doivent être cochés
if (count($_POST["hobbies"]) < 2) {
    echo "Vous n'avez pas coché au moins 2 hobbies";
    die;
}



if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Erreur critique";
    die;
}

if ($file["error"] !== 0) {
    echo "Le fichier est illisible, endommagé ou trop volumineux";
    die;
}

if ($file["size"] > ($maxSize * 1000000 * 1024 / 1000)) {
    echo "Fichier trop gros";
    die;
}

$extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
if (!in_array($extension, $allowedExtensions)) {
    echo "Cette extension n'est pas autorisée.";
    die;
}

// je continue
$random = bin2hex(random_bytes(40));

$arrayAllChars = ["a", "b", "c", "d", "e",  "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

// On définit le nom du fichier à créer
$name = bin2hex(random_bytes(20)) . time() . ".$extension";

move_uploaded_file($file["tmp_name"], "../uploads/$name");
