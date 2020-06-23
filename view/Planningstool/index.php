	<h1>Overzicht van geplande games</h1>
	<ul>
			<?php
			foreach ($data as $games) {
				echo "<h1>";
				echo $games["name"];
				echo "</h1>";
				?>
				<br>
				<h4>Startijd = <? echo $games["time"]; ?></h4>
				<h4>Speltijd = <? echo $games["play_minutes"];?> minuten</h4>
				<h4>Spelers = <? echo $games["players"]; ?></h4>
				<h4>Uitlegger = <? echo $games["explainer"]; ?></h4>

				<br>
				<a href="<? echo URL?>Planningstool/edit/<? echo $games["id"];?>">Bewerk</a>
				<a href="<? echo URL?>Planningstool/delete/<? echo $games["id"];?>">Verwijder</a>
				<img src="<? echo URL?>/pictures/<?echo $games["image"]?>" alt="image not found">
				<?
				
			}
			
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
	</ul>