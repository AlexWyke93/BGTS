<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Delete Artist</title>
</head>
<body>
<?php
include 'db_functions.php';

$id = $_POST['artists'];

try {
    $result = Db_query("DELETE FROM artists WHERE artistId=" . $id . ";"
    );
    echo "Artist Deleted Successfully!!!";
}
catch (Exception $e)
{
    $e->getMessage();
}
?>
</body>
</html>