<?php
session_start();

require_once "database\database.php";

if (isset($_POST['submit'])) {
    $gebruikersnaam    = mysqli_escape_string($db, $_POST['gebruikersnaam']);
    $wachtwoord   = $_POST['wachtwoord'];

    $errors = [];

    if(empty($gebruikersnaam)) {
        $errors['gebruikersnaam'] = 'gebruikersnaam mag niet leeg zijn';
    }

    if(empty($wachtwoord)) {
        $errors['wachtwoord'] = 'Het wachtwoord mag niet leeg zijn';
    }

    if(empty($errors)){

        $query = "SELECT *
                   FROM beheer
                      WHERE gebruikersnaam = '$gebruikersnaam'";

        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);
        $errors = [];

        if ($user){

            if (password_verify($wachtwoord, $user['wachtwoord'])) {

                $_SESSION['gebruikersnaam'] = $gebruikersnaam;

                header("Location: beheer_secure.php");
                exit;
            }
            else {
                $errors['wachtwoord'] = 'Het wachtwoord is incorrect';
            }
        } else
        {
            $errors['gebruikersnaam'] = 'Deze gebruikersnaam blijkt niet te bestaan';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="base.css" type="text/css" rel="stylesheet">
</head>
<body>
<form class="" action="beheer_index.php" method="post">
    <table>
        <tr>
            <th colspan="2"><h1>Beheer login</h1></th>
        </tr>
        <tr>
            <td>Gebruikersnaam<td>
            <td><input type="text" name="gebruikersnaam" max="30" value="<?= (isset($gebruikersnaam) ? $gebruikersnaam : ''); ?>"/>
                <span class="error"><?= isset($errors['gebruikersnaam']) ? $errors['gebruikersnaam'] : ''; ?> <td>
        </tr>
        <tr>
            <td>Wachtwoord<td>
            <td><input type="password" name="password" id="password"/>
                <span class="error"><?= isset($errors['password']) ? $errors['password'] : ''; ?></span><td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Login"/><td>
        </tr>
    </table>
</form>
</body>
</html>
