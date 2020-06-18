<?
require('controller.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lijst met alle games</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" />
</head>

<body>
    <header>

        <h1>Kies een game</h1>
        <a class="backbutton" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
        <form method="POST" action="">
            <label><b>Kies een game:</b></label>
            <select name="gameOption">
                <?php 
                    foreach($gameData as $gameData) {
                ?>
                <option value="<? echo $gameData["id"]?>"> <?php echo $gameData["name"]; ?></option>
                    <?php } ?>
            </select>
            <input type="submit" name="submit" value="Kies">
        </form>
        <br>
        <img src="../images/<?echo $gameinfo["image"]?>" width="300" max-height="500"></img><br>
        <?= $gameData["min_players"].'<br>';
        echo $gameData['max_players'].'<br>';
        echo $gameData['play_minutes'].'<br>';
        echo $gameData['explain_minutes'];
        ?>
    </header>



    <div id="container">
        
        <?= $gameinfo["description"]."<br>";
           echo $gameinfo["youtube"]."<br><br>";
           echo $gameinfo["url"];
        ?>
    </div>
    <?include("footer.php")?>
</body>

</html>