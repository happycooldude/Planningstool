<?
include("controller.php");
?>

<div style="clear: both">
        <form method="POST" action="">
            <label><b>Huidige game:</b></label>
            <select name="gameOption">
                <?php 
                    foreach($gameData as $gameData) {
                ?>
                <option value="<? echo $gameData["id"] ?>"> <?php echo $gameData["name"]; ?></option>
                    <?php } ?>
            </select>
            <input type="submit" name="update" value="update">
        </form>
        <?
            if(isset($_POST["update"])) {
                $Value = $_POST["gameOption"];
                updateLocation($Value, $id);
            }
        ?>
        </div>