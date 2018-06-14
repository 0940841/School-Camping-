
<html>
<head>
    <link href="reset.css" rel="stylesheet" type="text/css">
    <link href="base.css" rel="stylesheet" type="text/css">
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
                    <a href="#head"><li>Home</li></a>
                    <a href="#content"><li>Regio nieuws</li></a>
                    <a href="#options"><li>Reserveren</li></a>
                    <a href="#rules"><li>Regels</li></a>
                    <a href="#contact"><li>Contact</li></a>
                    <a href="login.php"><li class="right">Login</li></a>
                    <a href="registreren.php"><li class="right">Registreer</li></a>

                </ul>
        </div>
            <!-- begin slide show -->
            <div id="myCarousel" class="carousel slide " data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active ">
                        <img src="images/overview.jpg" alt="Luchtfoto" style="height:500px !important; width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/chalette.jpg" alt="Chalette" style="height:500px !important; width: 100%;">
                    </div>

                    <div class="item">
                        <img src="images/tenten.jpeg" alt="Tenten" style="height:500px !important; width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/caravan.jpg" alt="stacaravan" style="height:500px !important; width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/tent2.jpg" alt="Tent met gasten" style="height:500px !important; width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/bungalow.jpg" alt="bungalow" style="height:500px !important; width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- einde slideshow -->
        </div>
        <div id="content">
            <!-- begin nieuws berichten -->
            <div id="news" class="green">
                <div class="subject" id="sub1">
                   <div class="news_pic" id="news_img1"></div>
                   <div class="information">
                       <h1 class="news_title"> Opknapbeurt fietsroutenetwerk zeeland</h1>
                       <p class="news_text">FIKS is de naam van het fietsroutenetwerk dat in 2006 in Zeeland werd aangelegd. Sindsdien zijn er nieuwe natuurgebieden bijgekomen, nieuwe buitendijkse paden, infrastructurele projecten vonden plaats. Kortom, het landschap is veranderd. Dus is het logisch dat ook het fietsknooppuntensysteem hieraan aangepast wordt. Er komt meer buitendijks fietspad en er is meer keus tussen in of uit de wind rijden. Ook komen er nieuwe en duurzame routeborden. Zeeland wil graag de favoriete fietsprovincie van ons land blijven, zoveel is duidelijk.

                           Men wil zo meer tegemoet komen aan de wensen van de hedendaagse fietser en vervangt beschadigde borden meteen voor duurzame exemplaren. Men ziet het fietsroutenetwerk als een visitekaartje en de verwachting is dat de vernieuwingen meer mensen zullen verleiden om met de fiets Zeeland te gaan ontdekken. Het is mogelijk dat er enige overlast zal ontstaan door de werkzaamheden. Stickers op de overzichtspanelen zullen dit ook melden. De opening van het hernieuwde netwerk staat gepland voor Pasen 2015.

                           fiksCampingtrend

                           <br>Het netwerk is momenteel 1650 kilometer lang en heeft 375 knooppunten. Er gaat een stuk van 116 kilometer verdwijnen en daar komt 284 kilometer nieuw of gewijzigd voor terug. Van de 6.700 borden verdwijnen er 1700 en komen bijna 800 nieuwe voor terug. Nog eens 750 borden zullen vervangen worden en 3000 borden krijgen vanwege verkleuring een opfrisbeurt.

                           <br>Meer informatie op: <a href="http://www.vvvzeeland.nl">vvvzeeland.nl</a></p>
                   </div>
                </div>
                <div class="subject" id="sub2">
                   <div class="news_pic" id="news_img2"></div>
                   <div class="information">
                       <h1 class="news_title">Ontsnapte paarden wekken campinggasten</h1>
                       <p class="news_text">Ontsnapte paarden wekken campinggasten
                           Een Duitse campinggast op minicamping Het Brieden in Brijdorpe (Schouwen-Duiveland, bij Scharendijke) keek vanochtend vreemd op toen hij de deur van de caravan opende. Een tiental ontsnapte paarden én een ezel stonden op het campingveld te grazen. De politie moest eraan te pas komen om de dieren weer terug te brengen.<br>
                           "In het altijd zo pittoreske Brijdorpe (wie kent het niet) was het vanmorgen vroeg een drukte van belang", schrijft politieteam Oosterscheldebekken op Facebook. De opgetrommelde agenten hadden al snel een vermoeden waar de paarden vandaan konden komen en meldden zich om 6.45 uur bij christelijk begeleidingscentrum Aan de Hand.<br>

                           "Mijn zoon hoorde buiten gepraat en deed het raam open. Toen vroeg een agent: 'Hebben jullie paarden?'", vertelt eigenaresse Astrid Boot. "'Veel paarden? En ook een ezel?' Dus wij snel ons bed uit en toen bleek dat ze bij de buren op de camping stonden te grazen."<br>
                           <br><b>'Het zijn net schapen'</b><br>
                           "Door de nattigheid lopen ze in een bak met zand. Natuurlijk krijgen ze wel eten en hooi, maar zo'n lekker graslandje is stukken aantrekkelijker", vertelt Astrid in de radio-uitzending Zeeland wordt wakker. "Ze bleven gelukkig bij elkaar, het zijn wat dat betreft net schapen: als er een over de dam gaat, volgen er meer."</p>
                   </div>
                </div>
                <div class="subject" id="sub3">
                   <div class="news_pic" id="news_img3"></div>
                   <div class="information">
                       <h1 class="news_title">Twee Zeeuwse campings zijn een 'Superplatz'</h1>
                       <p class="news_text">Camping Julianahoeve in Renesse en camping Westhove in Aagtekerke zijn door de Duitse toeristenorganisatie ADAC uitgeroepen tot Superplatz 2017. De campings behoren tot de in totaal zestien campings in Nederland die dat predicaat een jaar lang mogen dragen.<br>
                           <br><b>Michelin-sterren</b><br>
                           De onderscheiding van ADAC wordt binnen de recreatiesector ook wel vergeleken met het behalen van een Michelin-ster in de horeca. Beide campings werden eind december ook al door de ANWB uitgeroepen tot 'Top camping'.<br>
                           <br><b>Der Camperbibel</b><br>
                           De campings in Renesse en Aagtekerke worden opgenomen in de campinggids van ADAC voor 2017. De gids staat in de kampeerwereld ook wel bekend als 'Der Camperbibel'. De campings die zijn opgenomen in de gids moeten aan allerlei criteria voldoen, van luxe voorzieningen tot ruime kampeerplaatsen.<br>



                       </p>
                   </div>
                </div>
            </div>
            <!-- einde nieuws -->
            <!-- begin caravan options -->
            <div id="options" class="green">
                <div class="caravan" id="type1">
                    <div class="content1">
                        <h1 class="caravan_h1">Chalet "Zeezicht" </h1>
                        <p class="caravan_p"><b>Type:</b> Chalet <br>
                            <br><b>Max. personen:</b> 7 <br>
                            <br><b>Omschrijving: </b> Heerlijk vakantie vieren in één van de luxe 7-persoons  Zeezicht chalets.<br>
                            De chalets hebben een grote douche en een apart toilet. In de woonkamer staat of een televisie met een Blu-Ray of DVD-speler of een Smart TV (1308-1315). De keuken is volledig ingericht met combi magnetron, vaatwasser, koel-vriescombinatie, een filter koffiezetapparaat en een waterkoker.
                            De chalets hebben 3 slaapkamers, waarvan twee met hoogslapers. De ouder slaapkamer is voorzien van een televisie. <br>
                            <br><b>Weektarief: </b> € 330,-</p>
                    </div>
                    <div class="size image1" id="photo1"></div>
                    <div class="link1">
                        <a href="chalet_zeezicht.php"><div class="button"><p>Meer informatie</p></div></a>
                    </div>
                </div>
                <div class="caravan" id="type2">
                    <div class="size image2" id="photo2"></div>
                    <div class="content2">
                        <h1 class="caravan_h1">Trekkershut de Luxe </h1>
                        <p class="caravan_p"><b>Type:</b>  Trekkershut <br>
                            <br><b>Max. personen:</b> 6 <br>
                            <br><b>Omschrijving: </b> Vanaf Seizoen 2017 hebben wij ook 3 Trekkershutten de Luxe

                            In de Trekkershut de Luxe heb je meer privacy doordat het woon- en slaapgedeelte van elkaar gescheiden zijn.

                            De slaapkamer is voorzien van 2 stapelbedden met 2 onderbedden, dus totaal 6 slaapplaatsen.

                            De Trekkershut de Luxe is iets groter dan de 'gewone' trekkershut en door onder andere een aanrecht met water, kooktoestel, koffiezetapparaat, een koelkast en een kacheltje is er meer comfort.

                            Ook is er een complete keukenuitrusting aanwezig in deze Trekkershut de Luxe. <br><b>Weektarief: </b> € 283,-
                        </p>
                    </div>
                    <div class="link2">
                        <a href="trekkershut.php"><div class="button"><p>Meer informatie</p></div></a>
                    </div>
                </div>
                <div class="caravan" id="type3">
                    <div class="content1">
                        <h1 class="caravan_h1">Strandgaper </h1>
                        <p class="caravan_p"><b>Type:</b> Strandhuis <br>
                            <br><b>Max. personen:</b> 6 <br>
                            <br><b>Omschrijving: </b> Het type Strandgaper is 75m2 groot en beschikt over een gezellige woonkamer met openslaande deuren, een aparte woonkeuken, drie slaapkamers, een badkamer met apart toilet en een inpandige berging. Geschikt voor maximaal 6 personen. De keuken is uitgerust met een combi- magnetron, vaatwasser, gaskookplaat en alle bijbehorende keukenapparatuur. Via de woonkeuken kunt u met twee treden omhoog om toegang te krijgen tot de gezellig ingerichte woonkamer. In een aantal chalets zijn huisdieren toegestaan en is een wasmachine aanwezig.
                            <br><br><b>Weektarief: </b> € 567,-
                        </p>
                    </div>
                    <div class="size image1" id="photo3"></div>
                    <div class="link1">
                        <a href="strandgaper.php"><div class="button"><p>Meer informatie</p></div></a>
                    </div>
                </div>
                <div class="caravan" id="type4">
                    <div class="size image2" id="photo4"></div>
                    <div class="content2">
                        <h1 class="caravan_h1">Helikopter </h1>
                        <p class="caravan_p"><b>Type:</b> Trekkershut <br>
                            <br><b>Max. personen:</b> 2 <br>
                            <br><b>Omschrijving: </b> "Die camping in Vollenhove heeft een Helikopter in de vijver staan..!!"

                            Overnachten in een Echte MI2 helikopter het kan op camping Ochtendgloren. Het heeft de luxe van een trekkershut, en het is een avontuur om er te komen maar het is wel super gaaf. Want wie kan nu zeggen dat hij/zij in een helikopter heeft geslapen?

                            De helikopter staat op een platform in de vijver waar je met een pondje naar toe kunt. In de helikopter is een bed, Tv, kachel en een gelegenheid om een kopje koffie of thee te maken. Buiten is een zitje en er is wifi.
                            <br><br><b>Weektarief: </b> € 250,-
                        </p>
                    </div>
                    <div class="link2">
                        <a href="helikopter.php"><div class="button"><p>Meer informatie</p></div></a>
                    </div>
                </div>
                <div class="caravan" id="type5">
                    <div class="content1">
                        <h1 class="caravan_h1">Safaritent</h1>
                        <p class="caravan_p"><b>Type:</b> Tent <br>
                            <br><b>Max. personen:</b> 4 <br>
                            <br><b>Omschrijving: </b> NIEUW IN 2018 SAFARITENT!<br><br>

                            Rust, Ruimte en natuur zijn dé begrippen voor een vakantie op de Veluwe!
                            Deze prachtige safaritenten bieden ruimte aan 4 personen en zijn voorzien van 2 slaapkabines. De tenten zijn volledig, maar simpel ingericht. Op de veranda staat een heerlijke lounchebank waarop je heerlijk kan ontspannen tewijl je naar de kinderen kijkt die op het sportveld aan het spelen zijn. Deze safaritent is voorzien van een keukentje waar jezelf heerlijk in kunt koken.
                            <br><br>
                            Deze Safaritenten zijn ideaal voor gezinnen met kinderen.

                            <br>
                            <br><b>Weektarief: </b> € 299,-
                        </p>
                    </div>
                    <div class="size image1" id="photo5"></div>
                    <div class="link1">
                        <a href="safaritent.php"><div class="button"><p>Meer informatie</p></div></a>
                    </div>
                </div>
                <div class="caravan" id="type6">
                    <div class="size image2" id="photo6"></div>
                    <div class="content2">
                        <h1 class="caravan_h1">Tipi </h1>
                        <p class="caravan_p"><b>Type:</b> Tent<br>
                            <br><b>Max. personen:</b> 5<br>
                            <br><b>Omschrijving: </b>TIPI TIME !!!!
                            Wat is er nu leuker om een keer indiaantje te spelen in je vakantie? Niets toch ?? Dat kan op de Jutberg! Spannend overnachten of gewoon een dagje in de tent, het kan allebei. Deze echte "TIPI" tenten geven je de mogelijkheid om heerlijk vakantie te vieren zonder te moeten sjouwen en bouwen. De ruime tipi staat voor u klaar bij aankomst! Het interieur is verzorgd met stoeltjes en vaste bedden. Kook- en eetgerei is ook aanwezig met een buitenkeuken. De tenten bieden plaats aan maximaal 5 personen. Met lekker veel leefruimte om de tenten zijn het bij uitstek geschikte plekken voor een vakantie met "net even meer" avontuur. Je dient wel zelf je eigen slaapzak of dekbed mee te nemen (dekbedden en kussens zijn niet aanwezig in de Tipi). <br>
                            <br><b>Weektarief: </b> € 305,-
                        </p>
                    </div>
                    <div class="link2">
                        <a href="tipi.php"><div class="button"><p>Meer informatie</p></div></a>
                    </div>
                </div>
            </div>
            <!-- einde caravan options -->
            <!-- begin camping regels -->
            <div id="rules" class="green">
                <div id="camping_rules">
                <div id="title"><h1> Camping Regels</h1></div>
                <div id="leftrules">
                    <p>Er mogen maximaal 5 kratten / traytjes bier (inclusief de lege kratten) bij de plaats staan (i.v.m. veiligheid).
                    <br><br>Chemische toiletemmers alleen op de daarvoor aangegeven plaats reinigen.
                    <br><br>Uitsluitend kampeermeubilair is toegestaan, bankstellen e.d. dus niet.
                    <br><br>Tapinstallaties met koolzuurflessen zijn niet toegestaan.
                    <br><br>Het is verboden in de toiletgebouwen vis, groente, etc. schoon te maken.
                    <br><br>Huisvuil in dichtgebonden vuilniszakken in de afval/perscontainers deponeren.
                    <br><br>Het is verboden in de toiletgebouwen vis, groente, etc. schoon te maken<br>Huisvuil in dichtgebonden vuilniszakken in de afval/perscontainers deponeren.
                    <br><br>Iedere kampeerder heeft de verplichting om zijn gehuurde plaats en de direkte omgeving schoon te houden.
                    <br><br> Open vuur is ten strengste verboden. (kampvuur, vuurkorven, fakkels e.d. zijn niet toegestaan) Barbecues van het gras af, niet te dicht bij de tenten. Blusmateriaal binnen handbereik (emmer water).
                    <br><br> Het is uitdrukkelijk verboden op de camping ochtendgloren te graven, ook bij regen.</p>

                </div>
                <div id="rightrules">
                    <br><br>Parkeren van de auto mag alleen op de daarvoor toegewezen plaatsen, niet op je kampeerplaats. Ontstaat er schade aan de camping en/of aan derden dan wordt deze schade op de (mede)huurder verhaald.
                    <br><br>Op de camping ochtendgloren mag met een auto/motor/scooter uitsluitend stapvoets worden gereden.
                    <br><br>Radio, TV of andere muziekdragers mogen aan tussen 9:00 u en 23:00 u, op een volume waar andere kampeerders zich niet aan kunnen storen. Alleen draagbare radio's zonder losse boxen en met normaal geluidsniveau zijn toegestaan. We brengen € 50.00 behandelingskosten in rekening indien we je muziekinstallatie moeten innemen als deze niet op de juiste wijze gebruikt wordt. Autoradio's zijn niet toegestaan.
                    <br><br>Het is verboden na 19.00 uur bezoek te ontvangen in of voor de tent of caravan.
                    <br><br>Bezoek voor één of meerdere nachten is niet toegestaan, ook niet tegen betaling. Het is eveneens niet mogelijk om kampeerders gedurende de week te wisselen/vervangen voor iemand anders.
                    <br><br>Nachtrust vanaf 23.00 uur t/m 09.00 uur. Gedurende deze uren kunnen er door de bewaking aanvullende eisen worden gesteld i.v.m. ordehandhaving.
                    <br><br>Het is verboden in het bezit te zijn van drugs, dus ook geen softdrugs. Overtreders worden onmiddellijk van de camping verwijderd zonder restitutie van staangeld en/of borg.
                    </div>
                </div>
            </div>
            <!-- einde camping regels -->
            <!-- begin contact informatie -->
            <div id="contact" class="green">
                <div id="contactinfo">
                    <h1 id="contact_title">Contact</h1>
                    <p id="contact_left">
                        <b>Adres</b><br><br>
                        Asselweg 24<br><br>
                        4360 SC Middelburg<br><br>
                        <a href="http://info@ochtendgloren.nl">info@ochtendgloren.nl</a>


                    </p>
                    <p id="contact_right">
                    <b>Openingstijden</b><br><br>
                    In 2018 is deze camping open van 22 maart tot 28 october <br><br>
                    <b>Openingstijden receptie</b><br><br>
                    Vanaf 22 maart tot 28 october<br>
                    Maandag - Donderdag: 7.00 - 18.00<br>
                    Vrijdag - Zaterdag : 7.00 - 19.00<br>
                    Zondag             : gesloten<br><br>
                    15 Juni - 23 September
                    Maandag - zaterdag: 7.00 - 22.00<br>
                    Zondag: Gesloten</p>
                </div>
                <!-- einde contact informatie -->
                <div id="fotobox">

                </div>
            </div>


        </div>
        <!-- footer -->
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