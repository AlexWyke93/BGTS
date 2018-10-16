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
    <title>Add Artist Form</title>
</head>
<body>
    <h1>New Artist</h1>
    <form id="add" role="form" method="POST" action="add_artist.php" enctype="multipart/form-data">
        <label for="artistName">Artist Name: </label>
        <input type="text" name="artistName">

        <label for="artistBio">Artist Bio: </label>
        <textarea type="text" name="artistBio"></textarea>

        <label for="artistAvatar">Artist Avatar: </label>
        <input type="file" name="artistAvatar">
        <!-- The max file size is within a hidden field.
        This is set to 2MB and will be handed later within
        the PHP script. -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />

        <input type="submit" name="submit" value="Add Artist">
    </form>
</body>
</html>
