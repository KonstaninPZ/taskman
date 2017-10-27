<?php
session_start();

echo "Get:<pre>";
print_r($_GET);

echo "<br>Post:<br>";
print_r($_POST);

echo "<br>Session:";
print_r($_SESSION);

echo "<br>Cookies:";
$file_name = unserialize(stripcslashes($_COOKIE['file_name']));
print_r($file_name);
echo "</pre>";
?>

