<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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