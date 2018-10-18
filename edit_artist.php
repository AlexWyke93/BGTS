<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0>
    <title>Edit Artist</title>
</head>
<body>
<?php
include 'db_functions.php';

$id = $_POST['id'];
$artistName = htmlentities($_POST['artistName']);
$artistBio = htmlentities($_POST['artistBio']);

include 'upload.php';

$path = htmlentities("Uploads/" . $_FILES['uploaded_file']['name']);

try
{
    $result = Db_query(
        "UPDATE artists 
                  SET artistName='" . $artistName . "', 
                  artistBio='" . $artistBio . "',
                  imageFN='" . $path . "'
                  WHERE artistId=" . $id . ";"
    );


    if (!$result) {
        die($error = Db_error());
    } else {
        echo "Artist: " . $artistName . " has been edited!!";
    }
}
catch (Exception $e)
{
    echo "Exception has occurred: " . $e->getMessage();
}
?>
</body>
</html>