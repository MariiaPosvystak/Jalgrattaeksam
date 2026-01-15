<?php
require("funktsioonid.php");
require("konf.php");
global $connect;
if(!empty($_REQUEST["korras_id"])){
    ringtee_korras($_REQUEST['korras_id']);
    header("Location:". $_SERVER['PHP_SELF']);
    exit;
}
if(!empty($_REQUEST["vigane_id"])){
    ringtee_vigane($_REQUEST['vigane_id']);
    header("Location:". $_SERVER['PHP_SELF']);
    exit;
}
$kask=$connect->prepare("SELECT id, eesnimi, perekonnanimi   FROM jalgrattaeksam WHERE teooriatulemus>=9 AND ringtee=-1");  $kask->bind_result($id, $eesnimi, $perekonnanimi);
$kask->execute();
?>
<!doctype html>
<html lang="et">
<head>
    <title>Ringtee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
include("nav.php");
?>
<h1>Ringtee</h1>
<table>
    <?php
    while($kask->fetch()){
        echo "
 <tr> 
 <td>$eesnimi</td> 
 <td>$perekonnanimi</td> 
 <td> 
 <a href='?korras_id=$id'>Korras</a> 
 <a href='?vigane_id=$id'>Ebaõnnestunud</a> 
 </td> 
</tr> 
 ";
    }
    ?>
</table>
<?php
include("footer.php");
?>
</body>
</html>
