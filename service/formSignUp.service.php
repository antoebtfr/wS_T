<?php

function passwordConfirmation($password, $confirmPassword, &$error_message){

    if($password !== $confirmPassword){
        $error_message = "Les mots de passe doivent correspondre.";
    }
}

function zipCodeChecker($zipcode, &$error_message){
    if(strlen($zipcode) !== 5){
        $error_message = "Le code postal doit contenir 5 charactères.";
    }
}

function birthdateChecker($date, &$error_message){
    if($date){

    }
}

function passwordFormatCheck($password, &$error_message){
    if(!(strlen($password) >= 6 && strlen($password) <= 16)){
        $error_message = "Le mot de passe doit contenir entre 6 et 16 charactères.";
    }
    $letter = preg_match('@[\w]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if(!$letter || !$number){
        $error_message = "Le mot de passe doit contenir au moins une lettre et un chiffre.";
    }
}

function emptyFieldChecker($array, &$error_message){
    foreach($array as $value){
        if (empty($value)){
            $error_message = "Veuillez remplir tous les champs obligatoires.";
            return false;
        }
    }
}