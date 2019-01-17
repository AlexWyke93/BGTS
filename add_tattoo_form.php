<?php
/**
 * PHP version 7.2
 *
 * @category PHP
 * @package  BGTS-BE
 * @author   Alexander Wyke <alexwyke93@gmail.com>
 * @license  none
 * @link     n/a
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Add Tattoo Form</title>
</head>
<body>
    <h1>New Tattoo</h1>
    <form id="add" role="form" method="POST" action="add_tattoo.php" enctype="multipart/form-data">
        <label for="tattooTitle">Tattoo Name: </label>
        <input type="text" name="tattooTitle">

        <?php
        include 'db_functions.php';

        $result = Db_query("SELECT artistId, artistName FROM artists ORDER BY artistId ASC");

        echo "<label for='artistId'>Select Artist: </label>";
        echo "<select name='artistId' value='Artist'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value=$row[artistId]>$row[artistName]</option>";
        }
        echo "</select>";

        ?>

        <label for="tattooDescription">Tattoo Description: </label>
        <textarea type="text" name="tattooDescription"></textarea>
        <label for='typeId[]'>Select Types: </label>
        <select multiple name="typeId[]" value='Type'>
        <?php
        $result = Db_query("SELECT tattootypeId, tattootype FROM tattootype ORDER BY tattootypeId ASC");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value=$row[tattootype]>$row[tattootypeId]" . " - " . "$row[tattootype]</option>";
        }
        ?>
        </select>


        <label for="uploaded_file">Tattoo Image: </label>
        <input type="file" name="uploaded_file">
        <!-- The max file size is within a hidden field.
        This is set to 2MB and will be handed later within
        the PHP script. -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />

        <input type="submit" name="submit" value="Add Tattoo">
    </form>
</body>
</html>
