<h1>Voeg een game toe om te plannen</h1>

<?foreach ($data as $games) {?>
<ul>
	<?echo "<li>";
				?>
	<a href="<? echo URL; ?>Planningstool/Plangame/<?echo $games['id']?>">
		<? echo $games["name"]; ?> </a>
	<?
				echo "</li>";
				echo $games["url"];
				?>
</ul>
<?}?>