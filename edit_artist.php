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
                  imageFN='" . $path . "', 
                  WHERE artistId=" . $id . ";"
    );

    //echo "Artist: " . $artistName . " has been edited!!";
}
catch (Exception $e)
{
    echo "Exception has occurred: " . $e->getMessage();
}
?>
</body>
</html>