<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Add Artist</title>
</head>
<body>
<?php
include 'db_functions.php';

$artistName = htmlentities($_POST['artistName']);
$artistBio = htmlentities($_POST['artistBio']);

include 'upload.php';

$path = "Uploads/" . $_FILES['uploaded_file']['name'];

$result = Db_query("INSERT INTO artists VALUES (
NULL, '$artistName', '$artistBio', '$path'
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