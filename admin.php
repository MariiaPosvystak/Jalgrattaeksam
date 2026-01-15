<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>admin</title>
</head>
<body>
<h1>Salajane info</h1>
<p>Salainfo</p>
<form action="logout.php" method="post">
    <input type="submit" value="Logi välja" name="logout">
</form>
</body>
</html>