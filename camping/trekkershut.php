
<html>
<head>
    <link href="reset.css" rel="stylesheet" type="text/css">
    <link href="option_base.css" rel="stylesheet" type="text/css">
    <title>Camping "Ochtendgloren" </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php require_once "database/database.php";
         ?>

</head>
 <body>
    <div id="container">
        <div id="head" class="green" >
            <div id="Ochtendgloren">
                <h1>"Camping Ochtendgloren"</h1>
            </div>
            <div id="nav">
                <ul>
                    <a href="index.php#head"><li>Home</li></a>
                    <a href="index.php#content"><li>Regio nieuws</li></a>
                    <a href="index.php#options"><li>Reserveren</li></a>
                    <a href="index.php#rules"><li>Regels</li></a>
                    <a href="index.php#contact"><li>Contact</li></a>
                    <a href="login.php"><li class="right">Login</li></a>
                    <a href="registreren.php"><li class="right">Registreer</li></a>

                </ul>
            </div>

        <div id="content">
            <div id="head2" class="head"></div>
            <div id="content_option">
                <div id="info">  <h1 class="caravan_h1">Trekkershut de Luxe </h1>
                    <p class="caravan_p"><b>Type:</b>  Trekkershut <br>
                        <br><b>Max. personen:</b> 6 <br>
                        <br><b>Omschrijving: </b> Vanaf Seizoen 2017 hebben wij ook 3 Trekkershutten de Luxe

                        In de Trekkershut de Luxe heb je meer privacy doordat het woon- en slaapgedeelte van elkaar gescheiden zijn.

                        De slaapkamer is voorzien van 2 stapelbedden met 2 onderbedden, dus totaal 6 slaapplaatsen.

                        De Trekkershut de Luxe is iets groter dan de 'gewone' trekkershut en door onder andere een aanrecht met water, kooktoestel, koffiezetapparaat, een koelkast en een kacheltje is er meer comfort.

                        Ook is er een complete keukenuitrusting aanwezig in deze Trekkershut de Luxe. <br><b>Weektarief: </b> € 283,-
                    </p></div>
                <?php if (isset($_POST['submit']))
                    $accomodatie = mysqli_escape_string($db, $_POST['personen']);
                    $personen   = mysqli_escape_string($db, $_POST['personen']);
                    $startdatum = mysqli_escape_string($db, $_POST['startdatum']);
                    $startdatum = mysqli_escape_string($db, $_POST['startdatum']);

                if(empty($personen)) {
                    $errors['personen'] = 'De hoeveelheid bezoekers mag niet leeg zijn';
                }
                if(empty($startdatum)) {
                    $errors['startdatum'] = 'De start mag niet leeg zijn';
                }
                if(empty($einddatum)) {
                    $errors['einddatum'] = 'De einddatum mag niet leeg zijn';
                }

                if(empty($errors)) {
                    // The password field in de database must be at least 64 characters long, because of the hash
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $query = "INSERT INTO boeking (accomodatie,personen, startdatum,einddatum);
                  VALUES ('$accomodatie', '$personen', '$startdatum', '$einddatum' )";
                    $result = mysqli_query($db, $query)
                    or die('Error: '.mysqli_error($db));
                    header('Location: index.php');
                    exit;
                }


                    ?>
                <div>
                    <label for="personen">Personen*</label>
                    <input type="number" name="personen" id="personen" value="<?= (isset($personen) ? $personen : ''); ?>"/>
                    <span class="error"><?= isset($errors['personen']) ? $errors['personen'] : ''; ?></span>
                </div>
                <div>
                    <label for="startdatum">Startdatum*</label>
                    <input type="date" name="startdatum" id=startdatum" value="<?= (isset($startdatum) ? $startdatum : ''); ?>"/>
                    <span class="error"><?= isset($errors['startdatum']) ? $errors['startdatum'] : ''; ?></span>
                </div>
                <div>
                    <label for="einddatum">Adres*</label>
                    <input type="date" name="einddatum" id="einddatum" value="<?= (isset($einddatum) ? $einddatum : ''); ?>"/>
                    <span class="error"><?= isset($errors['einddatum']) ? $errors['einddatum'] : ''; ?></span>
                </div>

            </div>



        </div>
        <div id="foot">
            <div id="footerL">
                <h1>Vind de leukste Bezienswaardigheden!</h1>
              <ul>
                  <li><a href="http://www.deltawerken.com">Deltawerken</a></li>
                  <li><a href="http://www.neeltjejans.nl">Deltapark Neeltje Jans</a></li>
                  <li><a href="http://www.langejanmiddelburg.nl">Middelburg</a></li>
                  <li><a href="http://www.zeelandvoorbeginners.nl/stranden.htm">Stranden</a></li>
                  <li><a href="http://www.arsenaal.com">Het Arsenaal</a></li>
                  <li><a href="http://vvvzeeland.nl">Fietsen</a></li>
                  <li><a href="http://www.mooistedorpjes.nl/landen/nederland/zeeland/sluis/">Sluis</a></li>
                  <li><a href="http://www.zierikzee-monumentenstad.nl">Zierikzee</a></li>
                  <li><a href="http://www.vvvzeeland.nl">Watersport</a></li>

              </ul>
            </div>
        </div>
    </div>
    <script src="js/nieuws.json"></script>
</body>
</html>