<h1><?=$data['name']?> verwijderen</h1>
    <form name="delete" method="post" action="<?=URL?>planningstool/destroy/<?=$data['id']?>">

        <?="Weet u zeker dat u $data[name] wilt verwijderen?"?><br>

        <input type="submit" name="delete" value="delete" onclick="return confirm('Weet je zeker dat je het wilt verwijderen?')">
    </form>