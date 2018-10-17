<?php
//Where the file is going to be placed
$target_path = "Uploads/";

//if you have troubles withyour script, uncomment the below line of code
//echo "<p>" . VAR_DUMP($_FILES) . "</p>";
var_dump($_FILES);
if ((($_FILES["uploaded_file"]["type"] == "image/gif")
        || ($_FILES["uploaded_file"]["type"] == "image/jpeg")
        || ($_FILES["uploaded_file"]["type"] == "image/jpg")
        || ($_FILES["uploaded_file"]["type"] == "image/pjpeg")
        || ($_FILES["uploaded_file"]["type"] == "image/x-png")
        || ($_FILES["uploaded_file"]["type"] == "image/png"))
    && ($_FILES["uploaded_file"]["type"] < 2097152))
{
    if ($_FILES["uploaded_file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["uploaded_file"]["error"] . "<br>";
    }
    else
    {
        echo "Upload: " . $_FILES["uploaded_file"]["name"] . "<br>";
        echo "Type: " . $_FILES["uploaded_file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["uploaded_file"]["size"] / 1024) . "kB<br>";
        echo "Temp file: " . $_FILES["uploaded_file"]["tmp_name"] . "<br>";

        if (file_exists($target_path . $_FILES["uploaded_file"]["name"]))
        {
            echo $_FILES["uploaded_file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_path . $_FILES["uploaded_file"]["name"]);
            echo "File Uploaded!";
        }
    }
}
else
{
    echo "Invalid file!!!!";
}
?>