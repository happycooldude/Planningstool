<?
    echo "<h1>";
    echo $data["name"];
    echo "</h1>";
    echo $data["description"];
    echo "<br>";
    echo "Minimum spelers: ". $data["min_players"];
    echo "<br>";
    echo "Maximum spelers: ". $data["max_players"];
    echo "<br>";
    echo "Speeltijd: ". $data["play_minutes"];
    echo "<br>";
    echo "Uitlegtijd: ". $data["explain_minutes"];
    echo "<br>";
    echo "Benodigde vaardigheden: ". $data["skills"];
    echo "<br>";
    echo "Expansions: ". $data["expansions"];
    echo "<br>";
?>
<a href="<? echo $data["url"]; ?>"><? echo $data["url"]; ?></a>

<form name="plan" method="post" action="<?= URL ?>Planningstool/store">
    <input type="hidden" name="id" value="<?= $id ?>">
    starttijd <input type="text" name="starttijd" placeholder="Wanneer wil je gaan spelen" /><br>
    spelers <input type="text" name="spelers" placeholder="Wie doen er mee?" /><br>
    uitlegger <input type="text" name="uitlegger" placeholder="Wie legt het spel uit" /><br>
    <input type="submit" name="plan" value="add">
</form>
<br>
<h2>Uitleg video</h2>
<?echo $data['youtube']?>