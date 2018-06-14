
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
            <div id="head1" class="head"></div>
            <div id="content_option">
                <div id="info"> <h1 class="caravan_h1">Chalet "Zeezicht" </h1>
                    <p class="caravan_p"><b>Type:</b> Chalet <br>
                        <br><b>Max. personen:</b> 7 <br>
                        <br><b>Omschrijving: </b> Heerlijk vakantie vieren in één van de luxe 7-persoons  Zeezicht chalets.<br>
                        De chalets hebben een grote douche en een apart toilet. In de woonkamer staat of een televisie met een Blu-Ray of DVD-speler of een Smart TV (1308-1315). De keuken is volledig ingericht met combi magnetron, vaatwasser, koel-vriescombinatie, een filter koffiezetapparaat en een waterkoker.
                        De chalets hebben 3 slaapkamers, waarvan twee met hoogslapers. De ouder slaapkamer is voorzien van een televisie. <br>
                        <br><b>Weektarief: </b> € 330,-</p></div>
                <?php if (isset($_POST['submit']))
                    $accomodatie = mysqli_escape_string($db, $_POST['personen']);
                    $personen   = mysqli_escape_string($db, $_POST['personen']);
                    $startdatum = mysqli_escape_string($db, $_POST['startdatum']);
                    $einddatum = mysqli_escape_string($db, $_POST['einddatum']);

                if(empty($personen)) {
                    $errors['personen'] = 'De hoeveelheid bezoekers mag niet leeg zijn';
                }
                if($personen > 7 || $personen < 1){
                    $errors['personen'] = "Er is een verkeerd aantal bezoekers ingevuld";
                }
                if(empty($startdatum)) {
                    $errors['startdatum'] = 'De start mag niet leeg zijn';
                }
                if(empty($einddatum)) {
                    $errors['einddatum'] = 'De einddatum mag niet leeg zijn';
                }

                if($startdatum > $einddatum){
                    $errors['startdatum'] = 'Er is een verkeerde datum ingevuld';
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
                    <label for="einddatum">Einddatum*</label>
                    <input type="date" name="einddatum" id="einddatum" value="<?= (isset($einddatum) ? $einddatum : ''); ?>"/>
                    <span class="error"><?= isset($errors['einddatum']) ? $errors['einddatum'] : ''; ?></span>
                </div>
                <div>
                    <input type="submit" name="submit" value="Register"/>
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