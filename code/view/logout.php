<!DOCTYPE html>
<html>
<head>
<title>logout</title>
</head>
<body>

<?php
session_start();
session_destroy();
header('Location: home_page_guest.php');

?>
</body>
</html>