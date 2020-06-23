<h1>Plan je game</h1>	
<ul>
	<? foreach($data as $games) {
		?>
		<li>
		<span>
		<a href="<? echo URL?>Planningstool/Plangame/<? echo $games["id"] ?>"><? echo $games["name"]; ?></a>
		</li>
		<?
	}
	?>
</ul>
