<?php
require_once("funktsioonid.php");
if (isset($_REQUEST['teooriatulemus'])) {
    teooriatulemus($_REQUEST['id'], $_REQUEST['teooriatulemus']);
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!doctype html>
<html lang="et">
<head>
    <title>Teooriaeksam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
include("nav.php");
?>
<main>
<h2>Teooria eksam</h2>
<?php
naitaTabel();
echo "</main>";
include("footer.php");
?>
</body>
</html>
