<?php
require('konf.php');
global $connect;
session_start();
if (isset($_SESSION['tuvastamine'])) {
    header('Location: Lubadeleht.php');
    exit();
}
//kontrollime kas väljad on täidetud
if (!empty($_POST['login']) && !empty($_POST['pass'])) {
    //eemaldame kasutaja sisestusest kahtlase pahna
    $login = htmlspecialchars(trim($_POST['login']));
    $pass = htmlspecialchars(trim($_POST['pass']));
    //SIIA UUS KONTROLL
    $sool = 'taiestisuvalinetekst';
    $kryp = crypt($pass, $sool);
    //kontrollime kas andmebaasis on selline kasutaja ja parool
    $paring = "SELECT * FROM kasutajad WHERE kasutaja='$login'";
    $valjund = mysqli_query($connect, $paring);
    //kui on, siis loome sessiooni ja suuname
    if (mysqli_num_rows($valjund) > 0) {
        echo "Kasutajanimi on juba olemas.";
    } else {
        $paring_insert = "INSERT INTO kasutajad (kasutaja, parool) VALUES ('$login', '$kryp')";
        if (mysqli_query($connect, $paring_insert)) {
            echo "Kasutaja on edukalt registreeritud.";
        } else {
            echo "Viga kasutaja registreerimisel: " . mysqli_error($connect);
        }
    }
}
?>
<!doctype html>
<html lang="et">
<head>
    <title>Registreeruge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
include("nav.php");
?>
<main>
    <h1>Registreeruge</h1>
    <form action="?" method="post">
        <dl>
            <dt><label for="login">Kasutajanimi: </label></dt>
            <dd><input type="text" name="login" id="login" ></dd>
            <dt><label for="pass">Parool: </label></dt>
            <dd><input type="password" name="pass" id="pass" ></dd>
            <dt><input type="submit" value="Registreeri"></dt>
        </dl>
    </form>
</main>
<?php
include("footer.php");
?>
</body>
</html>
