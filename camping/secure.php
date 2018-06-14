<?php
session_start();
if(!isset($_SESSION['gebruikersnaam'])) {
    // redirect to login page
    header('Location: beheer_login.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
    <title>Secure page</title>
    <meta charset="utf-8"/>

</head>
<body>
    <h1>Secure page</h1>
    <p>Welkom, <?= $_SESSION['gebruikersnaam'] ?></p>
    <ul>
        <li><a href="beheer_index.php">Terug naar index</a></li>
        <li><a href="beheer_logout.php">Logout</a></li>
    </ul>
</body>
</html>
