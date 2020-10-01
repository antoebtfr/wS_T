<?php
include_once 'loaders/mysql.php';
include_once 'models/index.model.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription </title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
    <div id="feedback-container"><?=$feedback?></div>
    <section id="form-container">
        <h1> Formulaire d'inscription </h1>
        <form action="./auth/formSignUp.php" method="POST">
            <div id="user-entry-container">
                <input type="text" class="user-entry" name="lastname" id="lastname" placeholder="Nom *" value="<?=$lastname?>" onchange="notEmptyChecker(lastnameInput)" required>
                <input type="text" class="user-entry" name="firstname" id="firstname" placeholder="Prénom" value="<?=$firstname?>">
                <input type="text" class="user-entry" name="zipcode" id="zipcode" placeholder="Code Postal*" value="<?=$zipcode?>" required>
                <input type="date" class="user-entry" name="birthdate" id="birthdate" placeholder="Date de naissance" value="<?=$birthdate?>" required>
                <input type="email" id="email" class="user-entry" name="email" id="email" placeholder="Adresse mail*" value="<?=$email?>" required>
                <input type="password" class="user-entry" name="password" id="password" placeholder="Mot de passe *" required>
                <input type="password" class="user-entry" name="confirm-password" id="confirm-password" placeholder="Vérification mot de passe *" required>
            </div>


            <div id="newsletter-container">
                <p> Recevoir notre newsletter? *</p>
                <input type="radio" name="newslettersub" id="newsletter-sub-yes" value="1"> <label for="newsletter-sub-yes">Oui</label>
                <input type="radio" name="newslettersub" id="newsletter-sub-no" value="0"> <label for="newsletter-sub-no">Non</label>
            </div>

            <div id="cgu-container">
            <input id="cgu" name="cgu" type="checkbox" required><label> J'accepte le <span class="lightblue"> réglement du jeu </span> </label>
            </div>

            <input type="submit" id="submit-btn" value="Valider votre inscription">
        </form>
    </section>

</body>
<script src="script/app.js"> </script>
<script src="script/form.js"> </script>
</html>