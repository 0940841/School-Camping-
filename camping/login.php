<?php
session_start();
//Require database in this file
require_once "database/database.php";
//If form is posted, lets validate!
if (isset($_POST['submit'])) {
    //Retrieve values (email safe for query)
    $gebruikersnaam     = mysqli_escape_string($db, $_POST['gebruikersnaam']);
    $password   = $_POST['password']; // real_escape_string is not needed because of hash later.
    $errors = [];
    if(empty($email)) {
        $errors['gebruikersnaam'] = 'de gebruikersnaam mag niet leeg zijn';
    }
    if(empty($password)) {
        $errors['password'] = 'Het wachtwoord mag nniet leeg zijn';
    }
    // If everything is filled in the db can be checked
    if(empty($errors))
    {
        //Get password & name from DB
        $query = "SELECT * 
              FROM profiel
                          WHERE gebruikersnaam = '$gebruikersnaam'";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);
        //Check if email exists in database
        $errors = [];
        if ($user)
        {
            //Validate password
            if (password_verify($password, $user['password'])) {
                //Set email for later use in Session
                $_SESSION['gebruikersnaam'] = $gebruikersnaam;
                //Redirect to secure.php & exit script
                header("Location: secure.php");
                exit;
            }
            else {
                $errors['password'] = 'Het wachtwoord is incorrect';
            }
        } else
        {
            $errors['gebruikersnaam'] = 'Dit gebruikersnaam blijkt niet te bestaan.';
        }
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Camping Login</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="database/style.css"/>
</head>
<body>
<h1>Login</h1>

<form id="login" method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">
    <div>
        <label for="gebruikersnaam">Gebruikersnaam*</label>
        <input type="t" name="gebruikersnaam" id="gebruikersnaam" value="<?= (isset($gebruikersnaam) ? $gebruikersnaam : ''); ?>"/>
        <span class="error"><?= isset($errors['gebruikersnaam']) ? $errors['gebruikersnaam'] : ''; ?></span>
    </div>
    <div>
        <label for="password">Wachtwoord*</label>
        <input type="password" name="password" id="password"/>
        <span class="error"><?= isset($errors['password']) ? $errors['password'] : ''; ?></span>
    </div>
    <div>
        <input type="submit" name="submit" value="Login"/>
    </div>
    <div>
        <a href="index.php">Terug naar index</a>
    </div>
</form>
</body>
</html>