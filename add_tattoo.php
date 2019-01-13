<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Add Tattoo</title>
</head>
<body>
<?php
include 'db_functions.php';

$tattooName = htmlentities($_POST['tattooTitle']);
$tattooDesc = htmlentities($_POST['tattooDescription']);
$typeId = htmlentities($_POST['tattootypeId']);
$artistId = htmlentities($_POST['artistId']);

include 'upload.php';

$path = "Uploads/" . $_FILES['uploaded_file']['name'];

$result = Db_query("INSERT INTO tattoos VALUES (
NULL, '$artistId', '$tattooName', NULL, '$tattooDesc', '$tattootypeId', '$path'
)"
);

if (!$result) {
    die($error = Db_error());
} else {
    echo "<h3>Record Added!!!!</h3>";
}
?>
</body>
</html>