<?php
 include_once '../service/formSignUp.service.php';
 include_once '../loaders/mysql.php';

 $error_message = '';

function signIn(&$error_message){
    global $conn;


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $lastname = filter_var($_POST['lastname']);
        $firstname = filter_var($_POST['firstname']);
        $zipcode = filter_var($_POST['zipcode']);
        $birthdate = filter_var($_POST['birthdate']);
        $email = $_POST['email'];
        $password = filter_var($_POST['password']);
        $confirmPassword = filter_var($_POST['confirm-password']);
        $newslettersub = null;
        $cgu = null;
        $result = null;

        if (isset($_POST['cgu'])){
            $cgu = filter_var($_POST['cgu']);
        }
        
        if (isset($_POST['newslettersub'])){
            $newslettersub = filter_var($_POST['newslettersub']);
        }
        
        $user = [$lastname, $zipcode, $birthdate, $email, $password, $confirmPassword, $newslettersub, $cgu];
        if(!emptyFieldChecker($user, $error_message)){
            echo "<p>$error_message</p>";
        }
        passwordConfirmation($password, $confirmPassword, $error_message);
        zipCodeChecker($zipcode, $error_message);
        passwordFormatCheck($password, $error_message);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $email = filter_var($email, FILTER_VALIDATE_EMAIL);


    print_r($user);
    echo "<p> Var POST</p>";
    print_r($_POST);



    if(!isset($cgu)){
        $error_message = "Veuillez accepter les conditions d'utilisation.";
    }

    $passedMessage = "La création de l'utilisateur à été validée";
    $urlWhenPassed = "Location: http://webtest/?feedback=$passedMessage";
    $urlWhenNotPassed = 'Location: http://webtest/?lastname='.$lastname.'&&firstname='.$firstname."&&zipcode=".$zipcode."&&birthdate=".$birthdate."&&email=".$email."&&feedback=".$error_message ;

    if(strlen($error_message) === 0){
        $sql = "INSERT INTO users (id, firstname, lastname, zipcode, birthdate, email, password, isNewsletterSub) VALUES (NULL, '$firstname', '$lastname', '$zipcode', '$birthdate', '$email', '$password', '$newslettersub')";
        $result = mysqli_query($conn, $sql);
    }
    
    $result ? header($urlWhenPassed) : header($urlWhenNotPassed);

}
}

signIn($error_message);
echo "<p>$error_message</p>";
