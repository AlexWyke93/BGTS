<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/**
 * PHP version 7.2.10
 *
 * @category PHP
 * @package  BGTS-BE
 * @author   Alexander Wyke <alexwyke93@gmail.com>
 * @license  none
 * @link     n/a
 */

include 'db_functions.php';

$result = Db_select("SELECT * FROM artists");

?>
</body>
</html>