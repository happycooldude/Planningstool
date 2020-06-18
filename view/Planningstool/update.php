	<h1><?= $data['name'] ?> wijzigen</h1>
	<form name="plan" method="post" action="<?= URL ?>Planningstool/update">
		<input type="hidden" name="id" value="<?= $id; ?>">
		Starttijd
		<input type="text" name="starttijd" value="<?= $data["time"]; ?>" />
		<br>
		<br>
		Spelers
		<input type="text" name="spelers" value="<?= $data["players"]; ?>" />
		<br>
		<br>
		Uitlegger
		<input type="text" name="uitlegger" value="<?= $data["explainer"]; ?>" />
		<br>
		<br>
		<input type="submit" name="plan" value="add">
	</form>