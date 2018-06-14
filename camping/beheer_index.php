
<?php

session_start();

require_once "database\database.php";
?>
<html>
<head>
    <link href="reset.css" rel="stylesheet" type="text/css">
    <link href="base.css" rel="stylesheet" type="text/css">
    <title>Camping "Ochtendgloren" Beheer </title>
</head>
<body>
<div id="header_index">
    <div id="title_index">
        <h1>INDEX</h1>
    </div>
</div>
<div id="content_index">
    <div id="ul1" class="same">
        <ul>
            <li><a href="beheerder.php">Beheerders</a></li>
            <li><a href="prijslijst.php">Prijslijst</a></li>
            <li><a href="personeel.php">Personeel</a></li>
            <li><a href="overons.php">Over ons</a></li>
        </ul>
    </div>
    <div id="ul2" class="same">
        <ul>
            <li><a href="resereveren.php">Reserveringen</a></li>
            <li><a href="producten.php">Producten</a></li>
            <li><a href="nieuws.php">Nieuws</a></li>
        </ul>
    </div>
</div>

</body>
</html>