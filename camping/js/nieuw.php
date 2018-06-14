<?php
require_once("includes/settings_nieuws.php");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Retrieve all players
$query = "SELECT n.kop, n.omschrijving
          FROM nieuws AS n ";


//Create players array for all te results from the query
$news = [];

//Execute query & loop the results from the query and add them to the players array
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
}

//Free result set & close connection
$result->close();
$mysqli->close();

//Set the header to tell the client some json is coming its way
header("Content-Type: application/json");
echo json_encode($news);
exit;
