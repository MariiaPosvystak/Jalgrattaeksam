<?php
require_once("konf.php");
global $connect;
if (!empty($_POST["sisestusnupp"])) {
    if (isset($_POST["eesnimi"])) {
        $eesnimi = trim($_POST["eesnimi"]);
    } else {
        $eesnimi = '';
    }

    if (isset($_POST["perekonnanimi"])) {
        $perekonnanimi = trim($_POST["perekonnanimi"]);
    } else {
        $perekonnanimi = '';
    }

    if ($eesnimi === '' || is_numeric($eesnimi)) {
        echo "Sisesta oma eesnimi!";
    } elseif ($perekonnanimi === '' || is_numeric($perekonnanimi)) {
        echo "Sisesta oma perekonnanimi!";
    } else {
        $stmt = $connect->prepare("INSERT INTO jalgrattaeksam (eesnimi, perekonnanimi) VALUES (?, ?)");
        $stmt->bind_param("ss", $eesnimi, $perekonnanimi);
        $stmt->execute();
        $connect->close();
    }
}
?>
<!doctype html>
<html lang="et">
<head>
    <title>Kasutaja registreerimine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
include("nav.php");
?>
<main>
<h1>Registreerimine</h1>
<form action="?" method="post">
    <dl>
        <dt>Eesnimi:</dt>
        <dd><input type="text" name="eesnimi" /></dd>
        <dt>Perekonnanimi:</dt>
        <dd><input type="text" name="perekonnanimi" /></dd>
        <dt><input type="submit" name="sisestusnupp" value="sisesta" /></dt>  </dl>
</form>
</main>
<?php
include("footer.php");
?>
</body>
</html>