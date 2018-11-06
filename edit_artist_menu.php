<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Edit Artist Menu</title>
</head>
<body>
<?php
include 'db_functions.php';

$result = Db_query("SELECT artistId, artistName, imageFN FROM artists;"
);

while ($row=mysqli_fetch_array($result)) {
    echo "<a href='edit_artist_form.php?artistId=" . $row['artistId'] . "'>";
        echo "<div>";
            echo "<img src='" . $row['imageFN'] . "' alt='" . $row['artistName'] . "'/>";
            echo "<h3>" . $row['artistName'] . "</h3>";
        echo "</div>";
    echo "</a>";
}
?>

</body>
</html>