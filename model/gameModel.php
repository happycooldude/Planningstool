<?php

function getAllGames(){
    // Met het try statement kunnen we code proberen uit te voeren. Wanneer deze
    // mislukt kunnen we de foutmelding afvangen en eventueel de gebruiker een
    // nette foutmelding laten zien. In het catch statement wordt de fout afgevangen
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();

        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("SELECT * FROM games");

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval is het mogelijk dat we meedere medewerkers ophalen, daarom gebruiken we
        // hier de fetchAll functie.
        $result = $stmt->fetchAll();

    }
    // Vang de foutmelding af
    catch(PDOException $e){
       // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }

    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;

    // Geef het resultaat terug aan de controller
    return $result;
}

function getGame($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();

        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM games WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();

    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;

    // Geef het resultaat terug aan de controller
    return $result;
    }

    function gamePlan($data){
    // Maak hier de code om een medewerker toe te voegen
    $conn=openDatabaseConnection();
    $stmt = $conn->prepare("INSERT INTO gamesplanned (players, explainer, time, gameId) VALUES ('$data[spelers]', '$data[uitlegger]', '$data[starttijd]', $data[id])");
    $stmt->execute();
    $dbConn=null;
    }


    function updateGame($data){
    // Maak hier de code om een geplande game te bewerken
    $conn=openDatabaseConnection();
    $stmt = $conn->prepare("UPDATE gamesplanned set players = '$data[spelers]', explainer = '$data[uitlegger]', time = '$data[starttijd]' WHERE id=$data[id]");
    $stmt->execute();
    $dbConn=null;
    }

    function deleteGame($id){
    // Maak hier de code om een geplande game te verwijderen
    $conn=openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM gamesplanned WHERE id=$id");
    $stmt->execute();
    $dbConn=null;
    }

    function getAllPlannedGames() {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT games.* , gamesplanned.* FROM games INNER JOIN gamesplanned ON games.id = gamesplanned.gameId ORDER BY time ASC  ");
        $result = $stmt->execute();
        $result = $stmt->fetchAll();
        $dbConn=null;
        return $result;
    }

    function getPlannedGame($id) {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT games.* , gamesplanned.* FROM games INNER JOIN gamesplanned ON games.id = gamesplanned.gameId WHERE gamesplanned.id = $id");
        $result = $stmt->execute();
        $result = $stmt->fetch();
        $dbConn=null;
        return $result;
    }




?>