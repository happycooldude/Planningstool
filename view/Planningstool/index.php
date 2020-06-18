	<h1>Overzicht van geplande games</h1>
	<ul>
			<?php
			foreach ($data as $games) {
				echo "<li>";
				echo "De spelers zijn ", ($games["players"]),"<br>";
				echo "De uitlegger is ",($games["explainer"]),"<br>";
				echo "De duur van het spel is ",($games["play_minutes"]), " minuten","<br>";
				echo "De starttijd is om ",($games["time"]),"<br>";
				?>
				
				<? echo $games["name"]; ?>
				<a href="<? echo URL?>Planningstool/edit/<? echo $games["id"];?>">Bewerk</a>
                <a href="<? echo URL?>Planningstool/delete/<? echo $games["id"];?>">Verwijder</a><br>
				<img src="<?= URL ?>public/pictures/<?=$data["image"]?>" alt="image not found">
				<?
				echo "</li>";
			}
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
	</ul>