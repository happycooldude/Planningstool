<?include("model.php");
$gameData = readgame();
$data = readgames();
if(isset($_POST["submit"])){
$gameId = $_POST["gameOption"];
$gameinfo = readGameInfo($gameId);
}

$gameData = readgame();
?>