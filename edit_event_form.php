<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Edit Event Form</title>
</head>
<body>
<?php
include 'db_functions.php';

$id = $_GET['eventId'];

if ($id != NULL || $id != 0) {
    try
    {
        $result = Db_query(
            "SELECT * FROM events WHERE eventId=" . $id . ";"
        );

        $row = mysqli_fetch_row($result);

        $id = $row[0];
        $eventName = $row[1];
        $eventDate = $row[2];
        $eventDescription = $row[3];
        $path = $row[5];
    }
    catch (Exception $e)
    {
        echo "Exception Occurred: " . $e->getMessage();
    }
}
?>

<form role="form" enctype="multipart/form-data" name="edit" method="POST" action="edit_event.php">
    <input type="hidden" value="<?php echo $id; ?>" name="id" />

    <label for="eventName">Event Name: </label>
    <input name="eventName" type="text" value="<?php echo $eventName; ?>">

    <label for="eventDate">Event Date: </label>
    <input type="date" name="eventDate"
           value="<?php echo $eventDate; ?>"
           min="2018-01-01">

    <label for="eventDesc">Event Description: </label>
    <textarea name="eventDesc"><?php echo $eventDescription; ?></textarea>

    <label for="uploaded_file">Event Image: </label>
    <input type="file" name="uploaded_file" value="<?php echo $path; ?>">
    <!-- The max file size is within a hidden field.
    This is set to 2MB and will be handed later within
    the PHP script. -->
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />

    <input type="submit" name="submit" value="Edit Event">
</form>
</body>
</html>