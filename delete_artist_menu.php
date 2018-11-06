<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Delete Artist Menu</title>
</head>
<body>
<form role="form" method="POST" action="delete_artist.php">
    <label for="artists">Artists: </label>
    <select name="artists">

        <?php
        include 'db_functions.php';

        $result = Db_query("SELECT artistId, artistName FROM artists;"
        );

        while ($row=mysqli_fetch_array($result)) {
            echo "<option value=" . $row['artistId'] . ">" . $row['artistName'] . "</option>";
        }
        ?>
    </select>

    <input type="submit" value="Submit">
</form>
</body>
</html>