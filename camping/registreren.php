<?php
//Require database in this file
require_once "database/database.php";
//If form is posted, lets validate!
if (isset($_POST['submit']))
{
    //Retrieve values (email safe for query)
    $gebuikersnaam = mysqli_escape_string($db, $_POST['gebruikersnaam']);
    $password      = $_POST['password']);
    $voornaam      = mysqli_escape_string($db, $_POST['voornaam']);
    $achternaam    = mysqli_escape_string($db, $_POST['achternaam']);
    $leeftijd      = mysqli_escape_string($db, $_POST['leeftijd']);
    $email         = mysqli_escape_string($db, $_POST['email']);
    $adres         = mysqli_escape_string($db, $_POST['adres']);
    $postcode      = mysqli_escape_string($db, $_POST['postcode']);
    $plaats        = mysqli_escape_string($db, $_POST['plaats']);
    $errors = [];

    if(empty($gebruikersnaam)) {
    $errors['gebruikersnaam'] = 'de gebruikersnaam mag niet leeg zijn';
    }
    if(empty($password)) {
        $errors['password'] = 'Het wachtwoord mag niet leeg zijn';
    }
    if(empty($voornaam)) {
        $errors['voornaam'] = 'De voornaam mag niet leeg zijn';
    }
    if(empty($achternaam)) {
        $errors['achternaam'] = 'de achternaam mag niet leeg zijn';
    }
    if(empty($leeftijd)) {
        $errors['leeftijd'] = 'De leeftijd mag niet leeg zijn';
    }
    if(empty($email)) {
        $errors['email'] = 'De email mag niet leeg zijn';
    }
    if(empty($adres)) {
        $errors['adres'] = 'Het adres mag niet leeg zijn';
    }
    if(empty($postcode)) {
        $errors['postcode'] = 'De postcode mag niet leeg zijn';
    }
    if(empty($plaats)) {
        $errors['plaats'] = 'De plaats mag niet leeg zijn';
    }

    if(empty($errors)) {
        // The password field in de database must be at least 64 characters long, because of the hash
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO profiel (gebruikersnaam, password, voornaam, achternaam, leeftijd, email, adres, postcode, plaats);
                  VALUES ('$gebruikersnaam', '$password', '$voornaam', '$achternaam', '$leeftijd', '$email', '$adres', '$postcode', '$plaats' )";
        $result = mysqli_query($db, $query)
        or die('Error: '.mysqli_error($db));
        header('Location: index.php');
        exit;
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Register new user</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="database/style.css"/>
</head>
<body>
<h1>New User</h1>
<form action="" method="post">
    <div>
            <label for="gebruikersnaam">Gebruikersnaam*</label>
            <input type="text" name="gebruikersnaam" id="gebruikersnaam" value="<?= (isset($gebruikersnaam) ? $gebruikersnaam : ''); ?>"/>
            <span class="error"><?= isset($errors['gebruikersnaam']) ? $errors['gebruikersnaam'] : ''; ?></span>
        </div>
        <div>
            <label for="password">Wachtwoord*</label>
            <input type="password" name="password" id="password" value="<?= (isset($password) ? $password : ''); ?>"/>
            <span class="error"><?= isset($errors['password']) ? $errors['password'] : ''; ?></span>
        </div>
        <div>
            <label for="voornaam">Voornaam*</label>
            <input type="text" name="voornaam" id="voornaam" value="<?= (isset($voornaam) ? $voornaam : ''); ?>"/>
            <span class="error"><?= isset($errors['voornaam']) ? $errors['voornaam'] : ''; ?></span>
        </div>
        <div>
            <label for="achternaam">Achternaam*</label>
            <input type="text" name="achternaam" id="achternaam" value="<?= (isset($achternaam) ? $achternaam : ''); ?>"/>
            <span class="error"><?= isset($errors['achternaam']) ? $errors['achternaam'] : ''; ?></span>
        </div>
        <div>
            <div>
                <label for="leeftijd">Leeftijd*</label>
                <input type="number" name="leeftijd" id="leeftijd" value="<?= (isset($leeftijd) ? $leeftijd : ''); ?>"/>
                <span class="error"><?= isset($errors['leeftijd']) ? $errors['leeftijd'] : ''; ?></span>
            </div>
            <div>
                <label for="email">E-mail*</label>
                <input type="email" name="email" id="email" value="<?= (isset($email) ? $email : ''); ?>"/>
                <span class="error"><?= isset($errors['email']) ? $errors['email'] : ''; ?></span>
            </div>
            <div>
                <label for="adres">Adres*</label>
                <input type="text" name="adres" id="adres" value="<?= (isset($adres) ? $adres : ''); ?>"/>
                <span class="error"><?= isset($errors['adres']) ? $errors['adres'] : ''; ?></span>
            </div>
            <div>
                <label for="postcode">Postcode*</label>
                <input type="text" name="postcode" id="postcode"  value="<?= (isset($postcode) ? $postcode : ''); ?>"/>
                <span class="error"><?= isset($errors['postcode']) ? $errors['postcode'] : ''; ?></span>
            </div>
            <div>
                <label for="plaats">Plaats*</label>
                <input type="text" name="plaats" id="plaats"  value="<?= (isset($plaats) ? $plaats : ''); ?>"/>
                <span class="error"><?= isset($errors['plaats']) ? $errors['plaats'] : ''; ?></span>
            </div>
            <div>
        <input type="submit" name="submit" value="Register"/>
    </div>
</form>
</body>
</html>