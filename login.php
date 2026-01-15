<?php  ?>
<?php
require('konf.php');
global $connect;
session_start();
if (isset($_SESSION['tuvastamine'])) {
    header('Location: admin.php');
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
    $paring = "SELECT * FROM kasutajad WHERE kasutaja='$login' AND parool='$kryp'";
    $valjund = mysqli_query($connect, $paring);
    //kui on, siis loome sessiooni ja suuname
    if (mysqli_num_rows($valjund)==1) {
        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: admin.php');
    } else {
        echo "kasutaja või parool on vale";
    }
}
?>
<!doctype html>
<html lang="et">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
include("nav.php");
?>
<main>
    <h1>Login</h1>
    <form action="" method="post" class="center">
        <label for="login">Login: </label><br>
        <input type="text" name="login" id="login"><br><br>
        <label for="pass">Password: </label><br>
        <input type="password" name="pass" id="pass"><br><br>
        <input type="submit" value="Logi sisse">
    </form>
</main>
<?php
include("footer.php");
?>
</body>
</html>