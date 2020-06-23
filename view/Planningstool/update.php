<h1>Bewerk geplande game</h1>

<h2><? echo $data["name"]; ?></h2>

<form name="plan" method="post" action="<?=URL?>Planningstool/update">
<input type="hidden" name="id" value="<? echo $id; ?>">
Starttijd 
<input type="text" name="starttijd" value="<? echo $data['time']; ?>"/>
<br>
<br>
Spelers 
<input type="text" name="spelers" value="<? echo $data['players']; ?>"/>
<br>
<br>
Uitlegger 
<input type="text" name="uitlegger" value="<? echo $data['explainer']; ?>"/>
<br>
<br>
<input type="submit" name="plan" value="Bewerk">
<? echo $spelersErr; ?>
</form>