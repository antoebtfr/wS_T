<?php 
    $lastname = null;
    $firstname = null;
    $zipcode = null;
    $birthdate = null;
    $email = null;
    $feedback = null;

    if(isset($_GET['lastname'])){
        $lastname = $_GET['lastname'];
    }

    if(isset($_GET['firstname'])){
        $firstname = $_GET['firstname'];
    }

    if(isset($_GET['birthdate'])){
        $birthdate = $_GET['birthdate'];
    }

    if(isset($_GET['email'])){
        $email = $_GET['email'];
    }

    if(isset($_GET['zipcode'])){
        $zipcode = $_GET['zipcode'];
    }

    if(isset($_GET['feedback'])){
        $feedback = $_GET['feedback'];
    }
?>