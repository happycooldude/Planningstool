<?
include("datalayer.php");
$locationData = readgame();?>

<div style="clear: both">
        <form method="POST" action="">
            <label><b>Huidige Locatie:</b></label>
            <select name="locationOption">
                <?php 
                    foreach($locationData as $locationData) {
                ?>
                <option value="<? echo $locationData["id"] ?>"> <?php echo $locationData["name"]; ?></option>
                    <?php } ?>
            </select>
            <input type="submit" name="update" value="update">
        </form>
        <?
            if(isset($_POST["update"])) {
                $Value = $_POST["locationOption"];
                updateLocation($Value, $id);
            }
        ?>
        </div>