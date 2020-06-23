<?php
require(ROOT . "model/gameModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $plannedGames = getAllPlannedGames();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('Planningstool/index', $plannedGames);
}

function create(){
    $games = getAllgames();
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render("Planningstool/create", $games);
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["spelers"])) {
            $spelersErr = "Vul alstublieft de naam in.";
        } else {
            $spelers = $_POST["spelers"];

            if (!preg_match("/^[a-zA-Z ]*$/",$spelers)) {
            $spelersErr = "U kunt alleen letters en spaties invullen";
            }
        }

        if(empty($_POST["starttijd"])) {
            $starttijdErr = "Vul alstublieft de starttijd in.";
        } else {
            $starttijd = $_POST["starttijd"];
        }

        if(empty($_POST["uitlegger"])) {
            $uitleggerErr = "Vul alstublieft de uitlegger in.";
        } else {
            $uitlegger = $_POST["uitlegger"];

            if (!preg_match("/^[a-zA-Z ]*$/",$uitlegger)) {
            $uitleggerErr = "U kunt alleen letters en spaties invullen";
            }
        }
        echo $starttijdErr;
        echo "<br>";
        echo $spelersErr;
        echo "<br>";
        echo $uitleggerErr;
        
        if(!empty($spelers) && !empty($starttijd) && !empty($uitlegger)) {
            gamePlan($_POST);
            //2. Bouw een url op en redirect hierheen
            echo "<script language='javascript'>";
            echo 'alert("Plannen succesvol!")';
            echo "</script>";
            $url = URL. "Planningstool/index";
            header("refresh:0; $url");
        }
    }

}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $game = getPlannedGame($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render("Planningstool/update", $game);
}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["spelers"])) {
            $spelersErr = "Vul alstublieft de naam in.";
        } else {
            $spelers = $_POST["spelers"];

            if (!preg_match("/^[a-zA-Z ]*$/",$spelers)) {
            $spelersErr = "U kunt alleen letters en spaties invullen";
            }
        }

        if(empty($_POST["starttijd"])) {
            $starttijdErr = "Vul alstublieft de starttijd in.";
        } else {
            $starttijd = $_POST["starttijd"];
        }

        if(empty($_POST["uitlegger"])) {
            $uitleggerErr = "Vul alstublieft de uitlegger in.";
        } else {
            $uitlegger = $_POST["uitlegger"];

            if (!preg_match("/^[a-zA-Z ]*$/",$uitlegger)) {
            $uitleggerErr = "U kunt alleen letters en spaties invullen";
            }
        }
        echo $starttijdErr;
        echo "<br>";
        echo $spelersErr;
        echo "<br>";
        echo $uitleggerErr;
        
        if(!empty($spelers) && !empty($starttijd) && !empty($uitlegger)) {
            updateGame($_POST);
            //2. Bouw een url en redirect hierheen
            echo "<script language='javascript'>";
            echo 'alert("Bijwerken succesvol!")';
            echo "</script>";
            $url = URL. "Planningstool/index";
            header("refresh:0; $url");
        }
    }

}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $game = getGame($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('Planningstool/delete', $game);
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteGame($id);
    //2. Bouw een url en redirect hierheen
    echo "<script language='javascript'>";
    echo 'alert("Verwijderen succesvol!")';
    echo "</script>";
    $url = URL. "Planningstool/index";
    header("refresh:0; $url");
    
    
}

function Plangame($id) {
    $game = getGame($id);
    render('Planningstool/Plangame', $game);
}
?>